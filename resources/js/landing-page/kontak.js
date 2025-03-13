var map,
	currentMarker = null, // Pastikan hanya ada satu marker
	tileLayer,
	// lat = "-7.6282424",
	// lng = "111.5332031",
	lat = "-7.5545456",
	lng = "112.623519",
	// -7.554545661454418, 112.6235193503378
	year = new Date().getFullYear();

$(() => {
	/** Maps */
	map = L.map('map', {
		gestureHandling: true,
	}).fitWorld() // Inisialisasi map

	// Tambahkan tile layer
	tileLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
		maxZoom: 20,
		subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
		attribution: `&copy; ${year}`,
	}).addTo(map)

	map.setView([lat, lng], 16)

	if (currentMarker) map.removeLayer(currentMarker);

	currentMarker = L.marker([lat, lng])
		.addTo(map)
		.bindPopup('Nama Lokasi')
		.openPopup();

	currentMarker.on('mouseover',function(ev) {
		currentMarker.openPopup()
	})
	currentMarker.on('mouseout', function() {
		setTimeout(() => {
			currentMarker.closePopup()
		}, 1500)
	})
	/** Maps end */
})
