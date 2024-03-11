@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>All Review List</h4>
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
								<th scope="col">Review Title</th>
								<th scope="col">Description</th>
								<th scope="col">Occupation</th>
								<th scope="col">Rating</th>
								<th scope="col">Status</th>
								</tr>
						</thead>
						<tbody>
							@forelse ($reviews as $key=>$review)
								<tr>
								<th scope="row">{{++$key}}</th>
							    <td>{{$review->review_title}}</td>
								<td>{{$review->descripation}}</td>
								<td>{{$review->occupation}}</td>
								<td>{{$review->rating}}</td>
								<td>{{$review->status}}</td>
							    <td class="d-flex justify-content-around">
									
											<form action="{{route('review.status',$review->id)}}" method="post" >
												@csrf
												<select name="status" id="" >
											<option  value="" disabled selected>Select One</option>
											<option value="0">Cancle</option>
											<option value="1">Confirm</option>
											</select><br>
											<button type="submit">Change</button>
									</form>
							    <form action="{{route('userreview.destroy',$review->id)}}" method="post">
                                 @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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