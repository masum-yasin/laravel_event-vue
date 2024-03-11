@extends('backend.layouts.app')
@section('content')
    

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                           
							<div class="title">
								<h4>Equipment Company List</h4>
							</div>
							</div>

						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- Striped table start -->
                @if (session('msg'))
                    <div class="div-alert-success">
                            {{session('msg')}}
                    </div>
                @endif
				<div class="card-box mb-30 text-center">
					<ul class="card-body">
                        <li class="list-item">Company Email:{{$servicelists->email}}</li>
                        <li class="list-item">Company Address:{{$servicelists->address}}</li>
                        {{-- <li class="list-item">Company Service List:{{$servelist->service_list}}</li>
                        <li class="list-item">Company Service List:{{$servelist->service_list}}</li>
                        <li class="list-item">Company Service List:{{$servelist->service_list}}</li>
                        <li class="list-item">Company Service List:{{$servelist->service_list}}</li> --}}
                       
                    </ul>
					</div>
			</div>
		
		</div>
	</div>
@endsection