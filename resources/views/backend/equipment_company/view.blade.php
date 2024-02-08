@extends('backend.layouts.app')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
                            <a href="{{route('eventtype.create')}}" class="btn btn-sm btn-success mb-3" style="float: right">Add Sponsor</a>
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
					
					<ul class="card-body">
                        <li class="list-item">Company Name:</li>
                        <li class="list-item">Company Logo:</li>
                        <li class="list-item">Email:</li>
                        <li class="list-item">Address:</li>
                        <li class="list-item">Description:</li>
                    </ul>
					
				</div>
			</div>
		
		</div>
	</div>
@endsection