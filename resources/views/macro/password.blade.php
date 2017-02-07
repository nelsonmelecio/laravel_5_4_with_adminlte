<!-- call include('macro.password', 0_label, 1_field, 2_value, 3_placeholder,  4_errors ) -->

<!-- 4_has_field, 5_has_field_value -->

@php
	$hasError = $data[4]->has( $data[1] );
	$errorValue = $data[4]->first( $data[1] );
@endphp

<div class="form-group {{ $hasError ? 'has-error' : '' }}">
	<label for="{{ $data[1] }}">{{ $data[0] }}</label>
	<input class="form-control"  name="{{ $data[1] }}" value="" type="password" style="color: #000 !important;" >
	@if($hasError)
		<span class="help-block">{{ $errorValue }}</span>
	@endif
</div>
