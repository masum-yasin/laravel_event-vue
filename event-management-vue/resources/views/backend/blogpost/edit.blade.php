@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('blogpost.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Event Post</a>
						<div class="pull-left">
							<h4 class="text-blue h4">NEW Event Post</h4>
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
					<form method="post" enctype="multipart/form-data" action="{{route('blogpost.update',$blogs->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
						<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Post Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter Event Post Name" name="post_name" value="{{old('post_name',$blogs->post_name)}}">
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Event Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="file" placeholder="Enter Event image" name="image">
                                </div>
                            </div>
                            <div>
                                <img src="{{asset('uploads', $blogs->image)}}" alt="image" style="width:50px; height:50px">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
                                <div class="col-sm-12 col-md-10">
                                    <select name="category" id="" class="form control">
                                        
                                        @foreach ($categorys as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Location</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" placeholder="Enter Event Location" name="location" value="{{old('location',$blogs->location)}}">
                                    </div>
                                </div>
                      
						<div class="row mb-3">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea name="description" id="" cols="90" rows="5" class="form-control">{{$blogs->description ? $blogs->description:old('description')}}</textarea>
							</div>
						</div>
						

						
						<div class="row mb-3 w-50">
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