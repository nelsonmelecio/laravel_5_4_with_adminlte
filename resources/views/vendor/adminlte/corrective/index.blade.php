@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Corrective Maintenance',
				'indexes' => 'Correctives'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('corrective/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Corrective Maintenance </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
							<!-- 'equipment_id',     // tbl:equipments
                            'work_order_code',
                            'work_order_date',
                            'work_order_time',
                            'work_type_id',     //tbl:work_type
                            'work_status_id',   //tbl:work_status
                            'department_id',    //tbl:department

                            'request_code',
                            'request_date',
                            'request_time',
                            'request_type_id',  //tbl:request_type
                            'request_id',

                            'status_id',        //tbl:status
                            'target_date',
                            'request_details',
                            'tenant_id',        //tbl:tenant
                            'condition_id',     //tbl:condition
                            'utilization_id',   //tbl:utilization
                            'observation',  
                            'reported',
                            'remarks',		 -->					
								<th width="40">ID</th>
								<th width="200">Equipment Name</th>
								<th width="200">Work Order Date</th>
								<th width="200">Work Order Time</th>
								<th width="200">Work Type</th>
								<th width="200">Work Status</th>
								<th width="200">Department</th>

								<th width="200">Request Code</th>
								<th width="200">Request Date</th>
								<th width="200">Request Time</th>
								<th width="200">Request Type</th>
								<th width="200">Request</th>

								<th width="200">Status</th>
								<th width="200">Target Date</th>
								<th width="200">Request Details</th>
								<th width="200">Tenant Hospital</th>
								<th width="200">Condition</th>
								<th width="200">Utilization</th>
								<th width="200">Obervation</th>
								<th width="200">Reported</th>
								<th width="200">Remarks</th>
								<th width="200" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($correctives as $corrective)
							<tr>
								<td style="vertical-align: middle;">{{ $corrective->id }}</td>
								<td style="vertical-align: middle;">{{ $corrective->corrective_name }}</td>
								<td style="vertical-align: middle;">{{ $corrective->corrective_description }}</td>
								<td style="vertical-align: middle;">{{ $corrective->model }}</td>
								<td style="vertical-align: middle;">{{ $corrective->barcode }}</td>
								<td style="vertical-align: middle;">{{ $corrective->serial_number }}</td>
								<td style="vertical-align: middle;">{{ $corrective->asset_number }}</td>
								<td style="vertical-align: middle;">{{ $corrective->status['name'] }}</td>
								<td style="vertical-align: middle;">{{ $corrective->required_pm }}</td>
								<td style="vertical-align: middle;">{{ $corrective->service_group }}</td>
								<td style="vertical-align: middle;">{{ $corrective->service_provider }}</td>
								<td style="vertical-align: middle;">{{ $corrective->availability }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('corrective/edit/' . $corrective->id) }}" class="btn btn-success btn-xs" style="width: 48%;"> View Details </a>
									<a href="{{ url('corrective/delete/' . $corrective->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
								</td>
							</tr>
						@endforeach
						</tbody>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection
