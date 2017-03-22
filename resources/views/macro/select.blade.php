<!-- call include('macro.select', 0_label, 1_field, 2_value, 3_selectedID,  4_errors, 5_field_string_for_values, 6_field_string_for_keys, 7_select_is_disabled ) -->
@php
	$hasError = $data[4]->has( $data[1] );
	$errorValue = $data[4]->first( $data[1] );
	$val_string = isset($data[6]) ? $data[6] : 'id';
	$is_disabled = isset($data[7]) ? ( $data[7] ? 'disabled' : '' ) : '';
@endphp

<div class="form-group {{ $hasError ? 'has-error' : '' }}">
	<label for="{{ $data[1] }}">{{ $data[0] }}</label>
	<select class="form-control input-sm select2" name="{{ $data[1] }}" id="{{ $data[1] }}" style="color: #000 !important; width: 100%;" {{ $is_disabled }} >
	@foreach($data[2] as $item)
		<option value="{{ $item[ $val_string ] }}" {{ $data[3] == $item[ $val_string ] ? 'selected' : '' }}>
			{{ $item[ $data[5] ] }}
		</option>
	@endforeach
	</select>
	@if($hasError)
		<span class="help-block">{{ $errorValue }}</span>
	@endif
</div>