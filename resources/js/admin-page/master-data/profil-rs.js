"use strict";

import {initModule} from '@module/app'
import {postRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi,
	map,
	currentMarker = null, // Pastikan hanya ada satu marker
	tileLayer,
	lat = $("#input-latitude").val(),
	lng = $("#input-longitude").val(),
	year = new Date().getFullYear();

$(() => {
	/** Maps */
	$("#map").fadeIn(600, () => {
		try {
			if (map) {
				map.off()
				map.remove()
			}
			if (tileLayer) map.removeLayer(tileLayer); // Hapus tile layer lama jika ada
		} catch (error) {
			console.warn("Map tidak ditemukan atau sudah dihapus:", error);
		}

		// Inisialisasi map
		map = L.map('map', {
			gestureHandling: true,
		}).fitWorld()

		// Tambahkan tile layer
		tileLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			maxZoom: 20,
			subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
			attribution: '&copy; Google Maps'
		}).addTo(map)

		map.setView([lat, lng], 16)
		if (currentMarker) map.removeLayer(currentMarker);
		currentMarker = L.marker([lat, lng])
			.addTo(map)
			.bindPopup('Lokasi Terpilih')
			.openPopup();

		// Lokasi pertama kali
		map.locate({ setView: true, maxZoom: 15 })

		function setCoordinate(lat, lng) {
			$("#input-latitude").val(lat);
			$("#input-longitude").val(lng);
		}

		function onLocationFound(e) {
			var radius = e.accuracy;
			setCoordinate(e.latlng.lat.toFixed(7), e.latlng.lng.toFixed(7));

			// Hapus marker lama jika ada
			if (currentMarker) map.removeLayer(currentMarker);

			// Tambahkan marker baru
			currentMarker = L.marker(e.latlng)
			.addTo(map)
			.bindPopup('Lokasi Terkini')
			.openPopup();
		}

		map.on('locationfound', onLocationFound);

		// Tombol untuk menemukan lokasi
		// L.easyButton('<i class="fadeIn animated bx bx-current-location"></i>', function (btn, map) {
		// L.easyButton(`<i class="fa-solid fa-location-crosshairs"></i>`, function (btn, map) {
		L.easyButton(`<i class="ti ti-current-location"></i>`, function (btn, map) {
			map.locate({ setView: true, maxZoom: 16 });
		}).addTo(map);

		// Event klik untuk memilih lokasi
		map.on('click', function (e) {
			setCoordinate(e.latlng.lat.toFixed(7), e.latlng.lng.toFixed(7));

			// Hapus marker lama jika ada
			if (currentMarker) map.removeLayer(currentMarker);

			// Tambah marker baru
			currentMarker = L.marker(e.latlng)
				.addTo(map)
				.bindPopup('Lokasi Dipilih!')
				.openPopup();
		})
	})
	/** Maps end */

	$(".btn-simpan").click(async function () {
		const $this = $(this).prop('disabled', true).addClass('loading'),
			$form = $("#form-profil-rs"),
			data = new FormData($form[0]);

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
})