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

		        		$indexLabel = $index;

		        		switch($index)
		        		{
		        			case 'work_status':
		        			case 'work_statuses':
		        				$indexLabel = 'Work Status';
		        				break;
		        			case 'work_type':
		        			case 'work_types':
		        				$indexLabel = 'Work Types';
		        				break;
		        		}

		        		$strIndex .= strtolower(trim($index)) . '/';
		        		 
		        	@endphp

				    @if( $loop->last )
				        <li>{{ $indexLabel }}</li>
			        @else
				        <li class="active"><a href="{!! url( $strIndex ) !!}">{{ $indexLabel }}</a></li>
				    @endif
				@endforeach
		    </ol>
		</div>
	</div>
