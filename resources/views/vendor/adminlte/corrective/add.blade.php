@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Corrective Maintenance',
				'indexes' => 'Correctives, Add'
			])

@endsection

@section('main-content')


<div class="row">
	<div class="col-sm-12">
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs pull-right">
				<li class="pull-left header"><i class="fa fa-th"></i>Corrective Scheduling</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active">
					<form role="form" action="{{ url('equipment/add') }}" method="POST">
						<div class="box-body">
							
							<div class="row">
								<div class="box ">
									<div class="box-header with-border">
										<div class="pull-left">
											<h3 class="box-title">A. Equipment Details</h3>
										</div>
										<div class="pull-right">
											<button class="btn btn-success pull" type="button">Select Equipment For Corrective</button>
										</div>
									</div>
									<div class="box-body">
										{{ csrf_field() }}
										<input type="hidden" name="tenant_id" value="1">
										<div class="col-sm-6">
											@include('macro.textv3', ['data' => array('Asset Number', 'asset_number', null, null, $errors )])
											@include('macro.textv3', ['data' => array('Equipment Description', 'equipment_description', null, null, $errors )])
											@include('macro.textv3', ['data' => array('Model', 'model', null, null, $errors )])
											@include('macro.textv3', ['data' => array('Serial Number', 'serial_number', null, null, $errors )])
										</div>
										<div class="col-sm-6">
											@include('macro.textv3', ['data' => array('Department', 'department_id', null, null, $errors )])		
											@include('macro.textv3', ['data' => array('Risk Classification', 'risk_id', null, null, $errors )])		
											@include('macro.textv3', ['data' => array('Date of Purchased', 'date_purchase', null, null, $errors )])		
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="box ">
									<div class="box-header with-border">
										<h3 class="box-title">B. Corrective Details</h3>
									</div>
									<div class="box-body">
									<div class="col-sm-6">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae inventore facere modi amet alias beatae eos, placeat cumque, nam voluptatum voluptate delectus culpa sapiente nemo dignissimos accusamus asperiores magnam. Molestiae!
									</div>
									<div class="col-sm-6">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus numquam magni placeat ullam dignissimos vel deserunt inventore blanditiis harum doloremque, eos rem modi vitae nemo at. Eaque quis voluptates aut.
									</div>
									</div>
								</div>
							</div>	                    								
						</div>
						<div class="box-footer">
							<div class="pull-right">
								<button class="btn btn-success pull" type="submit">Submit New Corrective</button>
								<a href=" {{ url('equipments') }}" class="btn btn-info btn-md"> Cancel </a>
							 </div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>

@endsection
