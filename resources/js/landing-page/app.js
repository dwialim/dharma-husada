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

$.fn.setRules = function(rules = "a-zA-Z0-9'#.,_\\- ") {
	this.on("keypress", (e) => {
		let regex = new RegExp(`^[${rules}\b]+$`) // Rules default + tambahan simbol
		let key = String.fromCharCode(!e.charCode ? e.which : e.charCode) // Ambil karakter dari keypress
		if (!regex.test(key)) { // Cek apakah karakter memenuhi aturan regex
			e.preventDefault()
			return false
		}
	});

	this.on("paste", function () {
		let el = this;
		setTimeout(function () {
			const re = new RegExp(`[^${rules}]`, "g") // Regex untuk menghapus karakter yang tidak sesuai
			let convert = $(el).val().replace(re, "") // Ganti karakter yang tidak diperbolehkan
			$(el).val(convert)
		}, 20)
	})

	return this
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
