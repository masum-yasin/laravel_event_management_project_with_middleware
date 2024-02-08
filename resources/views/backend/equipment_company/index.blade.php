@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            <a href="{{route('company.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Equipment Company</a>
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
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						
						
					</div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#ID</th>
								<th scope="col">Company Name</th>
								<th scope="col">Logo</th>
								<th scope="col">Email</th>
								<th scope="col">Company Address</th>
								<th scope="col">Description</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($equipments as $key=>$equipment)
								<tr>
								<th scope="row">{{++$key}}</th>
							    <td>{{$equipment->company_name}}</td>
								<td><img src="{{asset('uploads/'.$equipment->logo)}}" alt="Image" width="50px" height="50px"></td>
								<td>{{$equipment->email}}</td>
								<td>{{$equipment->address}}</td>
								<td>{{$equipment->descripation }}</td>
							
                               
								
								<td class="d-flex justify-content-around">
							    <a href="{{route('company.edit',$equipment->id)}}" class="btn btn-sm btn-info">Edit</a>
								<a href="{{route('company.show',$equipment->id)}}" class="btn btn-sm btn-info">Show</a>

                               <form action="{{route('company.destroy',$equipment->id)}}" method="post">
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