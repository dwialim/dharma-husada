"use strict";
import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

$("#body-auth").fadeIn(900)

$("#btn-login").click(async function () {
	let data = {username: $("#username").val(), password: $("#password").val()};

	const urlToken = $(this).data('url-token'),
		urlDashboard = $(this).data('url-dashboard'),
		sendRequest = await postRequest(urlToken, data);

	if (sendRequest.status != 200) return swal.warning({
		text: sendRequest.data.message,
		showClass: animasi.fadeInDown,
		hideClass: animasi.fadeOutUp,
	});

	await swal.success({
		title: sendRequest.data.message,
		text: '',
		showConfirmButton: false,
		timer: 900,
		hideClass: animasi.fadeOutUp,
	})

	$(".auth-main").fadeOut(function() {
		setTimeout(() => { window.location.href = urlDashboard }, 100)
	})
})