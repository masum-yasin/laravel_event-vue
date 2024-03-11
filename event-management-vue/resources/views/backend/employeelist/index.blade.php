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
			
			
				<!-- Striped table start -->
                @if (session('msg'))
                    <div class="div-alert-success">
                            {{session('msg')}}
                    </div>
                @endif
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						
						
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Employee Name</th>
								<th scope="col">Phone Number</th>
								<th scope="col">Email</th>
								<th scope="col">Working Location</th>
								<th scope="col">Event Category Name</th>
								<th scope="col">Joining Date</th>
								<th scope="col">Regained Date</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($employlist as $key =>$employee)
								
							
							<tr>
								<th scope="row">{{++$key}}</th>
							    <td>{{$employee->emply_name}}</td>
								<td>{{$employee->phone}}</td>
								<td>{{$employee->email}}</td>
							    <td>{{$employee->working_location}}</td>
                                <td>{{$employee->categories_id }}</td>
								<td>{{$employee->joining_date}}</td>
								<td>{{$employee->regained_date}}</td>
								<td class="d-flex justify-content-around">
							    <a href="{{route('employeelist.edit',$employee->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{route('employeelist.destroy',$employee->id)}}" method="post">
                                 @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
								<a href="{{route('employeelist.show',$employee->id)}}" class="btn btn-sm btn-success">View</a>
								</td>
							</tr>
							@empty
							<h2 class="bg-success p-2 text-white">No Data Found</h2>
							@endforelse
						
							
						</tbody>
					</table>
					
				</div>
			</div>
		
		</div>
	</div>
@endsection