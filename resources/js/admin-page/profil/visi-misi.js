"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'
import {randomId} from '@module/generate'
import {initTooltip, closeTooltip} from '@module/tooltip'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

const poliKlinikTable = $("#dt-struktur-organisasi")

$(".btn-create").click(async function () {
	closeTooltip(this)

	const randID = randomId(15),
		rows = $('#container-misi tr');

	let rowCount = rows.length

	if(rows.find('#show-empty').length == 0 && rowCount > 0){
		var message = ''

		rows.each(function(){
			let misi = $(this).find('textarea[name="misi[]"]').val()

			if(!misi) message = ' <b>Misi</b> belum diisi.'
		})

		if(message) return swal.warning({html: message})

		rowCount += 1
	}else{
		$('#container-misi').empty()
	}

	let newRow = $(`
		<tr class="rows op-0">
			<td><span class="number">${rowCount}</span></td>
			<td>
				<input type="hidden" name="misi_id[]" value="${randID}">
				<input type="hidden" name="is_new[]" value="1">
				<div class="form-floating">
					<textarea class="form-control" id="floatingMisi" style="height: 55px" name="misi[]"></textarea>
					<label for="floatingMisi">Misi</label>
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

	$("#container-misi").append(newRow)
	newRow.animate({ opacity: 1 }, 600)

	initTooltip()
})

$("#container-misi").on('click', '.btn-remove', async function() {
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
	$("#container-misi tr").each(function (index) {
		$(this).find("td:first .number").text(index + 1)
	})

	if($('#container-misi tr').length==0){ // Jika tbody tidak ada tr lagi, append tr dibawah ini
		let newRow = $(`<tr class="op-0 no-select"><td colspan="3" id="show-empty"><i>Tidak ada data</i></td></tr>`)

		$("#container-misi").append(newRow)
		newRow.animate({ opacity: 1 }, 600)
	}

	closeTooltip(this)
})

$(".btn-simpan").click(async function () {
	var $this = $(this)

	$this.attr('disabled', true)

	$(".loading-modal").modal('show').one('shown.bs.modal', async function() {
		const data = new FormData($("#form-visi-misi")[0]),
			response = await postRequest($("#form-visi-misi").data('route-store'), data);

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

			$this.attr('disabled', false)
			window.location.reload()
		})
	})
})