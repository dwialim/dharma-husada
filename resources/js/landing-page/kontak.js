var $map = $('#map'),
	map,
	currentMarker = null, // Pastikan hanya ada satu marker
	tileLayer,
	// lat = "-7.5545456",
	// lng = "112.623519",
	lat = $map.data('lat'),
	lng = $map.data('lng'),
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

	map.setView([lat, lng], 15)

	if (currentMarker) map.removeLayer(currentMarker);

	currentMarker = L.marker([lat, lng])
		.addTo(map)
		.bindPopup($map.data('nama') != '' ? $map.data('nama') : 'Lokasi Terpilih')
		// .openPopup()

	currentMarker.on('mouseover',function(ev) {
		currentMarker.openPopup()
	})
	currentMarker.on('mouseout', function() {
		setTimeout(() => {
			currentMarker.closePopup()
		}, 500)
	})
	/** Maps end */
})
