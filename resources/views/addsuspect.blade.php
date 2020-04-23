@extends('default')
@section('title', '')   
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="container bg-white p-4 card align-self-center" style="width: 400px">
			
			<h1 class="text-center">Add Suspect</h1>
			 <form method="POST" action="{{url('asus')}}" autocomplete="off" enctype="multipart/form-data">	
             	<input type="hidden" name="_token" value="{{csrf_token() }}">

			<div class="form-group {{ $errors->has('case_id') ? 'has-error' : '' }}"> 
			     <label>Case ID</label>   
			     <select class="form-control" id="case_id" name="case_id"  required focus>
						<option selected disabled="disabled" value="">--- Select Case ID ---</option>
				@foreach (App\addcase::get() as $addcase)
				    <option value='{{ $addcase->case_id }}'>{{ $addcase->case_id }} {{ $addcase->name }}</option>
				@endforeach
				</select>
				<span class="text-danger">{{ $errors->first('case_id') }}</span>
			</div>

			<div class="form-group {{ $errors->has('suspect') ? 'has-error' : '' }}">
				<label>Suspect Name</label>
				<input type="text" class="form-control" id="suspect" name="suspect" placeholder="Enter Suspect Name">
				<span class="text-danger">{{ $errors->first('suspect') }}</span>
			</div>

			<div class="form-group {{ $errors->has('mobile') ? 'has-error' : '' }}">
				<label>Mobile Number</label>
				<input type="text"  pattern="[0-9]{10,10}" class="form-control" id="mobile" name="mobile" placeholder="Enter 10 digit no.">
				<span class="text-danger">{{ $errors->first('mobile') }}</span>
			</div>
			
			<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
				<label>Address</label>
				<textarea class="form-control" rows="3" id="address" name="address" placeholder="Enter address Here"></textarea> 
				<span class="text-danger">{{ $errors->first('address') }}</span>
			</div>

			<div class="form-group {{ $errors->has('relation') ? 'has-error' : '' }}">
				<label>Relation</label>
				<input type="text" class="form-control" id="relation" name="relation" placeholder="Enter Relation">
				<span class="text-danger">{{ $errors->first('relation') }}</span>
			</div>
			
			<div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
				<label>Note</label>
				<textarea class="form-control" rows="3" placeholder="Enter notes Here" name="note"></textarea> 
				<span class="text-danger">{{ $errors->first('note') }}</span>
			</div>

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

		    <div class="form-group {{ $errors->has('upload_file') ? 'has-error' : '' }}">
				<label> Select File for Upload </label>
     				<input type="file" name="upload_file" onchange="readURL(this);" /><br><br>
				<span class="text-danger">{{ $errors->first('upload_file') }}</span>
			</div>

			<div class="form-group text-center">
				<img id="imgPreview" src="#" alt="" class="" />
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
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

		</form>
	</div>
</div>

@endsection