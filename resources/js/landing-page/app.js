function dateComponentPad(value) {
	var format = String(value)

	return format.length < 2 ? '0' + format : format
}

function nameOfDay(day) {
	return ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'][day]
}
function nameOfMonth(month) {
	return ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'][parseInt(month)]
}

function formatDate(date) {
	var datePart = [ date.getDate(), nameOfMonth(date.getMonth()), date.getFullYear() ].map(dateComponentPad)

	return `${nameOfDay(date.getDay())}, ${datePart.join(' ')}`
}

function formatTime(date) {
	var timePart = [ date.getHours(), date.getMinutes(), date.getSeconds() ].map(dateComponentPad)

	return timePart.join(':')
}

$(() => {
	/**
	 * Footer
	 */
	$("#footer #container-time #data-date").text(formatDate(new Date()))

	setInterval(() => {
		$("#footer #container-time #data-time").text(formatTime(new Date()))
	}, 1000)
})
