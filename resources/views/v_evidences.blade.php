@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="container bg-white  align-self-center">
	<div class="row">
		<div class="col-md-12">
		<br/>
		<h3 align="center">View Evidence</h3>
		<br/>
		<!-- <script type="text/javascript">
				

			function getEvids(){
				var id = $('#case_id').val();
				window.location.href = "/v_evidences/" + id;
			}

		</script> -->

		
		<!-- <div class="form-group {{ $errors->has('case_id') ? 'has-error' : '' }}"> 
			<label>Case ID</label>   
			<select class="form-control" id="case_id" name="case_id"  required focus>
				<option selected="selected">--- Select Case ID ---</option>
				@foreach (App\addcase::get() as $addcase)
				<option value='{{ $addcase->case_id }}'>{{ $addcase->case_id }} {{ $addcase->name }}</option>
				@endforeach
		    </select>
			<span class="text-danger">{{ $errors->first('case_id') }}</span>
		</div> -->

		<div>
			<a href="{{route('addevidence')}}"></a>
		</div>


		@if( $evids ?? '')
		<table class="table table-bordered">
			<tr>
				<th> Case Id </th>
				<th> Evidence</th>
				<th> Suspect</th>
				<th> Note </th>
				<th> Physical Score </th>
				<th> Logical Score </th>
				
			</tr>
		
			@foreach ($evids as $row)
			<tr>
				<td>{{$row['case_id']}}</td>
				<td>{{$row['evidence']}}</td>
				<td>{{$row['suspect']}}</td>
				<td>{{$row['note']}}</td>
				<td>{{$row['physical']}}</td>
				<td>{{$row['logical']}}</td>
				
			</tr>
			@endforeach
		</table>
		@endif




	</div>
</div>
</div>





@endsection