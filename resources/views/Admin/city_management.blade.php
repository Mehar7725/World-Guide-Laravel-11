 
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>HUD | City Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- ================== BEGIN core-css ================== -->
    <link href="assets/admin/css/vendor.min.css" rel="stylesheet">
    <link href="assets/admin/css/app.min.css" rel="stylesheet">
    <!-- ================== END core-css ================== -->
     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    {{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- =======Toastr CDN ======== --}}
</head>
<body>


    @if (Session::has('error'))
    <script>
  
          toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
  
                    
    </script>
    @endif
    @if (Session::has('success'))
    <script>
  
          toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('success') }}");
  
                    
    </script>
    @endif
    @if (Session::has('info'))
    <script>
  
          toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
  
                    
    </script>
    @endif

    <div id="app" class="app">
        <!-- Include your header and sidebar here -->
        	<!-- BEGIN #header -->
		<x-admin-nav/>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<x-admin-sidebar/>
		<!-- END #sidebar -->
        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="mb-0">City Management</h3>
                    <a href="/city-management-add" class="btn btn-theme ms-auto" >   Add New City </a>
                    {{-- <button class="btn btn-theme ms-auto" data-bs-toggle="modal" data-bs-target="#addCountryModal">   Add New Country </button> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>City Name</th>
                                    <th>Country </th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($city)
                                    @foreach ($city as $item)
                                        
                                    <tr>

                                        <td>{{$item->id}}</td>
                                        <td>{{$item->city_name}}</td>
                                        @php
                                            $country = \App\Models\Country::where('id','=',$item->country)->first();
                                        @endphp
                                        <td>{{$country->country_name}}</td>
                                        <td>@if ($item->status == 1) Active @else  Inactive  @endif  </td>
                                        <td>
                                            <a  href="/edit-city-{{$item->id}}" class='btn btn-sm btn-primary me-1'  >Edit</a>
                                            <a href="/delete-city/{{$item->id}}" class='btn btn-sm btn-danger' >Delete</a>
                                          </td>
                                    </tr>

                                    @endforeach
                                @endif
                           
 
                               
                            </tbody>
                        </table>

                        
                    </div>
                    <div class="demo">
                    
                        @if ($city->hasPages())
        <nav class="pagination-outer" aria-label="Page navigation">
            <ul class="pagination" style="justify-content: center;"> 
                {{-- Previous Page Link --}}
                @if ($city->onFirstPage())
                <li class="page-item disabled"  aria-disabled="true" aria-label="@lang('pagination.previous')">
                  <span class="page-link" aria-hidden="true">«</span>
                  
              </li>
                    
                @else
                <li class="page-item">
                  <a   class="page-link" href="{{ $city->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                      <span aria-hidden="true">«</span>
                  </a>
              </li>
                    
                @endif
    
                {{-- Pagination Elements --}}
                @php
                    $start = max($city->currentPage() - 2, 1);
                    $end = min($city->currentPage() + 2, $city->lastPage());
                @endphp
    
                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $city->currentPage())
                    <li class="page-item active" aria-current="page"><a class="page-link" >{{ $i }}</a></li>
                      @else
                    <li class="page-item "><a class="page-link" href="{{ $city->url($i) }}">{{ $i }}</a></li>
                     @endif
                @endfor
    
                {{-- Next Page Link --}}
                @if ($city->hasMorePages())
                <li class="page-item">
                  <a class="page-link" href="{{ $city->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    »
                  </a>
              </li>
                    
                @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">»</span>
                   
              </li>
                  
                @endif
            </ul>
        </nav>
    @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- END #content -->
    </div>
    
    <!-- Add Country Modal -->
    <div class="modal fade" id="addCountryModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Country</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addCountryForm">
                        <div class="mb-3">
                            <label class="form-label">Country Name</label>
                            <input type="text" class="form-control" name="country_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country Code</label>
                            <input type="text" class="form-control" name="country_code" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-theme" onclick="saveCountry()">Save Country</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ================== BEGIN core-js ================== -->
    <script src="assets/admin/js/vendor.min.js"></script>
    <script src="assets/admin/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->
    
    <script>
    function saveCountry() {
        // Add your AJAX code here to save the country
    }
    
    function editCountry(id) {
        // Add your edit country code here
    }
    
    function deleteCountry(id) {
        // Add your delete country code here
    }
    </script>
</body>
</html>