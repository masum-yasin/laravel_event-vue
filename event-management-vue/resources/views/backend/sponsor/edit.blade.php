@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('blogpost.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Sponsor List</a>
						<div class="pull-left">
							<h4 class="text-blue h4">NEW Event Sponsor From</h4>
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
                    @if (session('msg'))
                    <div class="alert alert-success">
                        {{session('msg')}}
                    </div>                        
                    @endif
					<form method="post" action="{{route('sponsor.update',$sponsors->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
						<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Company Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter company Name" name="company_name" value="{{old('company_name',$sponsors->company_name)}}">
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Company Logo</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="file" placeholder="Enter Company Logo" name="logo">
                                </div>
                            </div>
                            <div> 
                                <img src="{{asset('uploads/'.$sponsors->logo)}}" alt="" style="width:50px; height:50px">
                            </div>
                          
                            {{-- Category Section --}}
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
                                <div class="col-sm-12 col-md-10">
                                    <select name="category" id="" class="form control">
                                        
                                        @foreach ($category as $item)
                                            <option value="{{$item->id}}" @selected(old('category', $sponsors->category_id == $item->id)) >{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           <div class="row mb-3">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea name="desc" id="" cols="90" rows="5" class="form-control">{{old('desc',$sponsors->description)}}</textarea>
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Event Location</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Enter Company Location" name="location" value="{{old('location',$sponsors->company_location)}}">
                                </div>
                            </div>
						

						
						<div class="row mb-3 w-50">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<button type="submit" class="form-control ml-5" >UPDATE</button>
							</div>
						</div>
					</form>
					
					</div>
				</div>
		

			</div>
		
		</div>

@endsection