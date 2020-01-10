@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<div class="bg-white p-4 card align-self-center" style="max-width: 400px; margin: 0px auto;">	
		<h1 class="text-center">Add Result</h1>
			<form method="POST" action="/index" autocomplete="off" >
				<input type="hidden" name="_token" value="{{csrf_token() }}">
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
			<div class="form-group {{ $errors->has('suspect') ? 'has-error' : '' }}">
				<label>Suspect</label>
				<input type="text" class="form-control" name="suspect" placeholder="Enter Suspect">
				<span class="text-danger">{{ $errors->first('suspect') }}</span>
			</div>
			<div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
				<label>Note</label>
				<textarea class="form-control" rows="3" placeholder="Enter notes Here" name="note"></textarea> 
				<span class="text-danger">{{ $errors->first('note') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
			</div>
		</form>
	</div>
</div>


@endsection

 