@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent backgroundimg">
		<form class="container bg-white p-4 card align-self-center" style="width: 400px">
			
			<h1 class="text-center">Add Case Officer</h1>
            <form method="POST" action="/caseofficer" autocomplete="off">
			<div class="form-group  {{ $errors->has('case_id') ? 'has-error' : '' }}">
				<label>Case ID</label>
				<input type="text" class="form-control" id="case_id" name="case_id" placeholder="Enter Case Id" >
				<span class="text-danger">{{ $errors->first('case_id') }}</span>
			</div>
			<div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
				<label>Case Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Case Name" >
				<span class="text-danger">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group  {{ $errors->has('officer_id') ? 'has-error' : '' }}">
				<label>Officer ID</label>
				<input type="text" class="form-control" id="officer_id" name="officer_id" placeholder="Enter Officer ID" required>
				<span class="text-danger">{{ $errors->first('officer_id') }}</span>
			</div>
			<div class="form-group  {{ $errors->has('officer_name') ? 'has-error' : '' }}">
				<label>Officer Name</label>
				<input type="text" class="form-control" id="officer_name" name="officer_name" placeholder="Enter Officer Name" required>
				<span class="text-danger">{{ $errors->first('officer_name') }}</span>
			</div>
			
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
			</div>
		</form>
	</div>


@endsection

 
