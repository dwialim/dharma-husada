import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite'

let host = 'dev.dwialim.web.id'

export default defineConfig({
	plugins: [
		// tailwindcss(),
		laravel({
			input: [
				'resources/css/landing-page/app.css',
				'resources/css/beranda.css',
				'resources/js/landing-page/app.js',
				// 'resources/js/app.js',
			],
			refresh: [
				'app/Http/Controllers/**',
				'resources/routes/**',
				'routes/**',
				'resources/views/**',
			],
			// refresh: true,
		}),
	],
	resolve: {
		alias: {
			'@css': '/resources/css',
			'@landing-css': '/resources/css/landing-page',
			'@landing-js': '/resources/js/landing-page',
			'@js': '/resources/js',
		},
	},
	server: {
		host: host,
		port: 5173,
		// cors: true,
		// strictPort: true,
		// https: false,
		hmr: {
			host: host,
			protocol: 'ws',
		},
	},
});
