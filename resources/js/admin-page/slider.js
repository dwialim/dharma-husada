"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

const $sliderTable = $("#dt-slider")

function dataTable(){
	$sliderTable.dataTable({
		sDom: `
			<'row d-md-flex justify-content-between align-items-center'
				<'col-md-auto'l>
				<'col-md-auto ms-auto'f>
				<'col-md-auto container-button-add'>
			>
			<'row mt-2' <'col-sm-12' tr>>
			<'row mt-2 d-md-flex justify-content-between align-items-center'
				<'col-md-auto' i>
				<'col-md-auto' p>
			>
		`,
		scrollX: true,
		bPaginate: true,
		bFilter: true,
		bDestroy: true,
		processing: true,
		serverSide: true,
		searchDelay: 500,
		language: { searchPlaceholder: 'Masukkan kata kunci' },
		columnDefs: [
			{ targets: [0, 3], orderable: false, searchable: false, className: 'text-center' },
			{ targets: [0], width: '5%' },
			{ targets: [3], width: '15%' },
		],
		ajax:{ url: $sliderTable.data('route-datatable'), type: "GET" },
		columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'judul', name: 'judul'},
			{data: 'content', name: 'content'},
			{data: 'action', name: 'action'}
		],
		initComplete: function (settings, json) {
			$("#dt-slider_wrapper .container-button-add").html(`
				<button type="button" class="btn btn-sm btn-primary px-3 btn-add" id="btn-add">
					<i class="ti ti-plus fw-bolder"></i> Tambah Data
				</button>
			`)

			// Inisialisasi ulang tooltip setelah elemen dimasukkan ke DOM
			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
			tooltipTriggerList.forEach(function (tooltipTriggerEl) {
				new bootstrap.Tooltip(tooltipTriggerEl);
			})

			$("#dt-slider_wrapper thead tr .rm-sort").removeClass('dt-ordering-asc')
		}
	})
}

$(() => {
	dataTable()
})


$(document).on('click', '.container-button-add .btn-add', async function () {
	const response = await postRequest($sliderTable.data('route-form'))

	$("#master-container").fadeOut(400, function () {
		$("#seconds-container").empty().html($(response.data.data)).hide().fadeIn(400)
	})
})

$sliderTable.on('click', '.btn-edit', async function () {
	const response = await postRequest($sliderTable.data('route-form'), {slider_id: $(this).data('id')})

	$("#master-container").fadeOut(400, function () {
		$("#seconds-container").empty().html($(response.data.data)).hide().fadeIn(400)
	})
})

$sliderTable.on('click', '.btn-destroy', async function (e) {
	const $this = $(this).attr("disabled", true),
		id = $this.data("id");

	const { isConfirmed } = await swal.confirm();

	if (!isConfirmed) return $this.attr("disabled", false);

	const response = await postRequest($sliderTable.data("route-destroy"), { slider_id: id })

	if (response.status !== 200) {
		await swal.warning({
			text: response.data.errors ?? response.data.message,
			hideClass: animasi.fadeOutUp,
		})
	} else {
		await swal.success({
			title: response.data.message,
			text: "",
			hideClass: animasi.fadeOutUp,
		})

		dataTable()
	}

	$this.attr("disabled", false)
})

$("#seconds-container").on('change', '#input-gambar', function (event) {
	var file = event.target.files[0],
		// outPut = $("#outPut")[0], // Ambil elemen img
		outPut = $("#outPut"), // Ambil elemen img
		// btn = $("#btnOutPut"),
		container = $("#container-pan"); // Container untuk gambar

	if (!file) return;

	container.fadeOut(300, function () {
		var imageUrl = URL.createObjectURL(file)

		outPut.attr("src", imageUrl).addClass("img-thumbnail").fadeIn(500)
		// btn.attr("data-big", imageUrl)

		outPut[0].onload = function () { URL.revokeObjectURL(imageUrl) }

		container.fadeIn(500)
	})
})

$("#seconds-container").on('click', '.btn-kembali', function () {
	$("#seconds-container").fadeOut(400, function () {
		$("#master-container").fadeIn(400)
		$("#seconds-container").empty()
	})
})

$("#seconds-container").on('click', '.btn-simpan', async function () {
	const $this = $(this).prop('disabled', true).addClass('loading'),
		$form = $("#form-slider"),
		data = new FormData($form[0]);

	const response = await postRequest($form.data('route-store'), data)

	const success = [200, 201].includes(response.status);

	await swal[success ? 'success' : 'warning']({
		title: success ? response.data.message : '',
		text: success ? '' : response.data.errors ?? response.data.message,
		hideClass: animasi.fadeOutUp,
	})

	$this.prop('disabled', false).removeClass('loading')

	if (!success) return;

	$("#seconds-container").fadeOut(400, function () {
		$("#master-container").fadeIn(400)
		$("#seconds-container").empty()
		dataTable()
	})
})
