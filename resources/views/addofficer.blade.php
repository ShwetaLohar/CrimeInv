@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<form class="container bg-white p-4 card align-self-center" style="width: 400px">
			
			<h1 class="text-center">Add Officer</h1>

			<div class="form-group">
				<label>Officer ID</label>
				<input type="text" class="form-control" name="officer_id" placeholder="Enter Officer Id">
			</div>
			<div class="form-group">
				<label>Officer Name</label>
				<input type="text" class="form-control" name="officername" placeholder="Enter Officer Name">
			</div>
			<!-- <div class="form-group">
				<label>Area</label>
				<input type="text" class="form-control" name="area" placeholder="Area">
			</div> -->
			<div class="form-group">
				<label>Address</label>
				<!-- /<input type="textarea" class="form-control" name="note" placeholder="Enter Note">  -->
				<textarea class="form-control" rows="3" placeholder="Enter address Here"></textarea> 
			</div>
			<div class="form-group">
				<label>Mobile Number</label>
				<input type="text" class="form-control" name="number" placeholder="Enter 10 digit no.">
			</div>
			<div class="form-group">
				<label>Email-Id</label>
				<input type="text" class="form-control" name="email" placeholder="Enter Email">
			</div>
			<div class="form-group">
				<label>Select an Image File</label>
				<input type="file" name="myFile">
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
			</div>
		</form>
	</div>


@endsection

 