<?php $page="salary";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Salary @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Salary @endslot
@endcomponent 	
				
	<div class="row">
		<div class="col-sm-12">
			
			<div class="card card-table">
				<div class="card-body">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Salary</h3>
							</div>
							<div class="col-auto text-end float-end ms-auto download-grp">
								<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
								<a href="{{url('add-salary')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="table-responsive">
						<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
							<thead class="student-thread">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Joining Date</th>
									<th>Amount</th>
									<th class="text-end">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>PRE2209</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image"></a>
											<a>Aaliyah</a>
										</h2>
									</td>
									<td>Female</td>													
									<td>17 Aug 2020</td>
									<td>$320</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE2213</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
											<a>Malynne</a>
										</h2>
									</td>
									<td>Female</td>													
									<td>05 Aug 2020</td>
									<td>$536</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE2143</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
											<a>Levell Scott</a>
										</h2>
									</td>
									<td>Male</td>													
									<td>04 Sept 2020</td>
									<td>$378</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE2431</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-04.jpg')}}" alt="User Image"></a>
											<a>Minnie</a>
										</h2>
									</td>
									<td>Female</td>													
									<td>17 Sept 2020</td>
									<td>$246</td>
									<td class="text-end">
										<span class="badge badge-danger">Unpaid</span>
									</td>
								</tr>
								<tr>
									<td>PRE1534</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
											<a>Lois A</a>
										</h2>
									</td>
									<td>Male</td>													
									<td>02 Oct 2020</td>
									<td>$560</td>
									<td class="text-end">
										<span class="badge badge-danger">Unpaid</span>
									</td>
								</tr>
								<tr>
									<td>PRE2153</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-06.jpg')}}" alt="User Image"></a>
											<a>Calvin</a>
										</h2>
									</td>
									<td>Male</td>													
									<td>28 Oct 2020</td>
									<td>$236</td>
									<td class="text-end">
										<span class="badge badge-danger">Unpaid</span>
									</td>
								</tr>
								<tr>
									<td>PRE1252</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-07.jpg')}}" alt="User Image"></a>
											<a>Joe Kelley</a>
										</h2>
									</td>
									<td>Female</td>													
									<td>17 Oct 2020</td>
									<td>$237</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE1434</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-08.jpg')}}"  alt="User Image"></a>
											<a>Vincent</a>
										</h2>
									</td>
									<td>Male</td>													
									<td>05 Nov 2020</td>
									<td>$567</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE2345</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}"  alt="User Image"></a>
											<a>Kozma  Tatari</a>
										</h2>
									</td>
									<td>Female</td>													
									<td>12 Nov 2020</td>
									<td>$564</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE2365</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
											<a>John Chambers</a>
										</h2>
									</td>
									<td>Male</td>													
									<td>15 Nov 2020</td>
									<td>$234</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
								<tr>
									<td>PRE1234</td>
									<td>
										<h2 class="table-avatar">
											<a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
											<a>Nathan Humphries</a>
										</h2>
									</td>
									<td>Male</td>													
									<td>17 Nov 2020</td>
									<td>$278</td>
									<td class="text-end">
										<span class="badge badge-success">Paid</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>							
		</div>					
	</div>					

@endsection