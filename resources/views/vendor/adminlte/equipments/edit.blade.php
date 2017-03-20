@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Edit Equipment Records',
				'indexes' => 'Equipments, Edit'
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
							<h3 class="box-title">Modify a category name.</h3>
						</div>
						<form role="form" action="{{ url('equipment/update') }}" method="POST">
                    		{{ csrf_field() }}

							<div class="box-body">

	                    		<div class="col-sm-6">
									@include('macro.textv3', ['data' => array('Equipment Name', 'equipment_name', $equipment->equipment_name, null, $errors )])
									@include('macro.textv3', ['data' => array('Equipment Description', 'equipment_description', $equipment->equipment_description, null, $errors )])
									@include('macro.textv3', ['data' => array('Model', 'model', $equipment->model, null, $errors )])
									@include('macro.textv3', ['data' => array('Barcode', 'barcode', $equipment->barcode, null, $errors )])
									@include('macro.textv3', ['data' => array('Serial Number', 'serial_number', $equipment->serial_number, null, $errors )])
									@include('macro.textv3', ['data' => array('Asset Number', 'asset_number', $equipment->asset_number, null, $errors )])
									@include('macro.select_required_pm', ['data' => array($equipment->required_pm) ])
									@include('macro.select_service_group', ['data' => array($equipment->service_group) ])
									@include('macro.select_service_provider', ['data' => array($equipment->service_provider) ])
									@include('macro.select_availability', ['data' => array($equipment->availability) ])
								</div>
								<div class="col-sm-6">
									@include('macro.select_tenant', ['data' => array('Tenant Name', 'tenant_id', $tenants, $equipment->tenant_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Department', 'department_id', $departments, $equipment->department_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Frequency (as stated in the contract)', 'frequency_id', $frequency, $equipment->frequency_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Location', 'location_id', $locations, $equipment->location_id, null, $errors )])
									@include('macro.select_manufacturer', ['data' => array('Manufacturer', 'manufacturer_id', $manufacturers, $equipment->manufacturer_id, null, $errors )])
									@include('macro.select_category', ['data' => array('Category', 'category_id', $categories, $equipment->category_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Supplier', 'supplier_id', $suppliers, $equipment->supplier_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Condition', 'condition_status_id', $conditions, $equipment->condition_status_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Utilization', 'utilization_id', $utilizations, $equipment->utilization_id, null, $errors )])
									@include('macro.select_name', ['data' => array('Status', 'status_id', $statuses, $equipment->status_id, null, $errors )])
								</div>

								<input type="hidden" name="id" value="{{ $equipment->id }}">
								<input type="hidden" name="tenant_id" value="1">
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Update Equipment Record</button>
								<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
