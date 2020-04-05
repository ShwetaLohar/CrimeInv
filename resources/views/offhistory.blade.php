@extends('default')
@section('title', '')
@section('content')

<div class="form-parent">
<div class="container  bg-white  align-self-center">
		<br/>
		<br/>
		<br/>
		<br/>
		<h1 class="text-center">Officer History</h1>
		<br/>
		<br/>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Suspect </th>
					<th>Case ID </th>
					<th>Case Name </th>
					<th>Officer ID</th>
					<th>Officer Name </th>
				</tr>
			</thead>
			<tbody>
				@foreach($data1 as $row)
				<tr>
					<td> {{ $row->suspect }}</td>
					<td> {{ $row->case_id }} </td>
					<td> {{ $row->name }} </td>
					<td> {{ $row->officer_id }} </td>
					<td> {{ $row->officer_name }}</td>
					
				</tr>
					@endforeach
			</tbody>
		</table>
	</div>
	</div>
@endsection