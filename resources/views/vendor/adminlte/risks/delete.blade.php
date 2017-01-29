@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Delete Risk Category',
				'indexes' => 'Risks, Delete'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('risks') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Are you sure you want to delete this category name?</h3>
						</div>
						<form role="form" action="{{ url('risk/delete') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.text_disabled', ['data' => array('Name', 'name', $name, 'name' )])
								<input type="hidden" name="id" value="{{ $id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-danger" type="submit">Delete</button>
								<a href=" {{ url('risks') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
