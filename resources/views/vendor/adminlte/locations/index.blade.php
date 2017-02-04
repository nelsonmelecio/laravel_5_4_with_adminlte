@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Location Records',
				'indexes' => 'Locations'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('location/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Location </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
								<th width="40">ID</th>
								<th width="120">Code</th>
								<th width="200">Name</th>
								<th width="200">Building Name</th>
								<th width="200">Block No.</th>
								<th width="200">Building No.</th>
								<th width="200">Floor No.</th>
								<th width="200">Room No.</th>
								<th width="200">Tenant</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($locations as $location)
							<tr>
								<td style="vertical-align: middle;">{{ $location->id }}</td>
								<td style="vertical-align: middle;">{{ $location->code }}</td>
								<td style="vertical-align: middle;">{{ $location->name }}</td>
								<td style="vertical-align: middle;">{{ $location->building_name }}</td>
								<td style="vertical-align: middle;">{{ $location->block_number }}</td>
								<td style="vertical-align: middle;">{{ $location->building_number }}</td>
								<td style="vertical-align: middle;">{{ $location->floor_number }}</td>
								<td style="vertical-align: middle;">{{ $location->room_number }}</td>
								<td style="vertical-align: middle;">{{ $location->tenant['company_name'] }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('location/edit/' . $location->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('location/delete/' . $location->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
