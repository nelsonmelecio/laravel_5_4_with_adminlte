@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Edit Location Records',
				'indexes' => 'Locations, Edit'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('locations') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Modify a category name.</h3>
						</div>
						<form role="form" action="{{ url('location/update') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Code', 'code', $location->code, null, $errors )])
								@include('macro.textv3', ['data' => array('Name', 'name', $location->name, null, $errors )])
								@include('macro.textv3', ['data' => array('Building Name', 'building_name', $location->building_name, null, $errors )])
								@include('macro.textv3', ['data' => array('Block Number', 'block_number', $location->block_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Building Number', 'building_number', $location->building_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Floor Number', 'floor_number', $location->floor_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Room Number', 'room_number', $location->room_number, null, $errors )])
								@include('macro.select_tenant', ['data' => array('Location Name', 'location_id', $tenants, $location->tenant['id'], null, $errors )])
								<input type="hidden" name="id" value="{{ $location->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Update</button>
								<a href=" {{ url('locations') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
