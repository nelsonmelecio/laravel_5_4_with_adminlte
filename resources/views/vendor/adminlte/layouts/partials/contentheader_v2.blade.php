	<div class="row">
		<div class="col-sm-12">
		    <h1>{{ $title }}</h1>
		    <ol class="breadcrumb">
		        <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a></li>
				@php 
					$strIndex = ''
				@endphp
		        @foreach( explode(",", $indexes) as $index )
		        	@php
		        		$strIndex .= strtolower(trim($index)) . '/' 
		        	@endphp
				    @if( $loop->last )
				        <li>{{ $index }}</li>
			        @else
				        <li class="active"><a href="{!! url( $strIndex ) !!}">{{ $index }}</a></li>
				    @endif
				@endforeach
		    </ol>
		</div>
	</div>
