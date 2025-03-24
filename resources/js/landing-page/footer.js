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
	$(".contact-pendaftaran").text(profil.whatsapp.replace(/\D/g, ""))

	$(".stats-item .stats-hari").text(numberFormat(stats.hari))
	$(".stats-item .stats-bulan").text(numberFormat(stats.bulan))
	$(".stats-item .stats-total").text(numberFormat(stats.total))

	$(".social-links .sl-twitter").attr('href', profil.twitter !== undefined ? profil.twitter : 'javascript:void(0)')
	$(".social-links .sl-facebook").attr('href', profil.facebook !== undefined ? profil.facebook : 'javascript:void(0)')
	$(".social-links .sl-instagram").attr('href', profil.instagram !== undefined ? profil.instagram : 'javascript:void(0)')
	$(".social-links .sl-whatsapp").attr('href', profil.whatsapp !== undefined ? `https://wa.me/${profil.whatsapp}` : 'javascript:void(0)')
	$(".social-links .sl-tiktok").attr('href', profil.tiktok !== undefined ? profil.tiktok : 'javascript:void(0)')
})()