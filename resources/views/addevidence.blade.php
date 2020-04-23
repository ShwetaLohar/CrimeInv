@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="container bg-white p-4 card align-self-center" style="width: 400px">
			
			<h1 class="text-center">Add Evidence</h1>

             <form method="POST" action="{{url('a_evidence')}}" autocomplete="off">	
             	<input type="hidden" name="_token" value="{{csrf_token() }}">


			<div class="form-group {{ $errors->has('case_id') ? 'has-error' : '' }}"> 
		        <label>Case ID and Name</label>   
				<select class="form-control" id="case_id" name="case_id"  required focus>
					<option selected disabled="disabled" value="">--- Select Case Details ---</option>
				@foreach (App\addcase::get() as $addcase)
			    		<option value='{{ $addcase->case_id }}'>{{ $addcase->case_id }} {{ $addcase->name }} </option>
			    @endforeach
				</select>
				<span class="text-danger">{{ $errors->first('case_id') }}</span>
			</div>

		   

			<div class="form-group {{ $errors->has('evidence') ? 'has-error' : '' }}">
				<label>Evidence</label>
				<input type="text" class="form-control" id="evidence" name="evidence" placeholder="Enter Evidence">
				<span class="text-danger">{{ $errors->first('evidence') }}</span>
			</div>


			<div class="form-group {{ $errors->has('suspect') ? 'has-error' : '' }}"> 
		        <label>Suspect Name</label>   
				<select class="form-control" id="suspect" name="suspect"  required focus>
					<option selected disabled="disabled" value="">--- Select Name ---</option>
				@foreach (App\addsuspect::get() as $addsuspect)
			    		<option value='{{ $addsuspect->suspect }}'>{{ $addsuspect->suspect }} </option>
			    @endforeach
				</select>
				<span class="text-danger">{{ $errors->first('suspect') }}</span>
			</div>
			

			<div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
				<label>Note</label>
				<textarea class="form-control" rows="3" placeholder="Enter notes Here" name="note"></textarea> 
				<span class="text-danger">{{ $errors->first('note') }}</span>
			</div>

			<div class="form-group {{ $errors->has('physical') ? 'has-error' : '' }}">
				<label>Physical</label>
				<input type="number" min="0" max="10" class="form-control" id="physical" name="physical" placeholder="Enter Evidence">
				<span class="text-danger">{{ $errors->first('physical') }}</span>
			</div>
			<div class="form-group {{ $errors->has('logical') ? 'has-error' : '' }}">
				<label>Logical</label>
				<input type="number" min="0" max="10" class="form-control" id="logical" name="logical" placeholder="Enter Evidence">
				<span class="text-danger">{{ $errors->first('logical') }}</span>
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