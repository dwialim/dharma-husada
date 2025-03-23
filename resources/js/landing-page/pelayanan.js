"use strict";

import {initModule} from '@module/app'
import {getRequest} from '@module/axios'

let module = await initModule(),
	swal = module.swal,
	animasi = module.var_animasi;

(() => {
	$('.select2-single').select2({
		width: '100%'
	})

	const ignoreSearchKey = new Set([
		9, 16, 17, 18, 20, 33, 34, 35, 36, 37, 38, 39, 40, 44, 45, 91,
		112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 255
	])

	$(document).on('keyup', "#cari-jadwal", function(e) {
		console.log("test")
		let string = $(this).val().toLowerCase()
		// .replace(/[\"\/\`\:\~\!\@\#\$\%\^\&\*\=\;\|\{\}\[\]\<\>\?]/g,'')

		if (ignoreSearchKey.has(e.which)) return;

		$(".v-find").each(function() {
			$(this).filter(`[data-filter*="${string}"]`).length || string.length < 1 ? $(this).show(300) : $(this).hide(300)
		})
	})

	$("#btn-cari").on('click', async function () {
		const $this = $(this).prop('disabled', true).addClass('loading'),
			response = await getRequest($this.data('route-jadwal'), {hari: $("#input-hari").val(), poli: $("#input-poli").val()});

		if (response.status != 200) {
			$("#data-jadwal").hide().html(`
				<div class="row">
					<div class="col-md-12 container-input-search" id="container-input-search">
						<center><span class="text-danger fs-15"><i>Jadwal belum tersedia, silahkan pilih hari atau klinik lain</i></span></center>
					</div>
				</div>
			`).fadeIn(300)

			return $this.prop('disabled', false).removeClass("loading")
		}

		$this.prop('disabled', false).removeClass("loading")

		// var searchTemplate = `
		// 	<div class="row">
		// 		<div class="col-md-12 container-input-search" id="container-input-search">
		// 			<center>Berikut adalah Jadwal Rutin, <span class="text-danger">Jadwal bisa berubah sewaktu-waktu</span></center>
		// 			<div class="px-4 py-3 text-center">
		// 				<div><h3><i>Cari Dokter / Klinik disini :</i></h3></div>
		// 				<input type="text" class="form-control" id="cari-jadwal" placeholder="Cari disini..." autocomplete="off">
		// 			</div>
		// 		</div>
		// 	</div>
		// `,
		// dataTempalate = '';

		// $.each(response.data.data, (idx1, val1) => {
		// 	dataTempalate += `
		// 		<div class="row">
		// 			<div class="col-md-12">
		// 				<div class="title v-find courier-prime-bold rounded"><span class="text-center fs-20">${val1.nama}</span></div>
		// 	`

		// 	$.each(val1.jadwal, (idx2, val2) => {
		// 		let $waktu = val2.detail.reduce((carry, item) => {
		// 			(carry[item.hari_num] = carry[item.hari_num] || []).push(item);
		// 			return carry;
		// 		}, {});

		// 		var td = ''

		// 		for (let $i = 1; $i <= 7; $i++){
		// 			td += `<td>${typeof($waktu[$i]) != "undefined" && $waktu[$i] !== null ? $waktu[$i][0]['waktu_awal'] + ' - ' + $waktu[$i][0]['waktu_akhir'] : '-'}</td>`
		// 		}

		// 		dataTempalate += `
		// 				<div class="row v-find container-data-dokter" data-filter="${val1.nama.toLowerCase()} | ${val2.dokter.nama.toLowerCase()}">
		// 					<div class="col-md-3">
		// 						<div class="pic mx-auto"><img src="storage/${val2.dokter.gambar}" class="img-fluid" alt=""></div>
		// 					</div>
		// 					<div class="col-md-9 p-5">
		// 						<h4 class="courier-prime-bold">${val2.dokter.nama}</h4>
		// 						<h5 class="poli-klinik-name mb-4">${val1.nama.toLowerCase()}</h5>
		// 						<div class="table-responsive">
		// 							<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
		// 								<thead>
		// 									<tr>
		// 										<th>Senin</th>
		// 										<th>Selasa</th>
		// 										<th>Rabu</th>
		// 										<th>Kamis</th>
		// 										<th>Jumat</th>
		// 										<th>Sabtu</th>
		// 										<th>Minggu</th>
		// 									</tr>
		// 								</thead>
		// 								<tbody>
		// 									<tr>${td}</tr>
		// 								</tbody>
		// 							</table>
		// 						</div>
		// 					</div>
		// 				</div>
		// 		`
		// 	})

		// 	dataTempalate += `
		// 			</div>
		// 		</div>
		// 	`
		// })

		let searchTemplate = `
			<div class="row">
				<div class="col-md-12 container-input-search" id="container-input-search">
					<center>Berikut adalah Jadwal Rutin, <span class="text-danger">Jadwal bisa berubah sewaktu-waktu</span></center>
					<div class="px-4 py-3 text-center">
						<div><h3><i>Cari Dokter / Klinik disini :</i></h3></div>
						<input type="text" class="form-control" id="cari-jadwal" placeholder="Cari disini..." autocomplete="off">
					</div>
				</div>
			</div>
		`;

		let dataTempalate = [];

		response.data.data.forEach((val1) => {
			let dokterSection = `
				<div class="row">
					<div class="col-md-12">
						<div class="title v-find courier-prime-bold rounded">
							<span class="text-center fs-20">${val1.nama}</span>
						</div>
			`;

			val1.jadwal.forEach((val2) => {
				let waktuGrouped = val2.detail.reduce((carry, item) => {
					(carry[item.hari_num] = carry[item.hari_num] || []).push(item);
					return carry;
				}, {});

				let td = Array.from({ length: 7 }, (_, i) => {
					let hariIndex = i + 1;
					return waktuGrouped[hariIndex]
						? `${waktuGrouped[hariIndex][0].waktu_awal} - ${waktuGrouped[hariIndex][0].waktu_akhir}`
						: "-";
				}).map((time) => `<td>${time}</td>`).join("");

				dokterSection += `
					<div class="row v-find container-data-dokter" data-filter="${val1.nama.toLowerCase()} | ${val2.dokter.nama.toLowerCase()}">
						<div class="col-md-3">
							<div class="pic mx-auto">
								<img src="/storage/${val2.dokter.gambar}" class="img-fluid" alt="${val2.dokter.nama}">
							</div>
						</div>
						<div class="col-md-9 p-5">
							<h4 class="courier-prime-bold">${val2.dokter.nama}</h4>
							<h5 class="poli-klinik-name mb-4">${val1.nama}</h5>
							<div class="table-responsive">
								<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
									<thead>
										<tr>
											<th>Senin</th>
											<th>Selasa</th>
											<th>Rabu</th>
											<th>Kamis</th>
											<th>Jumat</th>
											<th>Sabtu</th>
											<th>Minggu</th>
										</tr>
									</thead>
									<tbody>
										<tr>${td}</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				`;
			});

			dokterSection += `</div></div>`;
			dataTempalate.push(dokterSection);
		});

		var html = searchTemplate + dataTempalate.join("")
		$("#data-jadwal").hide().html(html).fadeIn(300)

		$("#cari-jadwal").setRules("a-zA-Z0-9,. ")
	})
})()
