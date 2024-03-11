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
					<form method="post" action="{{route('employeelist.update',$employee->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                       <div class="form-group row">

							<label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
							<div class="col-sm-12 col-md-10">
								<select name="category" id="" class="form control">
									
									@foreach ($categories as $item)
									<option value="{{$item->id}}" @if($item->id==$employee->categories_id) selected
                                    @endif>{{$item->name}}</option>
									@endforeach
								</select>
							</div>
                            <select name="class"  class="form-control">
                            
                                @foreach ($classes as $class)
                                  <option value="{{$class->id}}" @if ($class->id==$student->class_id) selected
                                      
                                    @endif>{{$class->name}}</option>
                                @endforeach
                        </select>
						</div>
						<div class="form-group row">
							@csrf
							<label class="col-sm-12 col-md-2 col-form-label">Employee Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-controlr" type="text" placeholder="Enter Employee Name" name="emply_name" required value="{{$employee->emply_name}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Employee Phone</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" placeholder="Employee Number" name="phone" value="{{$employee->phone}}" required>
							</div>
						</div>
						
					
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Price</label>
							<div class="col-sm-12 col-md-10 ">
								<input class="form-control  " type="email" placeholder="Employee Email" name="email" required value="{{$employee->email}}">
							</div>
						</div>
						
                       
                        <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Working Location</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Employee Working Location" name="working_location" required value="{{$employee->working_location}}">
							</div>
						</div>
						
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Joining Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" placeholder="Joining Date" name="joindate" required value="{{$employee->joining_date}}">
							</div>
						</div>
						
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Regained  Date</label>
							<div class="col-sm-12 col-md-10 ">
								<input class="form-control" type="date" placeholder="Regained Date" name="regaindate" required value="{{$employee->regained_date}}">
							</div>
						</div>
						
                       
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<button type="submit" class="form-control">UPDATE</button>
							</div>
						</div>
					</form>
					
					</div>
				</div>
		

			</div>
		
		</div>

@endsection