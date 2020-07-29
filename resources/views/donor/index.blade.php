@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-header bg-info">{{$card_header}}</div>
		<div class="card-body">	
		<table class="table table-bordered">
			<tr>
			@foreach($columns as $item)
				@if($item!='id' && $item!='created_at' && $item!='updated_at')
				@php
				    $title=ucwords(str_replace('_',' ',$item));
				@endphp
		            <th>{{$title}}</th>
				@endif
			@endforeach
				<th>Option</th>
			</tr>
			@foreach($table as $item1)
			<tr>
				@foreach($columns as $item)
					@if($item!='id' && $item!='created_at' && $item!='updated_at')
						@if(isset($relation) && $item==$relation[1])
							@php
								$model=$relation[0];
								$key=$relation[2];
							@endphp
							<td>{{ $item1-> $model-> $key}}</td>
						@else
			            	<td>{{ $item1-> $item}}</td>
			            @endif
					@endif
				@endforeach
				<td><a class="btn btn-info" href="{{ url('/') }}/{{$route}}/{{$item1->id}}">Details</a>|<a class="btn btn-info" href="{{ url('/') }}/print/{{$item1->id}}" target="_blank">Print</a></td>
			</tr>
			@endforeach
		</table>
		</div>
	</div>
</div>
@endsection