"use strict";

import {getRequest} from '@module/axios'

function numberFormat(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

(async () => {
	const response = await getRequest($("#footer").data('route-footer'))

	if (response.status != 200) return;

	const hari = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
		data = response.data.data,
		waktuOperasional = data.waktu_operasional,
		profil = data.profil,
		stats = data.stats;

	hari.forEach((val, idx) => {
		var obj = waktuOperasional[idx + 1],
			text = `${obj.waktu_awal ? obj.waktu_awal : ''} - ${obj.waktu_akhir ? obj.waktu_akhir + ' WIB' : ''}`,
			$target = $(`#footer .waktu-${val}`)

		$target.fadeOut(300, function () {
			$(this).text(text).fadeIn(300)
		})
	})

	$(".contact-alamat").text(profil.alamat)
	$(".contact-telepon").text(profil.telepon)
	$(".contact-email").text(profil.email)
	$(".contact-pendaftaran").text(profil.whatsapp === undefined || profil.whatsapp === null ? '' : profil.whatsapp.replace(/\D/g, ""))

	$(".stats-item .stats-hari").text(numberFormat(stats.hari))
	$(".stats-item .stats-bulan").text(numberFormat(stats.bulan))
	$(".stats-item .stats-total").text(numberFormat(stats.total))

	$(".social-links .sl-twitter").attr('href', profil.twitter === null || profil.twitter === undefined ? 'javascript:void(0)' : profil.twitter)
	$(".social-links .sl-facebook").attr('href', profil.facebook === null || profil.facebook === undefined ? 'javascript:void(0)' : profil.facebook)
	$(".social-links .sl-instagram").attr('href', profil.instagram === null || profil.instagram === undefined ? 'javascript:void(0)' : profil.instagram)
	$(".social-links .sl-whatsapp").attr('href', profil.whatsapp === null || profil.whatsapp === undefined ? 'javascript:void(0)' : `https://wa.me/${profil.whatsapp}`)
	$(".social-links .sl-tiktok").attr('href', profil.tiktok === null || profil.tiktok === undefined ? 'javascript:void(0)' : profil.tiktok)
})()