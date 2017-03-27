<!-- call include('macro.select_name', 0_label, 1_field, 2_value, 3_selectedID, 4_has_field, 5_has_field_value ) -->

<div class="form-group"  id="outsourced_div">
	<label>{{ $data[0] }}</label>
	<select class="form-control input-sm select2" name="{{ $data[1] }}" id="{{ $data[1] }}" style="color: #000 !important; width: 100%;" disabled="">
	@foreach($data[2] as $item)
		<option value="{{ $item->id }}" {{ $data[3] == $item->id ? 'selected' : '' }}>
			{{ $item->name }}
		</option>
	@endforeach
	</select>
</div>