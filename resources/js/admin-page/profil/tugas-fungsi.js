"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

(function () {
	let editor;

	ClassicEditor
	.create( document.querySelector('#classic-editor'), {
		// ... Other configuration options ...
		// toolbar: [ 'undo', 'redo', 'bold', 'italic', 'numberedList', 'bulletedList' ]
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

	$(".btn-simpan").click(async function () {
		const $this = $(this).prop('disabled', true),
			$modal = $(".loading-modal"),
			$form = $("#form-tugas-fungsi"),
			data = new FormData($form[0]);

		data.set('content', editor.getData())


		// Tunggu modal benar-benar terbuka sebelum lanjut
		await new Promise(resolve => $modal.modal('show').one('shown.bs.modal', resolve))

		const response = await postRequest($form.data('route-store'), data)

		// Tunggu modal benar-benar tertutup sebelum lanjut
		await new Promise(resolve => $modal.modal('hide').one('hidden.bs.modal', resolve))

		const success = [200, 201].includes(response.status);

		await swal[success ? 'success' : 'warning']({
			title: success ? response.data.message : '',
			text: success ? '' : response.data.errors ?? response.data.message,
			hideClass: animasi.fadeOutUp,
		})

		if (success) window.location.reload()

		$this.prop('disabled', false)
	})
})()