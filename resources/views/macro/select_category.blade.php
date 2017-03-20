<!-- call include('macro.select_category', 0_label, 1_field, 2_value, 3_selectedID, 4_has_field, 5_has_field_value ) -->

<div class="form-group">
	<label>{{ $data[0] }}</label>
	<select class="form-control input-sm select2" name="{{ $data[1] }}" style="color: #000 !important; width: 100%;" >
	@foreach($data[2] as $item)
		<option value="{{ $item->id }}" {{ $data[3] == $item->id ? 'selected' : '' }}>
			{{ $item->description }}
		</option>
	@endforeach
	</select>
</div>