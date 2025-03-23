"use strict";

import {getRequest} from '@module/axios'

(async () => {
	const response = await getRequest($("#footer").data('route-waktu-opreasional'))

	if (response.status != 200) return;

	const hari = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
		data = response.data.data;

	hari.forEach((val, idx) => {
		var obj = data[idx + 1],
			text = `${obj.waktu_awal ? obj.waktu_awal : ''} - ${obj.waktu_akhir ? obj.waktu_akhir + ' WIB' : ''}`,
			$target = $(`#footer .waktu-${val}`)

		$target.fadeOut(300, function () {
			$(this).text(text).fadeIn(300)
		})

		console.log(obj)
		console.log("\n\n")
	})
})()