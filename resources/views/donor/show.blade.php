@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-body">	
		<table class="table table-bordered">
			<tr>
				<th colspan="4">Name &nbsp;&nbsp;&nbsp;: {{$donor->name}}</th>
			</tr>
			<tr>
				<th colspan="4">Kular&nbsp;: {{$donor->amount}}</th>
				@php
					$amt=$donor->amount;
				@endphp
			</tr>
			<tr>				
				<th>Date</th>
				<th>Amount</th>
				<th>Balance</th>
				<th>Option</th>
			</tr>
			@foreach($donor->transaction as $item)
			<tr>				
				<td>{{$item->date}}</td>
				<td>{{$item->amount}}</td>
				<td>{{$amt=$amt-($item->amount)}}</td>
				<td><a href="{{ url('/') }}/print/{{$item->id}}/{{$amt}}" target="_blank">Print</a></td>
			</tr>
			@endforeach
		</table>
		</div>
	</div>
</div>
@endsection