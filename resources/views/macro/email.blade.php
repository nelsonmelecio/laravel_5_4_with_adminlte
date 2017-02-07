<!-- call include('macro.email', 0_label, 1_field, 2_value, 3_placeholder,  4_errors ) -->

<!-- 4_has_field, 5_has_field_value -->

@php
	$hasError = $data[4]->has( $data[1] );
	$errorValue = $data[4]->first( $data[1] );
@endphp

<div class="form-group {{ $hasError ? 'has-error' : '' }}">
	<label for="{{ $data[1] }}">{{ $data[0] }}</label>
	<input class="form-control"  value="{{ !empty(old($data[1])) ? old( $data[1] ) : $data[2] }}" name="{{ $data[1] }}" placeholder="{{ $data[3] ?? $data[0] }}" type="email" style="color: #000 !important;" >
	@if($hasError)
		<span class="help-block">{{ $errorValue }}</span>
	@endif
</div>
