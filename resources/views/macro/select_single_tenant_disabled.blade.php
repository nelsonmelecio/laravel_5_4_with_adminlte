<!-- call include('macro.select_single_tenant_disabled', 0_label, 1_field, 2_value, 3_placeholder, 4_has_field, 5_has_field_value ) -->
@php
	$item = $data[2];
@endphp
<div class="form-group">
	<label>{{ $data[0] }}</label>
	<select class="form-control input-sm select2" style="color: #000 !important; width: 100%;" disabled>
	@if( !is_null($data[2]) )
		<option value="{{ $item->code }}">
			{{ $item->company_name }}
		</option>
	@endif
	</select>
</div>