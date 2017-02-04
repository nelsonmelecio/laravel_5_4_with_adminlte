@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Manufacturer Records',
				'indexes' => 'Manufacturers'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('manufacturer/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Manufacturer </a>
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
								<th width="200">Contact Person</th>
								<th width="200">Company Address</th>
								<th width="200">Province</th>
								<th width="200">Zip Code</th>
								<th width="200">Phone Number 1</th>
								<th width="200">Phone Number 2</th>
								<th width="200">Fax Number</th>
								<th width="200">Mobile Number 1</th>
								<th width="200">Mobile Number 2</th>
								<th width="200">Website</th>
								<th width="200">Country</th>
								<th width="200">Tenant</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($manufacturers as $manufacturer)
							<tr>
								<td style="vertical-align: middle;">{{ $manufacturer->id }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->code }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->company_name }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->contact_person }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->company_address }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->province }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->zipcode }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->phone_number1 }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->phone_number2 }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->fax_number }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->mobile_number1 }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->mobile_number2 }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->web_addess }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->country }}</td>
								<td style="vertical-align: middle;">{{ $manufacturer->tenant['company_name'] }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('manufacturer/edit/' . $manufacturer->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('manufacturer/delete/' . $manufacturer->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
