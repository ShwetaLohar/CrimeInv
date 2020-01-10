@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<form class="container bg-white p-4 card align-self-center" style="width: 400px">
			
			<h1 class="text-center">Add Result</h1>

			<div class="form-group">
				<label>Case ID</label>
				<input type="text" class="form-control" name="case_id" placeholder="Enter Case Id">
			</div>
			<div class="form-group">
				<label>Case Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter Case Name">
			</div>
			<div class="form-group">
				<label>Suspect</label>
				<input type="text" class="form-control" name="suspect" placeholder="Enter Suspect">
			</div>
			<div class="form-group">
				<label>Note</label>
				<!-- /<input type="textarea" class="form-control" name="note" placeholder="Enter Note">  -->
				<textarea class="form-control" rows="3" placeholder="Enter notes Here" name="note"></textarea> 
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
			</div>
		</form>
	</div>


@endsection

 