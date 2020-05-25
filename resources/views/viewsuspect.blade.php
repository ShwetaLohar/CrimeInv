@extends('default')
@section('title', '')
@section('content')

		<div class="form-parent">
		<br><br><br><br>
		<div class="container bg-white  align-self-center">
	<div class="row">
		<div class="col-md-12">
		<br/>
		<h1 class="text-center">View Suspects</h1>
		<br/>
		
		<script type="text/javascript">	

			function getSusps(){
				var id = $('#case_id').val();
				window.location.href = "/viewsuspect/" + id;
			}

		</script>


		<div class="form-group {{ $errors->has('case_id') ? 'has-error' : '' }}"> 
	        <label>Case ID and Name</label>   
			<select class="form-control" id="case_id" name="case_id" onchange="getSusps()"  required focus>
				<option selected="selected">--- Select Case Details ---</option>
			@foreach (App\addcase::get() as $addcase)
		    	<option value='{{ $addcase->case_id }}'>{{ $addcase->case_id }} {{ $addcase->name }} </option>
		    @endforeach
			</select>
			<span class="text-danger">{{ $errors->first('case_id') }}</span>
		</div>

		<div>
			<a href="{{route('addsuspect')}}"></a>
		</div>

		@if( $suspects ?? '')
			<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th> Case ID </th>
					<th> Suspect </th>
					<th> Mobile Number </th>
					<th> Address </th>
					<th> Relation </th>
					<th> Image </th>
					<th> Note </th>
					<th> Probability </th>
					<th> Action </th>
				</tr>
			</thead>
			
				@foreach($suspects as $row)
				<tr>
					<td> {{ $row->case_id }} </td>
					<td> {{ $row->suspect }}</td>
					<td> {{ $row->mobile }} </td>
					<td> {{ $row->address }} </td>
					<td> {{ $row->relation }} </td>
					<td><img src="data:image/jpg;base64,{{base64_encode($row->upload_file)}}" height="100" width="100"/></td>
					<td> {{ $row->note }} </td>
					<td> {{ $row->prob }} </td>
					<td> <a class="btn btn-primary" href="/addresult?caseId={{ $row->case_id }}&suspId={{ $row->susp_id }}" target="_BLANK">Finalize
					</td>

				</tr>
				@endforeach
			
		</table>
		@endif


	</div>
</div>
</div>

@endsection