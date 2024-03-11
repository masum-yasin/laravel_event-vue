@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('servicelist.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">ALL Service List</a>
						<div class="pull-left">
							<h4 class="text-blue h4">Event Service From</h4>
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
					<form method="post" action="{{route('servicelist.update',$servicelists->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
						<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Company Logo</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="file" placeholder="Enter company Name" name="logo" value="{{old('logo',)}}">
							</div>
						</div>
                        <div>
                            <img src="{{asset('uploads/'.$servicelists->logo)}}" alt="" style="width: 50px; height:50px">
                        </div>
                       
                            {{-- Category Section --}}
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Category</label>
                                <div class="col-sm-12 col-md-10">
                                    <select name="category" id="" class="form control">
                                        
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}" @selected(old('category',  $servicelists->category_id == $item->id))>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- service Section --}}
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Event Service List</label>
                                <div class="col-sm-12 col-md-10">
                                    <select name="company_list" id="" class="form control">
                                        
                                        @foreach ($equipments as $item)
                                            <option value="{{$item->id}}" @selected(old('company_list', $servicelists->equipment_companies_id==$item->id))>{{$item->service_list}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Company Phone</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="number" placeholder="Enter company Phone" name="phone" value="{{old('phone',$servicelists->phone)}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Company Email</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="email" placeholder="Enter company Email" name="email" value="{{old('email',$servicelists->email)}}">
                                        </div>
                                    </div>
                           <div class="row mb-3">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<textarea name="desc" id="" cols="90" rows="5" class="form-control">{{old('desc',$servicelists->descripation)}}</textarea>
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Company Address</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Enter Company Address" name="address" value="{{old('address',$servicelists->address)}}">
                                </div>
                            </div>
					        <div class="row mb-3 w-50">
							<label class="col-sm-12 col-md-2 col-form-label"></label>
							<div class="col-sm-12 col-md-10">
								<button type="submit" class="form-control" style="margin-left:90px">Submit</button>
							</div>
						</div>
					</form>
					
					</div>
				</div>
		

			</div>
		
		</div>

@endsection