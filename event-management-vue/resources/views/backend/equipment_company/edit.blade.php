@extends('backend.layouts.app')
@section('content')
    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
                        <a href="{{route('company.index')}}" class="btn btn-sm btn-success mb-3" style="float: right">Equipment company List</a>
						<div class="pull-left">
							<h4 class="text-blue h4">NEW Event Equipment From</h4>
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
					<form method="post" action="{{route('company.update',$equipments->id)}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
						<div class="form-group row">
						<label class="col-sm-12 col-md-2 col-form-label">Company Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Enter company Name" name="company" value="{{old('company',$equipments->company_name)}}">
							</div>
						</div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Company Service List</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Service Company List" name="service_list" value="{{old('service_list',$equipments->service_list)}}">
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