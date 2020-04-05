@extends('default')
@section('title', '')
@section('content')

<div class="form-parent">
<br><br><br><br>
<div class="container bg-white  align-self-center">
		<br/>
		<h1 class="text-center">Criminal History</h1>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th> Case ID </th>
					<th> Case Name </th>
					<th> Suspect </th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr>
					<td> {{ $row['case_id'] }} </td>
					<td> {{ $row['name'] }}</td>
					<td> {{ $row['suspect'] }}</td>
				</tr>
					@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection
