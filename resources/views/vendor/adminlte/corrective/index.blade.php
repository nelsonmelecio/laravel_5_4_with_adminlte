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
			<!-- <div class="box"> -->
				<!-- <div class="box-body table-responsive" style="min-height: 150px; overflow: auto;"> -->
					<table id="tbldatas" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed;">
						<thead class="thead-inverse">
							<tr>
								<th width="40">NO</th>

								<!-- the ff. column data are from the equipments details  -->
								<th width="150">Asset No.</th>
								<th width="150">SD Number</th>
								<th width="150">Description</th>
								<th width="150">Brand</th>
								<th width="150">Serial</th>
								<th width="150">Department</th>
								<th width="150">Risk Classification</th>
								<th width="150">Date of Purchase</th>


								<th width="150">Problem Observed</th>
								<th width="150">Action Taken</th>
								<th width="150">Recommendation</th>
								<th width="150">Status</th>
								<th width="150">PR Supplier</th>
								<th width="150">PR #</th>
								<th width="150">Date Reported</th>
								<th width="150">Date Completed</th>
								<th width="150">Turn Around Time/Downtime</th>
								<th width="150">Responsible Party</th>
								<th width="150">Plan Completed</th>

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
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>

@endsection
