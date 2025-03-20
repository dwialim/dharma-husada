import '@js/bootstrap'

$("img").on("dragstart", function(e) { e.preventDefault() })

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