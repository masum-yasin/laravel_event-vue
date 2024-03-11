@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>All Employee List</h4>
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
			
			
				
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
					    <ul class="card-body text-center">
                            <li class="list-item">Employee Name:{{$employee->emply_name}}</li>
                            <li class="list-item">Phone Number:{{$employee->phone}}</li>
                            <li class="list-item">Email:{{$employee->email}}</li>
                            <li class="list-item">working location:{{$employee->working_location}}</li>
                            <li class="list-item">joining date:{{$employee->joining_date}}</li>
                            <li class="list-item">Regained date:{{$employee->regained_date}}</li>
                          
                          
                            </ul>
					</div>
					
					
				</div>
			</div>
		
		</div>
	</div>
@endsection