{{-- <div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h5>Floating labels</h5>
		</div>
		<div class="card-body">
			<h5>Form controls</h5>
			<hr>
			<form>
				<div class="row g-4">
					<div class="col-md-6">
						<div class="form-floating mb-0"><input type="email" class="form-control" id="floatingInput" placeholder="Email address"> <label for="floatingInput">Email address</label></div>
					</div>
					<div class="col-md-6">
						<div class="form-floating mb-0"><input type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label></div>
					</div>
				</div>
			</form>
			<h5 class="mt-3">Default Value</h5>
			<hr>
			<div class="row g-4">
				<div class="col-md-6">
					<form class="form-floating mb-0"><input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com"> <label for="floatingInputValue">Input with value</label></form>
				</div>
				<div class="col-md-6">
					<div class="form-floating mb-0"><input type="password" class="form-control" id="floatingpassword1" placeholder="password" value="Password"> <label for="floatingpassword1">Password</label></div>
				</div>
			</div>
			<h5 class="mt-3">Validation styles</h5>
			<hr>
			<div class="row g-4">
				<div class="col-md-6">
					<form class="form-floating mb-0"><input type="email" class="form-control is-valid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com"> <label for="floatingInputInvalid">Valid input</label></form>
				</div>
				<div class="col-md-6">
					<form class="form-floating mb-0"><input type="email" class="form-control is-invalid" id="floatingInputInvalid1" placeholder="name@example.com" value="test@example.com"> <label for="floatingInputInvalid1">Invalid input</label></form>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h5>Textareas</h5>
		</div>
		<div class="card-body">
			<div class="row g-4">
				<div class="col-md-6">
					<h5>Default style</h5>
					<hr>
					<div class="form-floating"><textarea class="form-control" id="floatingTextarea"></textarea> <label for="floatingTextarea">Comments</label></div>
				</div>
				<div class="col-md-6">
					<h5>Custom height</h5>
					<hr>
					<div class="form-floating"><textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea> <label for="floatingTextarea2">Comments</label></div>
				</div>
			</div>
			<h5 class="mt-3">Validation styles</h5>
			<hr>
			<div class="row g-4">
				<div class="col-md-6">
					<div class="form-floating mb-0"><textarea class="form-control is-valid" rows="3" placeholder="Leave a comment here" id="floatingTextarea1">
						Valid textarea</textarea> <label for="floatingTextarea1">Comments</label>
					</div>
				</div>
				<div class="col-md-6">
					<form class="form-floating mb-0"><textarea class="form-control is-invalid" rows="3" placeholder="Leave a comment here" id="floatingTextarea21">
						Invalid textarea</textarea> <label for="floatingTextarea21">Comments</label>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h5>Select</h5>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="form-floating">
						<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
							<option selected="selected">Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<label for="floatingSelect">Works with selects</label>
					</div>
				</div>
			</div>
			<h5 class="mt-3">Validation styles</h5>
			<hr>
			<div class="row g-4">
				<div class="col-md-6">
					<div class="form-floating mb-0">
						<select class="form-select is-valid" id="floatingselect1" aria-label="Floating label select example">
							<option selected="selected">Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<label for="floatingselect1">Comments</label>
					</div>
				</div>
				<div class="col-md-6">
					<form class="form-floating mb-0">
						<select class="form-select is-invalid" id="floatingselect2" aria-label="Floating label select example">
							<option selected="selected">Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<label for="floatingselect2">Comments</label>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> --}}

<div class="row g-4 mb-4">
	<div class="col-lg-6">
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="form-floating mb-0">
					<input type="text" class="form-control" id="floatingNama" name="nama" autocomplete="off" placeholder="Nama">
					<label for="floatingNama">Nama Dokter</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="input-group">
					<input type="file" class="form-control custom-input-file" id="input-gambar" onchange="loadFile(event)">
					<label class="input-group-text" for="input-gambar">Gambar</label>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="mx-5" id="container-pan">
			{{-- <img class="pan" data-big="img/big3.jpg" src="{{asset('src/img/small3.jpg')}}"/> --}}
			<a class="pan" data-big="{{asset('src/img/big4.jpg')}}" href="javascript:void(0)" title="Los mejores cursos online para programadores">
				<img src="{{asset('src/img/small4.jpg')}}" title="Click to zoom" />
			</a>
			{{-- <a class="pan" id="btnOutPut" data-big="{{asset('transform.png')}}" href="#"><img id="outPut" src="{{asset('transform.png')}}" class="rounded mx-auto d-block responsive img-thumbnail"></a> --}}
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
	$(window).on('load', function () {
		var options = {
			showRotationControls : true,
			minLoadingTime: 200,
			wheelZoomSpeed: 100,
		}

		$(".pan").pan(options).each(function() {
			$(this).attr('title', 'CLICK TO ZOOM')
		})
	})
	function loadFile(event) {
		console.log("tes")
	}
</script>