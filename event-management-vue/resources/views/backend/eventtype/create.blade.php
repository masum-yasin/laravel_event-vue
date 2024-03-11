@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('eventtype.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Event Type</a>
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
					<form method="post" action="{{route('eventtype.store')}}" enctype="multipart/form-data">
                        @csrf
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
                            <label class="col-sm-12 col-md-2 col-form-label">Event Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="file" placeholder="Enter Event image" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Name</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" placeholder="Enter Event Name" name="event_name" value="{{old('event_name')}}">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="text" placeholder="Enter Event Price" name="price" value="{{old('price')}}">
                                    </div>
                                </div>
                      
						<div class="row mb-3">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea name="description" id="" cols="90" rows="5" class="form-control" {{old('description')}}></textarea>
							</div>
						</div>
						

						<div class="mb-3 row p-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="availibility" id="gridRadios1" value="1" {{old('availibility')==1 ? 'checked':''}}>
                                <label class="form-check-label" for="gridRadios1">
                                  Available
                                </label>
                              </div>
                              <div class="form-check mr-5 ml-5">
                                <input class="form-check-input" type="radio" name="availibility" id="gridRadios2" value="2" {{old('availibility')==2 ?'checked':''}}>
                                <label class="form-check-label" for="gridRadios2">
                                  Not Available
                                </label>
						    </div>
                            
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="availibility" id="gridRadios2"  value="3" {{old('availibility')==3 ?'checked':''}}>
                            <label class="form-check-label" for="gridRadios2">
                              Comming Soon
                            </label>
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