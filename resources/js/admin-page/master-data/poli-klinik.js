"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

const poliKlinikTable = $("#dt-poli-klinik")

function dataTable(){
	poliKlinikTable.dataTable({
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
			{ targets: [0, 2], orderable: false, searchable: false, className: 'text-center' },
			{ targets: [0], width: '5%' },
			{ targets: [2], width: '15%' },
		],
		ajax:{ url: poliKlinikTable.data('route-datatable'), type: "GET" },
		columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'nama', name: 'nama'},
			{data: 'action', name: 'action'}
		],
		initComplete: function (settings, json) {
			$("#dt-poli-klinik_wrapper .container-button-add").html(`
				<button type="button" class="btn btn-sm btn-primary px-3 btn-add" id="btn-add">
					<i class="ti ti-plus fw-bolder"></i> Tambah Poli
				</button>
			`)

			// Inisialisasi ulang tooltip setelah elemen dimasukkan ke DOM
			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
			tooltipTriggerList.forEach(function (tooltipTriggerEl) {
				new bootstrap.Tooltip(tooltipTriggerEl);
			})

			$(".table-responsive #dt-poli-klinik_wrapper thead tr .rm-sort").removeClass('dt-ordering-asc')
		}
	})
}

$(() => {
	dataTable()
})

$(document).on('click', '.container-button-add .btn-add', async function () {
	const response = await postRequest(poliKlinikTable.data('route-form'))

	$("#master-container").fadeOut(400, function () {
		$("#seconds-container").empty().html($(response.data.data)).hide().fadeIn(400)
	})
})

$("#dt-poli-klinik").on('click', '.btn-edit', async function () {
	const response = await postRequest(poliKlinikTable.data('route-form'), { poli_klinik_id: $(this).data('id')} )

	$("#master-container").fadeOut(400, function () {
		$("#seconds-container").empty().html($(response.data.data)).hide().fadeIn(400)
	})
})

$("#dt-poli-klinik").on('click', '.btn-destroy', async function (e) {
	const $this = $(this).attr("disabled", true),
		id = $this.data("id");

	const { isConfirmed } = await swal.confirm();

	if (!isConfirmed) return $this.attr("disabled", false);

	const response = await postRequest(poliKlinikTable.data("route-destroy"), { poli_klinik_id: id })

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

$("#seconds-container").on('click', '.btn-kembali', function () {
	$("#seconds-container").fadeOut(400, function () {
		$("#master-container").fadeIn(400)
		$("#seconds-container").empty()
	})
})

$("#seconds-container").on('click', '.btn-simpan', async function () {
	var $this = $(this)

	$this.attr('disabled', true)

	$(".loading-modal").modal('show').one('shown.bs.modal', async function() {
		const data = new FormData($("#form-poli-klinik")[0]),
			response = await postRequest($("#form-poli-klinik").data('route-store'), data);

		$(".loading-modal").modal('hide').one('hidden.bs.modal', async() => {
			if (response.status != 201) {
				await swal.warning({
					text: response.data.errors ?? response.data.message,
					hideClass: animasi.fadeOutUp,
				})

				return $this.attr('disabled', false)
			}

			await swal.success({
				title: response.data.message,
				text: '',
				hideClass: animasi.fadeOutUp,
			})

			$("#seconds-container").fadeOut(400, function () {
				$("#master-container").fadeIn(400)
				$("#seconds-container").empty()
				dataTable()
			})

			$this.attr('disabled', false)
		})
	})
})