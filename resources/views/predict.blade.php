@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="bg-white p-4 card align-self-center" style="max-width: 400px; margin: 0px auto;">
		<h1 class="text-center">Prediction</h1>
			

			<form method="POST" action="{{url('predict_res')}}" autocomplete="off" >
				<input type="hidden" name="_token" value="{{csrf_token() }}">
			 
			<div class="form-group {{ $errors->has('case_id') ? 'has-error' : '' }}"> 
			        <label>Case ID and Name</label>   
					<select class="form-control" id="case_id" name="case_id"  required focus>
						<option option value="no" selected disabled=true>--- Select Case Details ---</option>
					@foreach (App\addcase::get() as $addcase)
				    		<option value='{{ $addcase->case_id }}'>{{ $addcase->case_id }} {{ $addcase->name }} </option>
				    @endforeach
					</select>
					<span class="text-danger">{{ $errors->first('case_id') }}</span>
			</div>
			
			

			<div class="form-group  {{ $errors->has('suspect') ? 'has-error' : '' }}">
				<label>Suspect</label>
				<input type="text" class="form-control" id="suspect" name="suspect" placeholder="Enter Case Suspect" >
				<span class="text-danger">{{ $errors->first('suspect') }}</span>
			</div>

			<div class="form-group {{ $errors->has('point') ? 'has-error' : '' }}">
				<label>Points</label>
				<input type="text" class="form-control" name="point" placeholder="Enter Points">
				<span class="text-danger">{{ $errors->first('point') }}</span>
			</div>
			

			@if(\Session::has('success'))
				<div class="alert alert-success">
					<p>{{\Session::get('success')}}</p>
				</div>
			@endif
			{{csrf_field()}}
			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
			</div>
		</form>
	</div>
</div>
@endsection

		
	




























