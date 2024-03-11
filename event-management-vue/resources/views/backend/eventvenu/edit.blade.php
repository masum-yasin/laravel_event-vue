@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('eventvenues.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Event Venu</a>
						<div class="pull-left">
							<h4 class="text-blue h4">New Event  Forms</h4>
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
					<form method="post" action="{{route('eventvenues.update',$eventvenus->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="category" id="" class="form control">
                                    
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}"@if($item->id==$eventvenus->category_id) selected
                                            @endif >{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Event Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="file" placeholder="Enter Event image" name="image">
                                </div>
                            </div>
                            <div class="ml-5">
                                <img src="{{asset('uploads/'.$eventvenus->image)}}" alt="" style="width: 50px; height:50px">
                    
                              </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Address</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" placeholder="Enter Event Address" name="address" value="{{old('address',  $eventvenus->event_address)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Event Latitude</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="text" placeholder="Enter Event Latitude" name="latitude" value="{{old('latitude',$eventvenus->latitude)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">Event Longitude</label>
                                            <div class="col-sm-12 col-md-10">
                                                <input class="form-control" type="text" placeholder="Enter Event Longitude" name="longitude" value="{{old('longitude',$eventvenus->longitude)}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-md-2 col-form-label">Sponsor Company Name</label>
                                        <div class="col-sm-12 col-md-10">
                                            <select name="name" id="" class="form control">
                                                
                                                @foreach ($sponsers as $sponsor)
                                                    <option value="{{$sponsor->id}}" @if($item->id==$eventvenus->sponsors_id) selected
                                                        @endif>{{$sponsor->company_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="row mb-3">
                                    <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                                    <div class="col-sm-12 col-md-10">
                                        <textarea name="description" id="" cols="90" rows="5" class="form-control" {{('description')}}></textarea>
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