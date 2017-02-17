@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Delete Equipment Record',
				'indexes' => 'Equipments, Delete'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Are you sure you want to delete this equipment record?</h3>
						</div>
						<form role="form" action="{{ url('equipment/delete') }}" method="POST">
                    		
							<div class="box-body">
								{{ csrf_field() }}

								@include('macro.text_disabled', ['data' => array('Equipment Name', 'equipment_name', $equipment->equipment_name, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Equipment Description', 'equipment_description', $equipment->equipment_description, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Model', 'model', $equipment->model, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Barcode', 'barcode', $equipment->barcode, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Serial Number', 'serial_number', $equipment->serial_number, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Asset Number', 'asset_number', $equipment->asset_number, null, $errors )])

								<input type="hidden" name="id" value="{{ $equipment->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-danger" type="submit">Delete</button>
								<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
