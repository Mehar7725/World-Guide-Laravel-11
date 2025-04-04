 
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>World Admin | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="assets/admin/css/vendor.min.css" rel="stylesheet">
	<link href="assets/admin/css/app.min.css" rel="stylesheet">
	<!-- ================== END core-css ================== -->
	
	<!-- ================== BEGIN page-css ================== -->
	<link href="assets/admin/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet">
	<!-- ================== END page-css ================== -->
	
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- =======Toastr CDN ======== --}}

</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		<x-admin-nav/>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<x-admin-sidebar/>
		<!-- END #sidebar -->
			
		<!-- BEGIN mobile-sidebar-backdrop -->
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		<!-- END mobile-sidebar-backdrop -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">SITE VISITORS</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">4.2m</h3>
								</div>
								<div class="col-5">
									<div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-inverse text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% more than last week<br>
								<i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br>
								<i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
							</div>
							<!-- END stat-sm -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-3 -->
				
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">STORE SALES</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">$35.2K</h3>
								</div>
								<div class="col-5">
									<div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-inverse text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 20.4% more than last week<br>
								<i class="fa fa-shopping-bag fa-fw me-1"></i> 33.5% new orders<br>
								<i class="fa fa-dollar-sign fa-fw me-1"></i> 6.21% conversion rate
							</div>
							<!-- END stat-sm -->
						</div>
						<!-- END card-body --> 
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-3 -->
				
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">NEW MEMBERS</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">4,490</h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-inverse text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br>
								<i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br>
								<i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
							</div>
							<!-- END stat-sm -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-3 -->
				
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">BANDWIDTH</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">4.5TB</h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-inverse text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 5.3% more than last week<br>
								<i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br>
								<i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
							</div>
							<!-- END stat-sm -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-3 -->
				
				<!-- BEGIN col-6 -->
				<div class="col-xl-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">SERVER STATS</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN chart -->
							<div class="ratio ratio-21x9 mb-3">
								<div id="chart-server"></div>
							</div>
							<!-- END chart -->
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-6 -->
								<div class="col-lg-6 mb-3 mb-lg-0">
									<div class="d-flex align-items-center">
										<!-- BEGIN chart -->
										<div class="w-50px h-50px">
											<div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
										</div>
										<!-- END chart -->
										<!-- BEGIN info -->
										<div class="ps-3 flex-1">
											<div class="fs-10px fw-bold text-inverse text-opacity-50 mb-1">DISK USAGE</div>
											<div class="mb-2 fs-5 text-truncate">20.04 / 256 GB</div>
											<div class="progress h-3px bg-secondary-transparent-2 mb-1">
												<div class="progress-bar bg-theme" style="width: 20%"></div>
											</div>
											<div class="fs-11px text-inverse text-opacity-50 mb-2 text-truncate">
												Last updated 1 min ago
											</div>
											<div class="d-flex align-items-center small">
												<i class="bi bi-circle-fill fs-6px me-2 text-theme"></i> 
												<div class="flex-1">DISK C</div>
												<div>19.56GB</div> 
											</div>
											<div class="d-flex align-items-center small">
												<i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i> 
												<div class="flex-1">DISK D</div>
												<div>0.50GB</div> 
											</div>
										</div>
										<!-- END info -->
									</div>
								</div>
								<!-- END col-6 -->
								<!-- BEGIN col-6 -->
								<div class="col-lg-6">
									<div class="d-flex">
										<!-- BEGIN chart -->
										<div class="w-50px pt-3">
											<div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
										</div>
										<!-- END chart -->
										<!-- BEGIN info -->
										<div class="ps-3 flex-1">
											<div class="fs-10px fw-bold text-inverse text-opacity-50 mb-1">BANDWIDTH</div>
											<div class="mb-2 fs-5 text-truncate">83.76GB / 10TB</div>
											<div class="progress h-3px bg-secondary-transparent-2 mb-1">
												<div class="progress-bar bg-theme" style="width: 10%"></div>
											</div>
											<div class="fs-11px text-inverse text-opacity-50 mb-2 text-truncate">
												Last updated 1 min ago
											</div>
											<div class="d-flex align-items-center small">
												<i class="bi bi-circle-fill fs-6px me-2 text-theme"></i> 
												<div class="flex-1">HTTP</div>
												<div>35.47GB</div> 
											</div>
											<div class="d-flex align-items-center small">
												<i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i> 
												<div class="flex-1">FTP</div>
												<div>1.25GB</div> 
											</div>
										</div>
										<!-- END info -->
									</div>
								</div>
								<!-- END col-6 -->
							</div>
							<!-- END row -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-6 -->
				
				<!-- BEGIN col-6 -->
				<div class="col-xl-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">TRAFFIC ANALYTICS</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN map -->
							<div class="ratio ratio-21x9 mb-3">
								<div id="world-map" class="jvectormap-without-padding"></div>
							</div>
							<!-- END map -->
							<!-- BEGIN row -->
							<div class="row gx-4">
								<!-- BEGIN col-6 -->
								<div class="col-lg-6 mb-3 mb-lg-0">
									<table class="w-100 small mb-0 text-truncate text-inverse text-opacity-60">
										<thead>
											<tr class="text-inverse text-opacity-75">
												<th class="w-50">COUNTRY</th>
												<th class="w-25 text-end">VISITS</th>
												<th class="w-25 text-end">PCT%</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>FRANCE</td>
												<td class="text-end">13,849</td>
												<td class="text-end">40.79%</td>
											</tr>
											<tr>
												<td>SPAIN</td>
												<td class="text-end">3,216</td>
												<td class="text-end">9.79%</td>
											</tr>
											<tr class="text-theme fw-bold">
												<td>MEXICO</td>
												<td class="text-end">1,398</td>
												<td class="text-end">4.26%</td>
											</tr>
											<tr>
												<td>UNITED STATES</td>
												<td class="text-end">1,090</td>
												<td class="text-end">3.32%</td>
											</tr>
											<tr>
												<td>BELGIUM</td>
												<td class="text-end">1,045</td>
												<td class="text-end">3.18%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- END col-6 -->
								<!-- BEGIN col-6 -->
								<div class="col-lg-6">
									<!-- BEGIN card -->
									<div class="card">
										<!-- BEGIN card-body -->
										<div class="card-body py-2">
											<div class="d-flex align-items-center">
												<div class="w-70px">
													<div data-render="apexchart" data-type="donut" data-height="70"></div>
												</div>
												<div class="flex-1 ps-2">
													<table class="w-100 small mb-0 text-inverse text-opacity-60">
														<tbody>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-95"></div> FEED
																	</div>
																</td>
																<td class="text-end">25.70%</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-75"></div> ORGANIC
																	</div>
																</td>
																<td class="text-end">24.30%</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-55"></div> REFERRAL
																	</div>
																</td>
																<td class="text-end">23.05%</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-35"></div> DIRECT
																	</div>
																</td>
																<td class="text-end">14.85%</td>
															</tr>
															<tr>
																<td>
																	<div class="d-flex align-items-center">
																		<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-15"></div> EMAIL
																	</div>
																</td>
																<td class="text-end">7.35%</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!-- END card-body -->
										
										<!-- BEGIN card-arrow -->
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
										<!-- END card-arrow -->
									</div>
									<!-- END card -->
								</div>
								<!-- END col-6 -->
							</div>
							<!-- END row -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-6 -->
				
				<!-- BEGIN col-6 -->
				<div class="col-xl-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Adds </span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="table-responsive">
								<table class="w-100 mb-0 small align-middle text-nowrap">
									<tbody>
											@php $i = 1;@endphp
											@if ($adds)
											@foreach ($adds as $item)

											
										<tr>
											<td>
												<div class="d-flex">
													<div class="position-relative mb-2">
														<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/adds/data_{{$item->user_id}}/{{$item->image}});">
														</div>
														<div class="position-absolute top-0 start-0">
															<span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">{{$i}}</span>
														</div>
													</div>
													<div class="flex-1 ps-3">
														<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge   text-inverse text-opacity-75 pt-5px"></small></div>
														  <div class="fw-500 text-inverse">{{$item->title}}</div>
														 
													</div>
												</div>
											</td>
											<td><small>{{$item->price}}</small></td>
											<td><small>{{$item->time}}</small></td>

												<td>
													@if ($item->status == 0)
													<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">Pending</span>
														@elseif($item->status == 1)
														<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">Active</span>
														@elseif($item->status == 2)
														<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">Disabled</span>
														
														@else
														<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">Duration Completed</span>
														@endif
												</td>
												 
											</td>


											<td> <div class="float-end expert-dropdown">
												<button class="btn action-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">...</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
													<a class="dropdown-item" href="{{ url('add-action/'.$item->id.'/edit') }}"><li>Edit Add</li></a>
													@if ($item->status == 1)
													<a class="dropdown-item" href="{{ url('add-action/'.$item->id.'/disable') }}"><li>Disable Add</li></a>
													 @else
													<a class="dropdown-item" href="{{ url('add-action/'.$item->id.'/active') }}"><li>Active Add</li></a> 
													  @endif
												  <a class="dropdown-item" href="{{ url('add-action/'.$item->id.'/delete') }}"><li>Delete Add</li></a>
												</ul>
											  </div>
											</td>
										
										</tr>

												@php $i++ @endphp
											@endforeach
												
											@endif







										
										{{-- <tr>
											<td>
												<div class="d-flex mb-2 align-items-center">
													<div class="position-relative">
														<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/admin/img/dashboard/product-2.jpeg);">
														</div>
														<div class="position-absolute top-0 start-0">
															<span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">2</span>
														</div>
													</div>
													<div class="flex-1 ps-3">
														<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU85999</small></div>
														<div class="text-inverse fw-500">Nike Shoes Black Version</div>
														$99.00
													</div>
												</div>
											</td>
											<td>
												<table class="mb-2">
													<tr>
														<td class="pe-3">QTY:</td>
														<td class="text-inverse text-opacity-75 fw-500">108</td>
													</tr>
													<tr>
														<td class="pe-3">REVENUE:</td>
														<td class="text-inverse text-opacity-75 fw-500">$10,692</td>
													</tr>
													<tr>
														<td class="pe-3 text-nowrap">PROFIT:</td>
														<td class="text-inverse text-opacity-75 fw-500">$5,346</td>
													</tr>
												</table>
											</td>
											<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
										</tr> --}}
										 
									</tbody>
								</table>



								
  <!-- CARD SECTION END HERE -->
