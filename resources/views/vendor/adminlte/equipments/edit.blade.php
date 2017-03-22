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

		<div class="col-md-12">
		
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs pull-right">
				<!-- <li tabindex="-1">
					<a data-toggle="tab" href="#tab3" tabindex="-1">Specification</a>
				</li> -->
				<li tabindex="-1">
					<a data-toggle="tab" href="#tab2" tabindex="-1">Purchase Details</a>
				</li>
				<li class="active" tabindex="-1">
					<a data-toggle="tab" href="#tab1" tabindex="-1">Equipment Details</a>
				</li>
				<li class="pull-left header"><i class="fa fa-th"></i>Equipment Information</li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					<form role="form" action="{{ url('equipment/update') }}" method="POST">
                		{{ csrf_field() }}

						<div class="box-body">

                    		<div class="col-sm-6">
								@include('macro.select', ['data' => array('Category', 'category_id', $categories, $equipment->category_id, $errors, 'description' )])
								@include('macro.textv3', ['data' => array('Asset Number', 'asset_number', $equipment->asset_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Equipment Name', 'equipment_name', $equipment->equipment_name, null, $errors )])
								@include('macro.textv3', ['data' => array('Equipment Description', 'equipment_description', $equipment->equipment_description, null, $errors )])
								@include('macro.textv3', ['data' => array('Model', 'model', $equipment->model, null, $errors )])
								@include('macro.textv3', ['data' => array('Barcode', 'barcode', $equipment->barcode, null, $errors )])
								@include('macro.textv3', ['data' => array('Serial Number', 'serial_number', $equipment->serial_number, null, $errors )])
								@include('macro.select', ['data' => array('Department', 'department_id', $departments, $equipment->department_id, $errors, 'name' )])
								@include('macro.select', ['data' => array('Manufacturer', 'manufacturer_id', $manufacturers, $equipment->manufacturer_id, $errors, 'company_name' )])
							</div>
							<div class="col-sm-6">
								@include('macro.select', ['data' => array('Status', 'status_id', $statuses, $equipment->status_id, $errors, 'name' )])
								@include('macro.select_availability', ['data' => array($equipment->availability) ])
								@include('macro.select_required_pm', ['data' => array($equipment->required_pm) ])
								@include('macro.select', ['data' => array('Frequency (as stated in the contract)', 'frequency_id', $frequency, $equipment->frequency_id, $errors, 'name' )])
								@include('macro.select', ['data' => array('Supplier', 'supplier_id', $suppliers, $equipment->supplier_id, $errors, 'name' )])
								@include('macro.select', ['data' => array('Service Status', 'condition_status_id', $conditions, $equipment->condition_status_id, $errors, 'name' )])
								@include('macro.select_service_group', ['data' => array($equipment->service_group) ])
								@include('macro.select_service_provider', ['data' => array($equipment->service_provider) ])
								@include('macro.select', ['data' => array('Supplier - Service Povider (Outsourced)', 'outsourced_supplier_id', $suppliers, $equipment->outsourced_supplier_id, $errors, 'name', null, true )])
							</div>

							<input type="hidden" name="id" value="{{ $equipment->id }}">
							<input type="hidden" name="tenant_id" value="1">
						</div>
						<div class="box-footer">
							<div class="pull-right">
								<button class="btn btn-success" type="submit">Update Equipment Record</button>
								<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane" id="tab2">
					<form role="form" action="{{ url('purchase/update') }}" method="POST">
                		{{ csrf_field() }}
                		<input type="hidden" name="id" value="{{ $equipment->id }}">

						<div class="box-body">
							
							<div class="col-sm-6">
								@include('macro.textv3', ['data' => array('Purchase No.', 'purchase_no',  $purchase->purchase_no, null, $errors )])
								@include('macro.textv3', ['data' => array('Purchase Cost', 'purchase_cost', $purchase->purchase_cost, null, $errors )])
								@include('macro.date', ['data' => array('Purchase Date', 'purchase_date', $purchase->purchase_date, $errors )])
							</div>
							<div class="col-sm-6">
								@include('macro.date', ['data' => array('Warranty Starting Date', 'warranty_start', $purchase->warranty_start, $errors )])
								@include('macro.date', ['data' => array('Warranty Expiration Date', 'warranty_expire', $purchase->warranty_expire, $errors )])
								@include('macro.date', ['data' => array('Date Commissioned', 'date_commissioned', $purchase->date_commissioned, $errors )])
							</div>
						</div>
						<div class="box-footer">
							<div class="pull-right">
								<button class="btn btn-success" type="submit">Update Purchase Record</button>
								<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane" id="tab3">

				</div>
			</div>
		</div>
	</div>
	</div>


@endsection
