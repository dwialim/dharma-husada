$(() => {
	$('.select2-single').select2({
		width: '100%'
	})

	const ignoreSearchKey = new Set([
		9, 16, 17, 18, 20, 33, 34, 35, 36, 37, 38, 39, 40, 44, 45, 91,
		112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 255
	])
	$("#cari-jadwal").setRules("a-zA-Z0-9,. ").on('keyup', function(e) {
		let string = $(this).val().toLowerCase()
		// .replace(/[\"\/\`\:\~\!\@\#\$\%\^\&\*\=\;\|\{\}\[\]\<\>\?]/g,'')

		if (ignoreSearchKey.has(e.which)) return;

		$(".v-find").each(function() {
			$(this).filter(`[data-filter*="${string}"]`).length || string.length < 1 ? $(this).show(300) : $(this).hide(300)
		})
	})
})
