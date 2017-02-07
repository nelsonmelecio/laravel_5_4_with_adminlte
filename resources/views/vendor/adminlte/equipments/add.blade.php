@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Department Record',
				'indexes' => 'Departments, Add'
			])

@endsection

@section('main-content')


<div class="row">

		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('departments') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Create a new category name.</h3>
						</div>
						<form role="form" action="{{ url('department/add') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								<div class="col-sm-6">

									@include('macro.textv3', ['data' => array('Name', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Description', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Model', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Status', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Barcode', 'code', null, null, $errors )])
								</div>
								<div class="col-sm-6">
									@include('macro.textv3', ['data' => array('Availability', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Required PM', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Serial Number', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Asset Number', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Service Group', 'code', null, null, $errors )])
									@include('macro.textv3', ['data' => array('Service Provider', 'code', null, null, $errors )])
								</div>


								
								@include('macro.select_tenant', ['data' => array('Tenant Name', 'tenant_id', $tenants, null, $errors )])
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Submit</button>
								<a href=" {{ url('departments') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

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
							<a href="#" role="menuitem" tabindex="-1"></a>
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
					<b>How to use:</b>
					<p>Exactly like the original bootstrap tabs except you should use the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.
				</div>
				<div class="tab-pane" id="tab_2-2">
					The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.
				</div>
				<div class="tab-pane" id="tab_3-2">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
