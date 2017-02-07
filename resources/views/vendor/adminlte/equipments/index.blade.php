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
	<div class="col-md-12">
		
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs pull-right">
				<li class="active">
					<a data-toggle="tab" href="#tab_1-1">Tab 1</a>
				</li>
				<li>
					<a data-toggle="tab" href="#tab_2-2">Tab 2</a>
				</li>
				<li>
					<a data-toggle="tab" href="#tab_3-2">Tab 3</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li role="presentation">
							<a href="#" role="menuitem" tabindex="-1">Action</a>
						</li>
						<li role="presentation">
							<a href="#" role="menuitem" tabindex="-1">Another action</a>
						</li>
						<li role="presentation">
							<a href="#" role="menuitem" tabindex="-1">Something else here</a>
						</li>
						<li class="divider" role="presentation"></li>
						<li role="presentation">
							<a href="#" role="menuitem" tabindex="-1">Separated link</a>
						</li>
					</ul>
				</li>
				<li class="pull-left header"><i class="fa fa-th"></i>Add New Equipment</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_1-1">
					<p>Currently updating this module...</p>
				</div>
				<div class="tab-pane" id="tab_2-2">
					<p>Currently updating this module...</p>
				</div>
				<div class="tab-pane" id="tab_3-2">
					<p>Currently updating this module...</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
