@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Supplier Records',
				'indexes' => 'Suppliers'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('supplier/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Supplier </a>
			</div>
			<br>
			<table id="tbldatas" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed;">
				<thead class="thead-inverse">
					<tr>
						<th width="25">ID</th>
						<th width="120">Code</th>
						<th width="200">Company Name</th>
						<th width="200">Contact Person</th>
						<th width="200">Supplier Address</th>
						<th width="200">City Address</th>
						<th width="200">State/Province</th>
						<th width="200">Postal</th>
						<th width="200">Country</th>
						<th width="200">Phone Number</th>
						<th width="200">Fax Number</th>
						<th width="200">Mobile Number</th>
						<th width="200">Email Address</th>
						<!-- <th width="200">Tenant</th> -->
						<th width="160" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($suppliers as $supplier)
					<tr>
						<td style="vertical-align: middle;">{{ $supplier->id }}</td>
						<td style="vertical-align: middle;">{{ $supplier->code }}</td>
						<td style="vertical-align: middle;">{{ $supplier->name }}</td>
						<td style="vertical-align: middle;">{{ $supplier->supplier_person }}</td>
						<td style="vertical-align: middle;">{{ $supplier->supplier_address }}</td>
						<td style="vertical-align: middle;">{{ $supplier->city_address }}</td>
						<td style="vertical-align: middle;">{{ $supplier->state_province }}</td>
						<td style="vertical-align: middle;">{{ $supplier->postal }}</td>
						<td style="vertical-align: middle;">{{ $supplier->country }}</td>
						<td style="vertical-align: middle;">{{ $supplier->phone_number }}</td>
						<td style="vertical-align: middle;">{{ $supplier->fax_number }}</td>
						<td style="vertical-align: middle;">{{ $supplier->mobile_number }}</td>
						<td style="vertical-align: middle;">{{ $supplier->email }}</td>
						<!-- <td style="vertical-align: middle;">{{ $supplier->tenant['company_name'] }}</td> -->
						<td style="vertical-align: middle;">
							<a href="{{ url('supplier/edit/' . $supplier->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
							<a href="{{ url('supplier/delete/' . $supplier->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
						</td>
					</tr>
				@endforeach
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>

@endsection
