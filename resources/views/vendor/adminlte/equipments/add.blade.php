@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Equipment Record',
				'indexes' => 'Equipments, Add'
			])

@endsection

@section('main-content')


<div class="row">

	<div class="col-md-12">
		
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs pull-right">
				<li class="pull-left header"><i class="fa fa-th"></i>New Equipment Registration</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active">
					<form role="form" action="{{ url('equipment/add') }}" method="POST">
                		

						<div class="box-body">
							
							<div class="row">
								<div class="box ">
									<div class="box-header with-border">
										<h3 class="box-title">A. Equipment Details</h3>
									</div>
									<div class="box-body">
										{{ csrf_field() }}
										<input type="hidden" name="tenant_id" value="1">
										<div class="col-sm-4">
											@include('macro.select', ['data' => array('Category', 'category_id', $categories, null, $errors, 'description' )])
											@include('macro.textv3', ['data' => array('Asset Number', 'asset_number', null, null, $errors )])											
											@include('macro.textv3', ['data' => array('Equipment Name', 'equipment_name', null, null, $errors )])
											@include('macro.textv3', ['data' => array('Equipment Description', 'equipment_description', null, null, $errors )])
											@include('macro.textv3', ['data' => array('Model', 'model', null, null, $errors )])
											@include('macro.textv3', ['data' => array('Barcode', 'barcode', null, null, $errors )])
											
										</div>
										<div class="col-sm-4">
											@include('macro.select', ['data' => array('Status', 'status_id', $statuses, null, $errors, 'name' )])
											@include('macro.textv3', ['data' => array('Serial Number', 'serial_number', null, null, $errors )])
											@include('macro.select', ['data' => array('Department', 'department_id', $departments, null, $errors, 'name' )])		
											@include('macro.select', ['data' => array('Manufacturer', 'manufacturer_id', $manufacturers, null, $errors, 'company_name' )])
											@include('macro.select_availability', ['data' => array( null )] )
											@include('macro.select_required_pm', ['data' => array( null )] )
										</div>
										<div class="col-sm-4">
											@include('macro.select', ['data' => array('Frequency (as stated in the contract)', 'frequency_id', $frequency, null, $errors, 'name' )])
											@include('macro.select', ['data' => array('Supplier', 'supplier_id', $suppliers, null, $errors, 'name' )])
											@include('macro.select', ['data' => array('Service Status', 'condition_status_id', $conditions, null, $errors, 'name' )])
											@include('macro.select_service_group', ['data' => array( null )] )
											@include('macro.select_service_provider', ['data' => array( null )] )
											@include('macro.select', ['data' => array('Supplier - Service Povider (Outsourced)', 'outsourced_supplier_id', $suppliers, null, $errors, 'name', null, true )])
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="box ">
									<div class="box-header with-border">
										<h3 class="box-title">B. Purchase Details</h3>
									</div>
									<div class="box-body">
									<div class="col-sm-4">
										@include('macro.textv3', ['data' => array('Purchase No.', 'purchase_no', null, null, $errors )])
										@include('macro.textv3', ['data' => array('Purchase Cost', 'purchase_cost', null, null, $errors )])
									</div>
									<div class="col-sm-4">
										@include('macro.date', ['data' => array('Purchase Date', 'purchase_date', null, $errors )])
										@include('macro.date', ['data' => array('Date Commissioned', 'date_commissioned', null, $errors )])
									</div>
									<div class="col-sm-4">
										@include('macro.date', ['data' => array('Warranty Starting Date', 'warranty_start', null, $errors )])
										@include('macro.date', ['data' => array('Warranty Expiration Date', 'warranty_expire', null, $errors )])
									</div>
									</div>
								</div>
							</div>	                    		

							
						</div>
						<div class="box-footer">
							<div class="pull-right">
								<button class="btn btn-success pull" type="submit">Submit New Equipment</button>
								<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"> Cancel </a>
								<!-- <button type="button" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Launch modal</button> -->
							 </div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>

</div>







@endsection
