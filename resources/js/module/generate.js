const randomId = (n=10) => {
	let text = '',
		possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

	for (let i = 0; i < n; i++) {
		text += possible.charAt(Math.floor(Math.random() * possible.length))
	}

	return text
}

export {randomId}