<div class="demo" id="pagination_main" style="display: flex;justify-content: center;">
	@if ($adds->hasPages())
	<nav class="pagination-outer" aria-label="Page navigation">
	  <ul class="pagination">
		  {{-- Previous Page Link --}}
		  @if ($adds->onFirstPage())
			  <li class="page-item disabled" aria-disabled="true">
				  <span class="page-link">«</span>
			  </li>
		  @else
			  <li class="page-item">
				  <a class="page-link" href="{{ $adds->previousPageUrl() }}" rel="prev">«</a>
			  </li>
		  @endif
  
		  {{-- Pagination Elements --}}
		  @php
			  $start = max($adds->currentPage() - 2, 1);
			  $end = min($adds->currentPage() + 2, $adds->lastPage());
		  @endphp
  
		  @for ($i = $start; $i <= $end; $i++)
			  @if ($i == $adds->currentPage())
				  <li class="page-item active"><a class="page-link">{{ $i }}</a></li>
			  @else
				  <li class="page-item">
					  <a class="page-link" href="{{ $adds->url($i) }}">{{ $i }}</a>
				  </li>
			  @endif
		  @endfor
  
		  {{-- Next Page Link --}}
		  @if ($adds->hasMorePages())
			  <li class="page-item">
				  <a class="page-link" href="{{ $adds->nextPageUrl() }}" rel="next">»</a>
			  </li>
		  @else
			  <li class="page-item disabled">
				  <span class="page-link">»</span>
			  </li>
		  @endif
	  </ul>
  </nav>
	@endif
  </div>







							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-6 -->
				
				<!-- BEGIN col-6 -->
				<div class="col-xl-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">ACTIVITY LOG</span>
								<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN table -->
							<div class="table-responsive">
								<table class="table table-striped table-borderless mb-2px small text-nowrap">
									<tbody>
										@if ($user)
										@foreach ($user as $item)
										<tr>
											<td>
												<span class="d-flex align-items-center">
													<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
													{{$item->email}}
												</span>
											</td>
											<td><small>{{$item->name}}</small></td>
											<td>
												@if ($item->status == 0)
												<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">Active</span>
													@else
													<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">Blocked</span>
											@endif
											</td>
											<td> <div class="float-end expert-dropdown">
												<button class="btn action-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">...</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
													@if ($item->status == 0)
													<a class="dropdown-item" href="{{ url('user-action/'.$item->id.'/block') }}"><li>Block User</li></a>
													 @else
													<a class="dropdown-item" href="{{ url('user-action/'.$item->id.'/active') }}"><li>Active User</li></a> 
													 @endif
												  <a class="dropdown-item" href="{{ url('user-action/'.$item->id.'/delete') }}"><li>Delete User</li></a>
												</ul>
											  </div>
											</td>
										 </tr>
										@endforeach
											
										@endif
										
										 
										{{-- <tr>
											<td>
												<span class="d-flex align-items-center">
													<i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
													Push notification v2.0 installation
												</span>
											</td>
											<td><small>1 mins ago</small></td>
											<td>
												<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ANDROID</span>
											</td>
											<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
										</tr> --}}
    
									</tbody>
								</table>
							</div>
							<!-- END table -->
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-6 -->
			</div>
			<!-- END row -->
		</div>
		<!-- END #content -->
		
		<!-- BEGIN theme-panel -->
		
		<!-- END theme-panel -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/admin/js/vendor.min.js"></script>
	<script src="assets/admin/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="assets/admin/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="assets/admin/plugins/jvectormap-content/world-mill.js"></script>
	<script src="assets/admin/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="assets/admin/js/demo/dashboard.demo.js"></script>
	<!-- ================== END page-js ================== -->
	
</body>
</html>