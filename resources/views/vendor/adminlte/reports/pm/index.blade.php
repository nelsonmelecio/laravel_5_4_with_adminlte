@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Preventive Accomplishment',
				'indexes' => 'PM Reports'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<table id="tblreports" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed; border-color: #565051 !important;">
				<thead class="thead-inverse" style="border-color: #565051 !important;">
					<tr style="border-color: #565051 !important;">
						<td class="text-center" colspan="2" rowspan="2" style="vertical-align: middle; border-color: #565051;">Risk Level</td>
						<td class="text-center" colspan="3" style="background-color: #F4A460; border-color: #565051;">SGE & MAK</td> 
						<td class="text-center" colspan="3" style="background-color: #FFDEAD; border-color: #565051;">Supplier</td> 
						<td class="text-center" colspan="3" style="background-color: #95B9C7; border-color: #565051 !important;">In-House</td> 
						<td class="text-center" colspan="3" style="background-color: #FFD700; border-color: #565051 !important;">Total</td>
					</tr>
					<tr style="border-color: #565051 !important;">
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important; ">YTD Dec</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">FTM Jan</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Jan</td>

						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Dec</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">FTM Jan</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Jan</td>

						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Dec</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">FTM Jan</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Jan</td>

						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Dec</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">FTM Jan</td>
						<td class="text-center" style="background-color: #6495ED; border-color: #565051 !important;">YTD Jan</td>
					</tr>
				</thead>
				<tbody>
					
					<!-- 1 -->
					<tr>
						<td>High Risk</td>
						<td></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Planned</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Done</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Spill over</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td style="background-color: #6495ED;">%</td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
					</tr>

					<!-- 2 -->

					<tr>
						<td>Medium II</td>
						<td></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Planned</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Done</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Spill over</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td style="background-color: #6495ED;">%</td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
					</tr>

					<!-- 3 -->

					<tr>
						<td>Medium I</td>
						<td></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Planned</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Done</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Spill over</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td style="background-color: #6495ED;">%</td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
					</tr>

					<!-- 4 -->

					<tr>
						<td>Low</td>
						<td></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Planned</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Done</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Spill over</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td style="background-color: #6495ED;">%</td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
					</tr>

					<!-- 5 -->

					<tr>
						<td>TOTAL</td>
						<td></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Planned</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Done</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td>Spill over</td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #F4A460;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #FFDEAD;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #95B9C7;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
						<td style="background-color: #FFD700;"></td>
					</tr>

					<tr>
						<td></td>
						<td style="background-color: #6495ED;">%</td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
						<td style="background-color: #6495ED;"></td>
					</tr>
				
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>

@endsection
