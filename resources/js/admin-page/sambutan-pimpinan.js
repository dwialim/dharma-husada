"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

(() => {
	let editor;

	ClassicEditor
	.create( document.querySelector('#classic-editor'), {
		toolbar: {
			items: [
				'undo', 'redo',
				'|',
				'heading',
				'|',
				'bold', 'italic',
				'|',
				'link', 'blockQuote',
				'|',
				'bulletedList', 'numberedList'
			],
			shouldNotGroupWhenFull: false
		}
	})
	.then(newEditor => {
		editor = newEditor
	})
	.catch( error => {
		console.log( error )
	})

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

	$(".btn-simpan").click(async function () {
		const $this = $(this).prop('disabled', true).addClass('loading'),
			$form = $("#form-sambutan-pimpinan"),
			data = new FormData($form[0]);

		data.set('content', editor.getData())

		const response = await postRequest($form.data('route-store'), data),
			success = [200, 201].includes(response.status);

		await swal[success ? 'success' : 'warning']({
			title: success ? response.data.message : '',
			text: success ? '' : response.data.errors ?? response.data.message,
			hideClass: animasi.fadeOutUp,
		})

		$this.prop('disabled', false).removeClass('loading')

		if (success) window.location.reload()
	})
})()