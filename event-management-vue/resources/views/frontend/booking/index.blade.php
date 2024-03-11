@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="">
			<div class="">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            
							<div class="title">
								<h4>Booking List</h4>
							</div>
							
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2024
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
					<div class="clearfix ">
						
						
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Customer Name</th>
								<th scope="col">Email</th>
								<th scope="col">Phone</th>
								{{-- <th scope="col">Event Catalog</th> --}}
								<th scope="col">Event Category</th>
								<th scope="col">Description</th>
								<th scope="col">Price</th>
								<th scope="col">payment Method</th>
								<th scope="col">Transcation ID</th>
								<th scope="col">Status</th>
								<th scope="col">Member</th>
								<th scope="col">Address</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($bookings as $key=>$item)
							<tr>
								<th scope="row">{{++$key}}</th>
								<td>{{$item->customer_name}}</td>
								<td>{{$item->email}}</td>
								<td>{{$item->phone_number}}</td>
								{{-- <td><img src="{{asset('uploads/'.$item->event_catalog)}}" alt="Image" width="50px" height="50px"></td> --}}
								<td>{{$item->event_category}}</td>
								<td>{{$item->description }}</td>
								<td>{{$item->booking_price }}</td>
								<td>{{$item->payment_method }}</td>
								<td>{{$item->t_id }}</td>
							
							    <td>{{$item->status}}</td>
								<td>{{$item->member }}</td>
                                <td>{{$item->address }}</td>
                               
								
								<td class="" style="display:flex; gap:10px">
									<div>
										<form action="{{route('booking.status',$item->id)}}" method="post">
											@csrf
											<select name="status" id="">
												<option value="" disabled>Select One</option>
												<option value="0">Cancle</option>
												<option value="1">confirm</option>
												<option value="2">panding</option>
											</select>
											<button type="submit">Change</button>
										</form>
									</div>
									<div class="mb-10">
										<a href="{{route('frontend.booking',$item->id)}}" class="btn btn-sm btn-dark" style="margin-left:10px;"> Delete</a>
										<a href="{{route('invoiceperid',$item->id)}}" target="_blank" class="btn btn-sm btn-dark" style="margin-left:10px;"> Invoice</a>
									</div>
								</td>
                                
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