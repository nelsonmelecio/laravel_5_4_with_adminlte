@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Manage Equipments',
				'indexes' => 'Equipments'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('equipment/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Equipment </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
								<th width="40">ID</th>
								<th width="200">Name</th>
								<th width="200">Description</th>
								<th width="200">Model</th>
								<th width="200">Status</th>
								<th width="200">Barcode</th>
								<th width="200">Serial Number</th>
								<th width="200">Asset Number</th>
								<th width="200">Required PM</th>
								<th width="200">Service Group</th>
								<th width="200">Service Provider</th>
								<th width="200">Availability</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($equipments as $equipment)
							<tr>
								<td style="vertical-align: middle;">{{ $equipment->id }}</td>
								<td style="vertical-align: middle;">{{ $equipment->name }}</td>
								<td style="vertical-align: middle;">{{ $equipment->description }}</td>
								<td style="vertical-align: middle;">{{ $equipment->model }}</td>
								<td style="vertical-align: middle;">{{ $equipment->status }}</td>
								<td style="vertical-align: middle;">{{ $equipment->barcode }}</td>
								<td style="vertical-align: middle;">{{ $equipment->serial_number }}</td>
								<td style="vertical-align: middle;">{{ $equipment->asset_number }}</td>
								<td style="vertical-align: middle;">{{ $equipment->required_pm }}</td>
								<td style="vertical-align: middle;">{{ $equipment->service_group }}</td>
								<td style="vertical-align: middle;">{{ $equipment->service_provider }}</td>
								<td style="vertical-align: middle;">{{ $equipment->availability }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('equipment/edit/' . $equipment->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> View Details </a>
									<a href="{{ url('equipment/delete/' . $equipment->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
