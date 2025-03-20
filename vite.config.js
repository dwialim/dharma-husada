import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite'

let host = 'dev.dwialim.web.id'

export default defineConfig({
	build: {
	  target: 'esnext' // atau 'es2022'
	},
	plugins: [
		// tailwindcss(),
		laravel({
			input: [
				/** Root */
				'resources/css/app.css',
				'resources/js/app.js',
				/** Root end */

				/** Admin page */
				'resources/css/admin-page/app.css',
				'resources/css/admin-page/master-data/dokter.css',
				'resources/css/admin-page/profil/visi-misi.css',

				'resources/js/admin-page/master-data/dokter.js',
				'resources/js/admin-page/master-data/poli-klinik.js',
				'resources/js/admin-page/master-data/profil-rs.js',
				'resources/js/admin-page/profil/struktur-organisasi.js',
				'resources/js/admin-page/profil/tugas-fungsi.js',
				'resources/js/admin-page/profil/visi-misi.js',
				'resources/js/admin-page/app.js',
				'resources/js/admin-page/jadwal-dokter-klinik.js',
				/** Admin page end */

				/** Auth */
				'resources/css/auth/app.css',
				'resources/js/auth/app.js',
				/** Auth end */

				/** Landing page */
				'resources/css/landing-page/informasi/app.css',
				'resources/css/landing-page/informasi/berita.css',
				'resources/css/landing-page/informasi/pengumuman.css',
				'resources/css/landing-page/app.css',
				'resources/css/landing-page/beranda.css',
				'resources/css/landing-page/kontak.css',
				'resources/css/landing-page/pelayanan.css',
				'resources/css/landing-page/profil.css',

				'resources/js/landing-page/app.js',
				'resources/js/landing-page/kontak.js',
				'resources/js/landing-page/pelayanan.js',
				/** Landing page end */
			],
			refresh: [
				// 'app/Http/Controllers/**',
				'resources/routes/**',
				'routes/**',
				'resources/views/**',
			],
			// refresh: true,
		}),
	],
	resolve: {
		alias: {
			'@public': '/public',

			/** Components */
			'@c-animation': '/resources/css/components/animation',
			'@c-fonts': '/resources/css/components/fonts',
			'@c-hover': '/resources/css/components/hover',
			'@j-loader': '/resources/js/components/loader',
			/** Components end */

			// '@css': '/resources/css',
			'@js': '/resources/js',
			'@module': '/resources/js/module',
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
