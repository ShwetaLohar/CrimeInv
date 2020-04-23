@extends('default')
@section('title', '')
@section('content')

<div class="form-parent">
<br><br><br><br>
<div class="container bg-white  align-self-center">
		<br/>
		<h1 class="text-center">View Officer History</h1>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					
					<th>Case ID </th>
					<th>Officer ID</th>
					<th>Suspect </th>
					<!-- <th>Case Name </th> -->
					
					<!-- <th>Officer Name </th> -->
				</tr>
			</thead>
			<tbody>
				@foreach($data1 as $row)
				<tr>
					
					<td> {{ $row->case_id }} </td>
					
					<td> {{ $row->officer_id }} </td>
					<td> {{ $row->suspect }}</td>
					
				</tr>
					@endforeach
			</tbody>
		</table>
	</div>
	</div>
@endsection