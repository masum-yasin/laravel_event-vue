@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Categories List</h4>
							</div>
							<a href="{{route('category.create')}}" class="btn btn-sm btn-info mb-3" style="float: right">Add Category List</a>
							
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
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						
						
					</div>
					@if (session('msg'))
					<div class="alert alert-danger">
						{{session('msg')}}
					</div>
						
					@endif
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Phone</th>
								<th scope="col">Address</th>
								<th scope="col">Subject</th>
								<th scope="col">Action</th>
							
							</tr>
						</thead>
						<tbody>
							@foreach ($contact as $item)
								
						
							<tr>
								<th scope="row">{{$item['id']}}</th>
								<td>{{$item['name']}}</td>
								<td>{{$item['email']}}</td>
								<td>{{$item['phone']}}</td>
								<td>{{$item['address']}}</td>
								<td>{{$item['subject']}}</td>
								<td>
									<form action="{{route('contact.destroy',$item->id)}}" method="post">
										@csrf
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-sm btn-danger">DELETE</button>
									</form>
									</td>
								
								
							</tr>
							@endforeach
							
							
							
							
						</tbody>
					</table>
					
				</div>
			</div>
		
		</div>
	</div>
@endsection