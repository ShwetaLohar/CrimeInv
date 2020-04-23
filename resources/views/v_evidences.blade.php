@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="container bg-white  align-self-center">
	<div class="row">
		<div class="col-md-12">
		<br/>
		<h1 class="text-center">View Evidences</h1>
		<br/>
		<script type="text/javascript">
				

			function getEvids(){
				var id = $('#case_id').val();
				window.location.href = "/v_evidences/" + id;
			}

		</script>

		
		<div class="form-group {{ $errors->has('case_id') ? 'has-error' : '' }}"> 
	        <label>Case ID and Name</label>   
			<select class="form-control" id="case_id" name="case_id" onchange="getEvids()" required focus>
				<option selected="selected">--- Select Case Details ---</option>
			@foreach (App\addcase::get() as $addcase)
		    	<option value='{{ $addcase->case_id }}'>{{ $addcase->case_id }} {{ $addcase->name }} </option>
		    @endforeach
			</select>
			<span class="text-danger">{{ $errors->first('case_id') }}</span>
		</div>

		<div>
			<a href="{{route('addevidence')}}"></a>
		</div>


		@if( $addevids ?? '') 
		<table class="table table-bordered">
			<thead class="thead-dark">
			<tr>
				<th> Case Id </th>
				<th> Evidence</th>
				<th> Suspect</th>
				<th> Note </th>
				<th> Physical Score </th>
				<th> Logical Score </th>
				
			</tr>
		</thead>
		
			@foreach ($addevids as $row)
			<tr>
				<td>{{ $row->case_id }}</td>
				<td>{{ $row->evidence }}</td>
				<td>{{ $row->suspect }}</td>
				<td>{{ $row->note }}</td>
				<td>{{ $row->physical }}</td>
				<td>{{ $row->logical }}</td>
				
			</tr>
			@endforeach
		</table>
		@endif




	</div>
</div>
</div>





@endsection