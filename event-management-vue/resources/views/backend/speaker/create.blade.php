@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('eventspeaker.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Event Venu</a>
						<div class="pull-left">
							<h4 class="text-blue h4">New Speaker Forms</h4>
					</div>
					</div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
					<form method="post" action="{{route('eventspeaker.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="category" id="" class="form control">
                                    
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Speaker Name</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Enter Event Speaker" name="speaker" value="{{old('speaker')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Image</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="file" placeholder="Enter Event image" name="image">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="number" placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Speaker Email</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="email" placeholder="Enter Speaker Email" name="email" value="{{old('email')}}">
                                        </div>
                                    </div>
                      
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Speaker Facebook</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="email" placeholder="Facebook" name="facebook" value="{{old('facebook')}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Speaker Twitter</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="email" placeholder="Enter Twitter" name="twitter" value="{{old('twitter')}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Speaker Title</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Speaker Title" name="title" value="{{old('title')}}">
                                            </div>
                                        </div>
					<div class="row mb-3 w-50">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<button type="submit" style=margin-left:90px class="form-control">Submit</button>
							</div>
						</div>
					</form>
					
					</div>
				</div>
		

			</div>
		
		</div>

@endsection