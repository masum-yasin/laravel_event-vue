@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            <a href="{{route('eventtype.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Event Type</a>
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
								<th scope="col">Event Type</th>
								<th scope="col">Event Name</th>
								<th scope="col">Image</th>
								<th scope="col">Price</th>
								<th scope="col">Availibility</th>
								<th scope="col">Description</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($eventtypes as $key=>$item)
								
							
							<tr>
								<th scope="row">{{++$key}}</th>
								<td>{{$item->category->name}}</td>
								<td>{{$item->event_name}}</td>
								<td><img src="{{asset('uploads/'.$item->image)}}" alt="Image" width="50px" height="50px"></td>
								<td>{{$item->price}}</td>
								<td>{{$item->availibility }}</td>
							    <td>{{$item->description}}</td>
                               
								
								<td class="d-flex justify-content-around">
							    <a href="{{route('eventtype.edit',$item->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{route('eventtype.destroy',$item->id)}}" method="post">
                                 @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
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