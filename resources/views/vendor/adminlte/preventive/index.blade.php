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
				<a href="#" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Preventive Maintenance </a>
			</div>
			<br>
			<!-- <div class="box"> -->
				<!-- <div class="box-body table-responsive" style="min-height: 150px; overflow: auto;"> -->
					<table id="tbldatas" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed;">
						<thead class="thead-inverse">
							<tr>				
								<th width="40">ID</th>
								<th width="200">Department</th>
								<th width="200">Unit</th>
								<th width="200">Asset Description</th>
								<th width="200">Brand Manufacturer</th>
								<th width="200">Model Number/ Model Name</th>
								<th width="200">Serial Number</th>
								

								<th width="200">Asset Number</th>
								<th width="200">Barcode</th>
								<th width="200">Date of Purchase</th>
								<th width="200">Distributor</th>
								<th width="200">Priority By Risk Classification</th>

								<th width="200">PM Frequency</th>
								<th width="200">Supplier For PM Maintenance</th>
								<th width="200">Service Status</th>
								<th width="200">Other Details</th>

								<th width="200">PM Schedule for Q1</th>
								<th width="200">PM Schedule for Q2</th>
								<th width="200">PM Schedule for Q3</th>
								<th width="200">PM Schedule for Q4</th>
								<th width="200" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td style="vertical-align: middle;">&nbsp;</td>
								<td>
									<a href="#" class="btn btn-success btn-xs" style="width: 48%;"> View Details </a>
									<a href="#" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
								</td>
							</tr>

						</tbody>
						</tfoot>
					</table>
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>

@endsection
