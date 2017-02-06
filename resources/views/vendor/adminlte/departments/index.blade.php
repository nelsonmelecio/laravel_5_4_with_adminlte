@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Department Records',
				'indexes' => 'Departments'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('department/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Department </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
								<th width="40">ID</th>
								<th width="150">Department Code</th>
								<th width="200">Department Name</th>
								<th width="200">Department Section</th>
								<th width="200">Department Building</th>
								<th width="200">Building Number</th>
								<th width="200">Building Floor</th>
								<th width="200">Building Address</th>
								<th width="200">Tenant</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($departments as $department)
							<tr>
								<td style="vertical-align: middle;">{{ $department->id }}</td>
								<td style="vertical-align: middle;">{{ $department->code }}</td>
								<td style="vertical-align: middle;">{{ $department->name }}</td>
								<td style="vertical-align: middle;">{{ $department->section }}</td>
								<td style="vertical-align: middle;">{{ $department->building }}</td>
								<td style="vertical-align: middle;">{{ $department->building_number }}</td>
								<td style="vertical-align: middle;">{{ $department->building_floor }}</td>
								<td style="vertical-align: middle;">{{ $department->building_address }}</td>
								<td style="vertical-align: middle;">{{ $department->tenant['company_name'] }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('department/edit/' . $department->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('department/delete/' . $department->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
