const renderSelect2 = ($this, options = {}) => {
	options = {
		// dropdownParent: $('#'),
		// theme: 'bootstrap-5',
		// width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
		placeholder: $(this).data('placeholder'),
		allowClear: Boolean($(this).data('allow-clear')),
		...options, // Spread operator, menimpa nilai default jika ada opsi dari parameter
	}

	$this.select2(options)
}

export {renderSelect2}