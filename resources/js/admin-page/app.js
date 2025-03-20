"use strict";
import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

$("#body-admin").fadeIn(500)

$(".btn-logout").click(async function () {
	var $this = $(this)

	swal.confirm({
		text: 'Ingin keluar dari sesi ini?',
		confirmButtonText: 'Ya, keluar'
	}).then(async(res) => {
		if (!res.isConfirmed) return;

		const urlDestroyToken = $this.data('url-destroy-token'),
			urlLogin = $this.data('url-login'),
			response = await postRequest(urlDestroyToken);

		if (response.status != 200) return swal.warning({text: response.data.message});

		swal.success({text: response.data.message}).then(async () => {
			$("#body-admin").fadeOut(400)
			window.location.href = urlLogin
		})
	})

	// module.swal.confirm({
	// 	text: 'Ingin keluar dari sesi ini?',
	// 	confirmButtonText: 'Ya, keluar'
	// }).then(async(res) => {
	// 	if (!res.isConfirmed) return;
	// 	var response = await postRequest("{{route('auth.removeToken')}}"),
	// 		refreshToken = await postRequest("{{route('auth.refreshToken')}}")

	// 	if (response.status != 200) return module.swal.warning({text: response.data.message});

	// 	await module.swal.success({text: response.data.message})

	// 	$("#main-page").fadeOut(function() {
	// 		localStorage.clear()

	// 		$('meta[name="csrf-token"]').attr('content', refreshToken.data.token)

	// 		setUpTokenAjax()

	// 		$(this).empty().html(response.data.data).fadeIn('400')
	// 	})
	// })
})