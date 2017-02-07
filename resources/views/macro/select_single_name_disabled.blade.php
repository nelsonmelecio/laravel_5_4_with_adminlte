<!-- call include('macro.select_single_name_disabled', 0_label, 1_field, 2_value, 3_placeholder, 4_has_field, 5_has_field_value ) -->
@php
	$item = $data[2];
@endphp
<div class="form-group">
	<label>{{ $data[0] }}</label>
	<select class="form-control" style="color: #000 !important;" disabled>
	@if( !is_null($data[2]) )
		<option value="{{ $item->id }}">
			{{ $item->name }}
		</option>
	@endif
	</select>
</div>