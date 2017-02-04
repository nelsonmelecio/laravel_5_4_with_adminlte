@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Tenant Records',
				'indexes' => 'Tenants'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('tenant/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Tenant </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
								<th width="40">ID</th>
								<th width="120">Code</th>
								<th width="200">Company Name</th>
								<th width="130">Business Type</th>
								<th width="130">Department No.</th>
								<th width="130">Equipment No.</th>
								<th width="130">License No.</th>
								<th width="100">Permit No.</th>
								<th width="100">ISO No.</th>
								<th width="130">Phone No. 1</th>
								<th width="130">Phone No. 2</th>
								<th width="200">Email Address</th>
								<th width="200">Website</th>
								<th width="130">Country</th>
								<th width="130">Date Registered</th>
								<th width="130">Hospital Code</th>
								<th width="130">Fax No.</th>
								<th width="130">Mobile No. 1</th>
								<th width="130">Mobile No. 2</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($tenants as $tenant)
							<tr>
								<td style="vertical-align: middle;">{{ $tenant->id }}</td>
								<td style="vertical-align: middle;">{{ $tenant->code }}</td>
								<td style="vertical-align: middle;">{{ $tenant->company_name }}</td>
								<td style="vertical-align: middle;">{{ $tenant->business_type }}</td>
								<td style="vertical-align: middle;">{{ $tenant->number_department }}</td>
								<td style="vertical-align: middle;">{{ $tenant->number_equipment }}</td>
								<td style="vertical-align: middle;">{{ $tenant->license_number }}</td>
								<td style="vertical-align: middle;">{{ $tenant->permit_number }}</td>
								<td style="vertical-align: middle;">{{ $tenant->ISO_Number }}</td>
								<td style="vertical-align: middle;">{{ $tenant->phone_number1 }}</td>
								<td style="vertical-align: middle;">{{ $tenant->phone_number2 }}</td>
								<td style="vertical-align: middle;">{{ $tenant->email }}</td>
								<td style="vertical-align: middle;">{{ $tenant->website }}</td>
								<td style="vertical-align: middle;">{{ $tenant->country }}</td>
								<td style="vertical-align: middle;">{{ $tenant->date_registered }}</td>
								<td style="vertical-align: middle;">{{ $tenant->hospital_code }}</td>
								<td style="vertical-align: middle;">{{ $tenant->fax_number }}</td>
								<td style="vertical-align: middle;">{{ $tenant->mobile_number1 }}</td>
								<td style="vertical-align: middle;">{{ $tenant->mobile_number2 }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('tenant/edit/' . $tenant->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('tenant/delete/' . $tenant->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
