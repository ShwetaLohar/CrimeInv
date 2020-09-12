@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="container bg-white p-4 card align-self-center" style="width: 400px">
			
			<h1 class="text-center">Add Officer</h1>

             <form method="POST" action="{{url('officer')}}" autocomplete="off" enctype="multipart/form-data">	
             	<input type="hidden" name="_token" value="{{csrf_token() }}">

			<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
				<label>Name</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter Officer Name">
				<span class="text-danger">{{ $errors->first('username') }}</span>
			</div>

			<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
				<label>Password</label>
				<input type="password" class="form-control"  id="password" name="password" placeholder="Enter Password">
				<span class="text-danger">{{ $errors->first('password') }}</span>
			</div>

			<!-- <div class="form-group {{ $errors->has('officer_id') ? 'has-error' : '' }}">
				<label>Officer ID</label>
				<input type="text" class="form-control"  id="officer_id" name="officer_id" placeholder="Enter Officer Id">
				<span class="text-danger">{{ $errors->first('officer_id') }}</span>
			</div>
 -->
			
			<div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
				<label>Area</label>
				<input type="text" class="form-control" id="area" name="area" placeholder="Area">
				<span class="text-danger">{{ $errors->first('area') }}</span>
			</div>
			
			<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
				<label>Address</label>
				<textarea class="form-control" rows="3" id="address" name="address" placeholder="Enter address Here"></textarea> 
				<span class="text-danger">{{ $errors->first('address') }}</span>
			</div>
			
			<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
				<label>Mobile Number</label>
				<input type="text" pattern="[0-9]{10,10}" title="Please Enter a 10 digit Number." class="form-control" id="mobile" name="mobile" placeholder="Enter 10 digit no.">
				<span class="text-danger">{{ $errors->first('mobile') }}</span>
			</div>
			
			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				<label>Email-Id</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
				<span class="text-danger">{{ $errors->first('email') }}</span>
			</div>
			
			<!-- <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
				<label>Select an Image File</label>
				<input type="file" name="image" id="image">
				<span class="text-danger">{{ $errors->first('image') }}</span>
			</div>
 -->
     		<!-- <form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
     			{{ csrf_field() }}
     			<div class="form-group"> -->
     		
     		<script type="text/javascript">
		        function readURL(input) {
		            if (input.files && input.files[0]) {
		                var reader = new FileReader();

		                reader.onload = function (e) {
		                    $('#imgPreview').attr('src', e.target.result);
		                }

		                reader.readAsDataURL(input.files[0]);
		            }
		        }
		    </script>

     		<div class="form-group {{ $errors->has('select_file') ? 'has-error' : '' }}">
				<label> Select File for Upload </label>
     				<input type="file" name="select_file" onchange="readURL(this);" /><br><br>
				<span class="text-danger">{{ $errors->first('select_file') }}</span>
			</div>

			<div class="form-group text-center">
				<img id="imgPreview" src="#" alt="" class="" />
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
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
		</form>
	</div>
</div>

@endsection

 