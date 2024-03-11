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
						
						
					</div>
                    <a href="{{route('schedule.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Event Schedule</a>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Event Category</th>
								<th scope="col">Day Number</th>
								<th scope="col">Start Time</th>
								<th scope="col">Ending Time</th>
								<th scope="col">speaker name</th>
								<th scope="col">Title</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($schedules as $schedule)
							<tr>
                                <th scope="row">{{$schedule['id']}}</th>
                                <td>{{$schedule->category->name}}</td>
								<td>{{$schedule['day_number']}}</td>
								<td>{{$schedule['start_time']}}</td>
								<td>{{$schedule['ending_time']}}</td>
								<td>{{$schedule->speaker->speaker_name}}</td>
								<td>{{$schedule['title']}}</td>
						
							
								<td class="d-flex justify-content-around">
                                    <a href="{{route('schedule.edit',$schedule->id)}}" class="btn btn-sm btn-info">Edit</a>
                                   <form action="{{route('schedule.destroy',$schedule->id)}}" method="post">
                                        @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                </form>
                                    </td>
							</tr>
							@empty
							<h2 class="bg-success p-2 text-white">No Data Found</h2>@endforelse
							
						</tbody>
					</table>
					
				</div>
			</div>
		
		</div>
	</div>
@endsection