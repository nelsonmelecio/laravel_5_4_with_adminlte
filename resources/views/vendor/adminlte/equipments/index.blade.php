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

			<table id="tbldatas" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed;">
				<thead>
					<tr>
						<th width="40">ID</th>
						<th width="200">Equipment Name</th>
						<th width="200">Equipment Description</th>
						<!-- <th width="400">Details</th> -->
						<th width="150">Model</th>
						<th width="150">Barcode</th>
						<th width="150">Serial Number</th>
						<th width="150">Asset Number</th>
						<th width="120">Status</th>
						<th width="100">Required PM</th>
						<th width="110">Service Group</th>
						<th width="120">Service Provider</th>
						<th width="100">Availability</th>
						<th width="200" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($equipments as $equipment)
					<tr>
						<td style="vertical-align: middle;">{{ $equipment->id }}</td>
						<td style="vertical-align: middle;">{{ $equipment->equipment_name }}</td>
						<td style="vertical-align: middle;">{{ $equipment->equipment_description }}</td>
						<!-- <td style="vertical-align: middle;">
							
								<div class="box box-default collapsed-box">
									<div class="box-header with-border">
										<h3 class="box-title">Expandable</h3>
										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
										</div>
									</div>
									<div class="box-body">
										The body of the box {{ $equipment->category_id }}
									</div>
								</div>
							
						</td> -->
						<td style="vertical-align: middle;">{{ $equipment->model }}</td>
						<td style="vertical-align: middle;">{{ $equipment->barcode }}</td>
						<td style="vertical-align: middle;">{{ $equipment->serial_number }}</td>
						<td style="vertical-align: middle;">{{ $equipment->asset_number }}</td>
						<td style="vertical-align: middle;">{{ $equipment->status['name'] }}</td>
						<td style="vertical-align: middle;">{{ $equipment->required_pm }}</td>
						<td style="vertical-align: middle;">{{ $equipment->service_group }}</td>
						<td style="vertical-align: middle;">{{ $equipment->service_provider }}</td>
						<td style="vertical-align: middle;">{{ $equipment->availability }}</td>
						<td style="vertical-align: middle;">
							<a href="{{ url('equipment/edit/' . $equipment->id) }}" class="btn btn-success btn-xs" style="width: 48%;"> View Details </a>
							<a href="{{ url('equipment/delete/' . $equipment->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
						</td>
					</tr>
					@endforeach
				</tbody>
				</tfoot>
			</table>

		</div>
	</div>

@endsection
