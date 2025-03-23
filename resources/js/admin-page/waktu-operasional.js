"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

(() => {
	$(".btn-simpan").on('click', async function() {
		const $this = $(this).prop('disabled', true).addClass('loading'),
			$form = $("#form-waktu-operasional"),
			data = new FormData($form[0]);

		const response = await postRequest($form.data('route-store'), data)

		const success = [200, 201].includes(response.status);

		await swal[success ? 'success' : 'warning']({
			title: success ? response.data.message : '',
			text: success ? '' : response.data.errors ?? response.data.message,
			hideClass: animasi.fadeOutUp,
		})

		if (success) window.location.reload()

		$this.prop('disabled', false).removeClass('loading')
	})
})()