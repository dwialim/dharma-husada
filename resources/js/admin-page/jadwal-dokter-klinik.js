"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'
import {renderSelect2} from '@module/select2'
import {randomId} from '@module/generate'
import {initTooltip, closeTooltip} from '@module/tooltip'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

const $dokterTable = $("#dt-jadwal-dokter-klinik")

function dataTable(){
	$dokterTable.dataTable({
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
		ajax:{ url: $dokterTable.data('route-datatable'), type: "GET" },
		columns: [
			{data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{data: 'dokter.nama', name: 'dokter.nama'},
			{data: 'poli_klinik.nama', name: 'poli_klinik.nama'},
			{data: 'action', name: 'action'}
		],
		initComplete: function (settings, json) {
			$("#dt-jadwal-dokter-klinik_wrapper .container-button-add").html(`
				<button type="button" class="btn btn-sm btn-primary px-3 btn-add" id="btn-add">
					<i class="ti ti-plus fw-bolder"></i> Tambah Jadwal
				</button>
			`)

			// Inisialisasi ulang tooltip setelah elemen dimasukkan ke DOM
			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
			tooltipTriggerList.forEach(function (tooltipTriggerEl) {
				new bootstrap.Tooltip(tooltipTriggerEl);
			})

			$("#dt-jadwal-dokter-klinik_wrapper thead tr .rm-sort").removeClass('dt-ordering-asc')
		}
	})
}

(() => {
	dataTable()

})()

/** Show form */
$(document).on('click', '.container-button-add .btn-add', async function () {
	const response = await postRequest($dokterTable.data('route-form'))

	$("#master-container").fadeOut(400, function () {
		$("#seconds-container").empty().html($(response.data.data)).hide().fadeIn(400)

		renderSelect2($(".single-select"))
		initTooltip()
	})
})
/** Show form end */

$(document).on('click', ".btn-create", async function () {
	closeTooltip(this)

	const randID = randomId(15),
		rows = $('#container-jadwal tr');

	let rowCount = rows.length

	if(rows.find('#show-empty').length == 0 && rowCount > 0){
		var message = ''

		rows.each(function(){
			let misi = $(this).find('select[name="hari[]"]').val()

			if(!misi) message = ' <b>Hari</b> belum diisi.'
		})

		if(message) return swal.warning({html: message})

		rowCount += 1
	}else{
		$('#container-jadwal').empty()
	}

	let newRow = $(`
		<tr class="rows">
			<td><span class="number">${rowCount}</span></td>
			<td>
				<input type="hidden" name="is_new[]" value="1">
				<input type="hidden" name="jadwal_dokter_klinik_detail_id[]" value="${randID}">
				<select class="form-select" name="hari[]" aria-label="Select hari" id="hari">
					<option selected value="">-- PILIH OPSI --</option>
					<option value="1">SENIN</option>
					<option value="2">SELASA</option>
					<option value="3">RABU</option>
					<option value="4">KAMIS</option>
					<option value="5">JUMAT</option>
					<option value="6">SABTU</option>
					<option value="7">MINGGU</option>
				</select>
			</td>
			<td>
				<input type="time" class="form-control waktu-awal" id="floatingWaktuAwal" name="waktu_awal[]" autocomplete="off" placeholder="00:00">
			</td>
			<td width="25%;">
				<div class="row m-0">
					<div class="col-md-9">
						<input type="time" class="form-control" id="floatingWaktuAkhir" name="waktu_akhir[]" autocomplete="off" placeholder="00:00">
					</div>
					<div class="col-md-3 d-md-flex justify-content-space-between align-items-center">
						<input type="hidden" class="form-check-input sampai-selesai" name="sampai_selesai[]" id="sampai-selesai-${randID}" value="0">
						<input type="checkbox" class="form-check-input sampai-selesai-check" name="sampai_selesai_check[]" id="sampai-selesai-check-${randID}">
						<label class="form-check-label" for="sampai-selesai-check-${randID}"> s/d selesai?</label>
					</div>
				</div>
			</td>
			<td class="text-center">
				<i class="ti ti-trash text-danger pointer hover-danger f-20 btn-remove"
					data-bs-toggle="tooltip"
					data-bs-html="true"
					title="<b>Hapus</b>"
				></i>
			</td>
		</tr>
	`)

	$("#container-jadwal").append(newRow)
	newRow.animate({ opacity: 1 }, 600)

	initTooltip()

	// $(".waktu-awal").setRules("0-9:")
	// renderSelect2(newRow.(".single-select"))
})

$(document).on('click', '.btn-remove', async function() {
	let $this = $(this),
		tooltipInstance = bootstrap.Tooltip.getInstance(this) || new bootstrap.Tooltip(this);

	// Jika ini pertama kali diklik, tampilkan pesan peringatan
	if (!$this.data("confirm")) {
		$this.data("confirm", true).attr("data-bs-original-title", "Klik sekali lagi untuk menghapus")
		tooltipInstance.setContent({ '.tooltip-inner': "<b>Klik sekali lagi untuk menghapus</b>" })
		tooltipInstance.show()

		// Hapus status jika pengguna tidak mengklik lagi dalam 2 detik
		return setTimeout(() => {
			$this.removeData("confirm").attr("data-bs-original-title", "<b>Hapus</b>")
			tooltipInstance.setContent({ '.tooltip-inner': "<b>Hapus</b>" })
		}, 2000)
	}

	// Hapus hanya baris yang diklik
	$(this).closest(".rows").remove();

	// Perbarui nomor setelah penghapusan
	$("#container-jadwal tr").each(function (index) {
		$(this).find("td:first .number").text(index + 1)
	})

	if($('#container-jadwal tr').length==0){ // Jika tbody tidak ada tr lagi, append tr dibawah ini
		let newRow = $(`<tr class="op-0 no-select"><td colspan="3" id="show-empty"><i>Tidak ada data</i></td></tr>`)

		$("#container-jadwal").append(newRow)
		newRow.animate({ opacity: 1 }, 600)
	}

	closeTooltip(this)
})

$(document).on('change', '.sampai-selesai-check', async function() {
	let $this = $(this),
		$id = $this.data('id'),
		$row = $this.closest('tr'),
		$waktuAkhir = $row.find('input[name="waktu_akhir[]"]');

	$waktuAkhir.prop('readonly', $this.is(':checked') ? true : false).val('')

	if ($this.is(':checked')) {
		$row.find('.sampai-selesai').val('1')
	} else {
		$row.find('.sampai-selesai').val('0')
	}
})

$("#dt-jadwal-dokter-klinik").on('click', '.btn-edit', async function () {
	const response = await postRequest($dokterTable.data('route-form'), {jadwal_dokter_klinik_id: $(this).data('id')})

	$("#master-container").fadeOut(400, function () {
		$("#seconds-container").empty().html($(response.data.data)).hide().fadeIn(400)
		renderSelect2($(".single-select"))
		initTooltip()
	})
})

$("#dt-jadwal-dokter-klinik").on('click', '.btn-destroy', async function (e) {
	const $this = $(this).attr("disabled", true),
		id = $this.data("id");

	const { isConfirmed } = await swal.confirm();

	if (!isConfirmed) return $this.attr("disabled", false);

	const response = await postRequest($dokterTable.data("route-destroy"), { jadwal_dokter_klinik_id: id })

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
	const $this = $(this).prop('disabled', true),
		$modal = $(".loading-modal"),
		$form = $("#form-jadwal-dokter-klinik"),
		$rows = $("#container-jadwal tr").find('#show-empty');

	if ($rows.length > 0) {
		await swal.warning({title: 'Tidak ada data untuk disimpan!', text: ''})
		return $this.prop('disabled', false)
	}

	// Tunggu modal benar-benar terbuka sebelum lanjut
	await new Promise(resolve => $modal.modal('show').one('shown.bs.modal', resolve))

	const response = await postRequest($form.data('route-store'), new FormData($form[0]))

	// Tunggu modal benar-benar tertutup sebelum lanjut
	await new Promise(resolve => $modal.modal('hide').one('hidden.bs.modal', resolve))

	const success = [200, 201].includes(response.status);

	await swal[success ? 'success' : 'warning']({
		title: success ? response.data.message : '',
		text: success ? '' : response.data.errors ?? response.data.message,
		hideClass: animasi.fadeOutUp,
	})

	$this.prop('disabled', false)

	if (!success) return;

	$("#seconds-container").fadeOut(400, function () {
		$("#master-container").fadeIn(400)
		$("#seconds-container").empty()
		dataTable()
	})
})
