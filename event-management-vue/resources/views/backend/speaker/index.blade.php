@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div>
			<div>
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            <a href="{{route('eventspeaker.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Event Venu</a>
							<div class="title">
								<h4>Event Venu List</h4>
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
				<div class="card-box">
					<div>
						
						
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Event Category</th>
								<th scope="col">Speaker image</th>
								<th scope="col">Speaker Name</th>
								<th scope="col">Email</th>
								<th scope="col">Phone Number</th>
								<th scope="col">Speaker Title</th>
							    <th scope="col">Facebook</th>
							    <th scope="col">Twitter</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($speakers as $key=>$speaker)
								<tr>
								<th scope="row">{{++$key}}</th>
								<td>{{$speaker->category->name}}</td>
								<td><img src="{{asset('uploads/'.$speaker->image)}}" alt="Image" width="70px" height="70px"></td>
								<td>{{$speaker->speaker_name}}</td>
								<td>{{$speaker->email}}</td>
							    <td>{{$speaker->phone}}</td>
							    <td>{{$speaker->title}}</td>
							   <td>{{$speaker->facebook}}</td>
							   <td>{{$speaker->twitter}}</td>
                               
								
								<td class="d-flex justify-content-around">
							    <a href="{{route('eventspeaker.edit',$speaker->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{route('eventspeaker.destroy',$speaker->id)}}" method="post">
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
