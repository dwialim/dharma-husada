const closeTooltip = ($this) => {
	let tooltipInstance = bootstrap.Tooltip.getInstance($this)
	if (tooltipInstance) tooltipInstance.hide()
	// let tooltipInstance = bootstrap.Tooltip.getInstance($this);
	// if (tooltipInstance) tooltipInstance.dispose()
}

const initTooltip = () => {
	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
	tooltipTriggerList.forEach(el => {
		if (!bootstrap.Tooltip.getInstance(el)) {
			new bootstrap.Tooltip(el);
		}
	})
}

export {closeTooltip, initTooltip}