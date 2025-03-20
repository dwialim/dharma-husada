@foreach (['c' => 'plus text-info', 'r' => 'eye text-secondary', 'u' => 'edit-circle text-warning', 'd' => 'trash text-danger'] as $key => $icon)
	@if (in_array('all', $prefix) || in_array($key, $prefix))
		<button type="button" class="btn btn-sm btn-custom btn-{{ $key == 'c' ? 'create' : ($key == 'r' ? 'view' : ($key == 'u' ? 'edit' : 'destroy')) }} {{$class ?? ''}}"
			data-id="{{ $id ?? '' }}"
			data-bs-toggle="tooltip"
			data-bs-html="true"
			title="<b>{{ ucfirst($key == 'c' ? 'Tambah baru' : ($key == 'r' ? 'Detail' : ($key == 'u' ? 'Edit' : 'Hapus'))) }}</b>"
		>
			{{-- <i class="ti ti-{{ $icon }} pointer fs-22 hover-{{ explode('-', explode(' ', $icon)[1])[1] }}" --}}
			<i class="ti ti-{{ $icon }} pointer fs-{{$fs ?? 17}} {{$classI ?? ''}}"></i>
		</button>
	@endif
@endforeach
