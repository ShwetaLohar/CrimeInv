@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="bg-white p-4 card align-self-center" style="max-width: 400px; margin: 0px auto;">
		<h1 class="text-center">Add Result</h1>
			

			<form method="POST" action="{{url('result')}}" autocomplete="off" >
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

			
			<div class="form-group {{ $errors->has('suspect') ? 'has-error' : '' }}"> 
		        <label>Suspect Name</label>   
				<select class="form-control" id="suspect" name="suspect"  required focus>
					<option selected="selected">--- Select Name ---</option>
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
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach 
				</ul>
			</div>
			@endif

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
	<br><br><br>
</div>


@endsection

 