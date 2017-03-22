<!-- call include('macro.select_category', 0_label, 1_field, 2_value, 3_selectedID,  4_errors ) -->
@php
	$hasError = $data[4]->has( $data[1] );
	$errorValue = $data[4]->first( $data[1] );
@endphp

<div class="form-group {{ $hasError ? 'has-error' : '' }}">
	<label for="{{ $data[1] }}">{{ $data[0] }}</label>
	<select class="form-control input-sm select2" name="{{ $data[1] }}" style="color: #000 !important; width: 100%;" >
	@foreach($data[2] as $item)
		<option value="{{ $item->id }}" {{ $data[3] == $item->id ? 'selected' : '' }}>
			{{ $item->description }}
		</option>
	@endforeach
	</select>
	@if($hasError)
		<span class="help-block">{{ $errorValue }}</span>
	@endif
</div>