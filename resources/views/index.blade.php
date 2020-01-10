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

		<!-- <form method="POST" action="/Opening/job" autocomplete="off">
                                    <input type="hidden" name="_token" value="{{csrf_token() }}">
                                    <div class="rows">
                                        <div class="col-lg-12 no-padd">
                                            <div class="form-group {{ $errors->has('UserName') ? 'has-error' : '' }}">
                                                <input type="text" id="UserName" name="UserName" class="form-control" value="{{ old('UserName') }}" placeholder="Enter Name" required>
                                                <span class="text-danger">{{ $errors->first('UserName') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-padd">
                                            <div class="form-group {{ $errors->has('Emailid') ? 'has-error' : '' }}">
                                                <input type="email" id="Emailid" name="Emailid" class="form-control" value="{{ old('Emailid') }}" placeholder="Enter Email Id" required>
                                                <span class="text-danger">{{ $errors->first('Emailid') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-padd">
                                            <div class="form-group {{ $errors->has('Contact') ? 'has-error' : '' }}">
                                                <input type="text" id="Contact" name="Contact" class="form-control" value="{{ old('Contact') }}" placeholder="Enter Contact Number" required>
                                                <span class="text-danger">{{ $errors->first('Contact') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 no-padd">
                                            <div class="form-group {{ $errors->has('uploadcv') ? 'has-error' : '' }}">
                                                <input type="file" id="uploadcv" name="uploadcv" class="form-control" value="{{ old('uploadcv') }}" placeholder="Upload Document" required>
                                                <span class="text-danger">{{ $errors->first('uploadcv') }}</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 no-padd">
                                            <div class="form-group">
                                                <button class="update-button">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form> -->
	</div>


@endsection

 