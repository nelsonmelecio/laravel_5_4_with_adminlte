@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Preventive Maintenance',
				'indexes' => 'Preventives'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('preventive/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Preventive Maintenance </a>
			</div>
			<br>
			<!-- <div class="box"> -->
				<!-- <div class="box-body table-responsive" style="min-height: 150px; overflow: auto;"> -->
					<table id="tbldatas" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed;">
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
						@foreach($preventives as $preventive)
							<tr>
								<td style="vertical-align: middle;">{{ $preventive->id }}</td>
								<td style="vertical-align: middle;">{{ $preventive->preventive_name }}</td>
								<td style="vertical-align: middle;">{{ $preventive->preventive_description }}</td>
								<td style="vertical-align: middle;">{{ $preventive->model }}</td>
								<td style="vertical-align: middle;">{{ $preventive->barcode }}</td>
								<td style="vertical-align: middle;">{{ $preventive->serial_number }}</td>
								<td style="vertical-align: middle;">{{ $preventive->asset_number }}</td>
								<td style="vertical-align: middle;">{{ $preventive->status['name'] }}</td>
								<td style="vertical-align: middle;">{{ $preventive->required_pm }}</td>
								<td style="vertical-align: middle;">{{ $preventive->service_group }}</td>
								<td style="vertical-align: middle;">{{ $preventive->service_provider }}</td>
								<td style="vertical-align: middle;">{{ $preventive->availability }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('preventive/edit/' . $preventive->id) }}" class="btn btn-success btn-xs" style="width: 48%;"> View Details </a>
									<a href="{{ url('preventive/delete/' . $preventive->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
								</td>
							</tr>
						@endforeach
						</tbody>
						</tfoot>
					</table>
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>

@endsection
