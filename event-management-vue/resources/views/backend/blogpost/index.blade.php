@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            <a href="{{route('blogpost.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Blog Post</a>
							<div class="title">
								<h4>Categories List</h4>
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
                    <div class="alert alert-success">
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
								<th scope="col">Post Name</th>
								<th scope="col">Image</th>
								<th scope="col">Category Name</th>
								<th scope="col">Location</th>
								<th scope="col">Description</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($blogs as $key=>$blog)
								
							
							<tr>
								<th scope="row">{{++$key}}</th>
							    <td>{{$blog->post_name}}</td>
								<td><img src="{{asset('uploads/'.$blog->image)}}" alt="Image" width="50px" height="50px"></td>
								<td>{{$blog->category_id}}</td>
								<td>{{$blog->location }}</td>
							    <td>{{$blog->description}}</td>
                               
								
								<td class="d-flex justify-content-around">
							    <a href="{{route('blogpost.edit',$blog->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{route('blogpost.destroy',$blog->id)}}" method="post">
                                 @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-warning">Delete</button>
                                </form>
								</td>
							</tr>
							@empty
							<h2 class="bg-success text-white">No Data Found</h2>
							@endforelse
							
						</tbody>
					</table>
					
				</div>
			</div>
		
		</div>
	</div>
@endsection