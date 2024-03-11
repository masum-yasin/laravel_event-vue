@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<a href="{{route('employeelist.index')}}" class="btn btn-sm btn-success p-2" style="float:right">All Employee List</a>
				<div class="pd-20 card-box mb-30">
			
					<div class="clearfix">
						<div class="pull-left">
					<h4 class="text-blue h4">New Employee Forms</h4>
					</div>
					</div>
					@if (session('msg'))
					<div class="alert alert-danger">
						{{session('msg')}};
					</div>
						
					@endif
					<form method="post" action="{{route('employeelist.store')}}">
                       <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
							<div class="col-sm-12 col-md-10">
								<select name="category" id="" class="form control">
									
									@foreach ($categories as $item)
									<option value="{{$item->id}}">{{$item->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group row">
							@csrf
							<label class="col-sm-12 col-md-2 col-form-label">Employee Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control @error('emply_name') is-invalid @enderror" type="text" placeholder="Enter Employee Name" name="emply_name" required value="{{old('emply_name')}}">
							</div>
						</div>
												@error('emply_name')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Employee Phone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control  @error('phone') is-invalid @enderror" type="number" placeholder="Employee Number" name="phone" value="{{old('phone')}}" required>
							</div>
						</div>
						
						@error('phone')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Employee Event</label>
							<div class="col-sm-12 col-md-10 ">
								<input class="form-control  @error('email') is-invalid @enderror" type="email" placeholder="Employee Email" name="email" required value="{{old('email')}}">
							</div>
						</div>
						@error('email')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Working Location</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control  @error('email') is-invalid @enderror" type="text" placeholder="Employee Working Location" name="working_location" required value="{{old('working_location')}}">
							</div>
						</div>
						@error('working_location')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Joining Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control  @error('joindate') is-invalid @enderror" type="date" placeholder="Joining Date" name="joindate" required value="{{old('joindate')}}">
							</div>
						</div>
						@error('joindate')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Regained  Date</label>
							<div class="col-sm-12 col-md-10  @error('regaindate') is-invalid @enderror">
								<input class="form-control" type="date" placeholder="Regained Date" name="regaindate" required value="{{old('regaindate')}}">
							</div>
						</div>
						@error('regaindate')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<button type="submit" class="form-control">Submit</button>
							</div>
						</div>
					</form>
					
					</div>
				</div>
		

			</div>
		
		</div>

@endsection