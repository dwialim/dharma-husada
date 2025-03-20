"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

$("#input-gambar").change(function (event) {
	var file = event.target.files[0],
		outPut = $("#outPut"), // Ambil elemen img
		container = $("#container-pan"); // Container untuk gambar

	if (!file) return;

	container.fadeOut(300, function () {
		var imageUrl = URL.createObjectURL(file)

		outPut.attr("src", imageUrl).addClass("img-thumbnail").fadeIn(500)

		outPut[0].onload = function () { URL.revokeObjectURL(imageUrl) }

		container.fadeIn(500)
		$("#outPut").data('src') && $(".btn-reset").fadeIn(500)
	})
})

$(".btn-reset").click(async function (event) {
	const outPut = $("#outPut"),
		src = outPut.data('src'),
		container = $("#container-pan"); // Container untuk gambar

	if (!outPut) return;

	const response = await fetch(src),
		blob = await response.blob();

	container.fadeOut(300, function () {
		var imageUrl = URL.createObjectURL(blob)

		outPut.attr("src", imageUrl).addClass("img-thumbnail").fadeIn(500)

		outPut[0].onload = function () { URL.revokeObjectURL(imageUrl) }

		container.fadeIn(500)
		&& $(".btn-reset").fadeOut(500)
	})
})

$(".btn-reset").click(() => { $("#input-gambar").val('') })

$(".btn-simpan").click(async function() {
	const $this = $(this).prop('disabled', true),
		$modal = $(".loading-modal"),
		$form = $("#form-struktur-organisasi");

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

	if (success) $("#input-gambar").val('')

	$(".btn-reset").fadeOut(500)

	$this.prop('disabled', false)
})