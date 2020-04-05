@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="bg-white p-4 card align-self-center" style="max-width: 400px; margin: 0px auto;">	
			<h1 class="text-center">Add Case Officer</h1>
            
            <br>
            <form method="POST" action="{{url('addcofficer')}}" autocomplete="off" >
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
			
			<div class="form-group  {{ $errors->has('officer_id') ? 'has-error' : '' }}">
				<label>Officer ID and Name</label>
				<select class="form-control" id="officer_id" name="officer_id" required focus>
						<option value="no" selected disabled=true>--- Select Officer Details ---</option>
					@foreach (App\User::get() as $user)
				    		<option value='{{ $user->officer_id }}'>{{ $user->officer_id }} {{ $user->username }} </option>
				    @endforeach
					</select>
				<span class="text-danger">{{ $errors->first('user') }}</span>
			</div>
			

			<!-- @if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach 
				</ul>
			</div>
			@endif -->

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

 
