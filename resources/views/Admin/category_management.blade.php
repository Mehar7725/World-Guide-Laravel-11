 
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>HUD | Category Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Category Management System">
    <meta name="author" content="">
     
    <!-- BEGIN core-css -->
    <link href="assets/admin/css/vendor.min.css" rel="stylesheet">
    <link href="assets/admin/css/app.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- END core-css -->
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
  {{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- =======Toastr CDN ======== --}}
    <style>
        .table th {
            cursor: pointer;
            position: relative;
        }
        
        .table th:hover {
            background-color: rgba(0,0,0,0.05);
        }
        
        .btn-theme {
            background: linear-gradient(45deg, #2196F3, #00BCD4);
            border: none;
            color: white;
        }
        
        .btn-theme:hover {
            background: linear-gradient(45deg, #1976D2, #0097A7);
            color: white;
        }
        
        .modal-content {
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .toast {
            opacity: 0.9;
        }

        #loadingSpinner {
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            width: 100%;
            height: 100%;
        }

        .category-badge {
            font-size: 0.8em;
            padding: 0.4em 0.8em;
            border-radius: 20px;
        }

        .status-active {
            background-color: #28a745;
            color: white;
        }

        .status-inactive {
            background-color: #dc3545;
            color: white;
        }

        .required:after {
            content: " *";
            color: red;
        }

        .form-label {
            font-weight: 500;
        }

        #categoryImagePreview {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            max-height: 150px;
            width: auto;
        }

        .modal-header {
            border-bottom: 2px solid #0056b3;
        }

        .modal-footer {
            border-top: 1px solid #dee2e6;
        }

        .image-preview-container {
            text-align: center;
            margin-bottom: 1rem;
        }

        .drag-drop-zone {
            border: 2px dashed #ccc;
            border-radius: 4px;
            padding: 20px;
            text-align: center;
            background: rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }

        .drag-drop-zone.dragover {
            background: rgba(33,150,243,0.1);
            border-color: #2196F3;
        }

        .category-tree-item {
            padding: 5px 10px;
            margin: 2px 0;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .category-tree-item:hover {
            background: rgba(0,0,0,0.05);
        }

        .modal-xl {
            max-width: 1140px;
        }
    </style>
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
                    <div>
                        <h3 class="mb-0">Category Management</h3>
                        <small class="text-muted">Manage your product categories</small>
                    </div>
                    <button class="btn btn-theme ms-auto" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                        <i class="fas fa-plus me-1"></i> Add New Category
                    </button>
                </div>
                <div class="card-body">
                    <!-- Search and Filters -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-search"></i>
                                </span>
                                <input type="text" id="searchInput" class="form-control" placeholder="Search categories...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" id="statusFilter">
                                <option value="">All Statuses</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" id="parentFilter">
                                <option value="">All Categories</option>
                                <option value="0">Top Level Only</option>
                                <!-- Will be populated dynamically -->
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" id="entriesPerPage">
                                <option value="10">10 per page</option>
                                <option value="25">25 per page</option>
                                <option value="50">50 per page</option>
                                <option value="100">100 per page</option>
                            </select>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover" id="categoriesTable">
                            <thead>
                                <tr>
                                    <th style="width: 60px;" onclick="sortTable(0)">
                                        ID
                                        <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th style="width: 80px;">Image</th>
                                    <th onclick="sortTable(1)">
                                        Category Name
                                        <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortTable(2)">
                                        Category Slug
                                        <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortTable(3)">
                                        Country
                                        <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    <th onclick="sortTable(4)">
                                        City
                                        <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    
                                    <th style="width: 100px;" onclick="sortTable(5)">
                                        Status
                                        <i class="fas fa-sort ms-1"></i>
                                    </th>
                                    
                                    <th style="width: 150px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="categoryTableBody">
                                @if ($category)
                                @foreach ($category as $item)
                                <tr>
                                    <td  >  {{$item->id}} </td>
                                    <td  >
                                        <img src="assets/category_img/{{$item->image}}" style="height: 60px; width: 60px;" alt="Category Image"> </td>
                                    <td  >  {{$item->name}} </td>
                                    <td   >  {{$item->slug}} </td>
                                    <td>{{ $item->country_name ?? 'N/A' }}</td>
                                     <td>{{ $item->city_name ?? 'N/A' }}</td>
                                    <td   > @if ($item->status == 1)   Active    @else   Inactive  @endif </td>
                              
                                   
                                    
                                    <td  >
                                        <a class="btn btn-theme ms-auto" onclick="EditCategory(this.id)"  id="cate_edit_{{$item->id}}" data-id="{{$item->id}}" data-name="{{$item->name}}" data-slug="{{$item->slug}}" data-country="{{$item->country}}" data-city="{{$item->city}}" data-status="{{$item->status}}"  data-image="{{$item->image}}"    >Edit</a>
                                        <a href="/delete-category/{{$item->id}}" class="btn  ms-auto btn-danger"   >Delete</a>
                                    </td>
                                </tr>

                                    
                                @endforeach
                                    
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="text-muted" id="tableInfo">
                            Showing <span id="startEntry">0</span> to <span id="endEntry">0</span> of <span id="totalEntries">0</span> entries
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination" id="pagination"></ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Spinner -->
    <div id="loadingSpinner" class="position-fixed top-0 start-0 d-none">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toastNotification" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto" id="toastTitle">Notification</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastMessage"></div>
        </div>
    </div>
        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addCategoryModalLabel">
                            <i class="fas fa-plus-circle me-2"></i>Add New Category
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addCategoryForm" action="/add-new-category" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="modal-body">
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label required">Category Name</label>
                                        <input type="text" class="form-control" id="categoryName" name="category_name" 
                                               required minlength="2" maxlength="100"
                                               pattern="^[a-zA-Z0-9\s\-_]+$"
                                               title="Only letters, numbers, spaces, hyphens and underscores are allowed">
                                        <div class="form-text">Enter a unique category name (2-100 characters)</div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="categorySlug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" id="categorySlug" name="slug" 
                                               pattern="^[a-z0-9\-]+$" readonly
                                               title="Only lowercase letters, numbers, and hyphens are allowed">
                                        <div class="form-text">Will be automatically generated from the category name if left empty</div>
                                    </div>
    
                                    {{-- <div class="mb-3">
                                        <label for="categoryDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="categoryDescription" name="description" 
                                                  rows="4" maxlength="500"></textarea>
                                        <div class="form-text">
                                            <span id="descriptionCharCount">0</span>/500 characters
                                        </div>
                                    </div> --}}
    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryStatus" class="form-label">Country</label>
                                                <select class="form-select" id="country" name="country">
                                                    <option value="" selected disabled>--Select Country--</option>
                                                    @if ($country)
                                                    @foreach ($country as $item)
                                                    <option value="{{$item->id}}"  >{{$item->country_name}}</option>
                                                     
                                                 @endforeach
                                                     
                                                 @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryStatus" class="form-label">City</label>
                                                <select class="form-select" id="city" name="city">
                                                    <option value="" selected disabled>--Select City--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryStatus" class="form-label">Status</label>
                                                <select class="form-select" id="categoryStatus" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="displayOrder" class="form-label">Display Order</label>
                                                <input type="number" class="form-control" id="displayOrder" 
                                                       name="display_order" min="0" value="0">
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
    
                                <!-- Right Column -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Category Image</label>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="image-preview-container mb-3">
                                                    <img id="categoryImagePreview" src="assets/admin/img/placeholder.png" 
                                                         class="img-fluid">
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <label class="btn btn-outline-primary mb-1" for="categoryImage">
                                                        <i class="fas fa-upload me-2"></i>Choose Image
                                                    </label>
                                                    <input type="file" class="d-none" id="categoryImage" name="category_image"
                                                           accept="image/png, image/jpeg, image/webp">
                                                    <button type="button" class="btn btn-outline-danger btn-sm" 
                                                            onclick="removeImage('categoryImage', 'categoryImagePreview')">
                                                        <i class="fas fa-trash me-2"></i>Remove
                                                    </button>
                                                </div>
                                                <div class="form-text mt-2">
                                                    Recommended size: 800x600px<br>
                                                    Max file size: 2MB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    {{-- <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <select class="form-select" id="country" name="country">
                                            <option value="">None (Top Level)</option>
                                            <!-- Will be populated dynamically -->
                                        </select>
                                    </div> --}}

                                    
                                </div>
    
                                <!-- SEO Section -->
                                {{-- <div class="col-12 mt-3">
                                    <div class="card bg-light">
                                        <div class="card-header">
                                            <h6 class="mb-0">SEO Settings</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="metaTitle" class="form-label">Meta Title</label>
                                                <input type="text" class="form-control" id="metaTitle" name="meta_title" maxlength="60">
                                                <div class="form-text">Recommended length: 50-60 characters</div>
                                            </div>
    
                                            <div class="mb-3">
                                                <label for="metaDescription" class="form-label">Meta Description</label>
                                                <textarea class="form-control" id="metaDescription" name="meta_description" 
                                                          rows="2" maxlength="160"></textarea>
                                                <div class="form-text">Recommended length: 150-160 characters</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="modal-footer  ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-2"></i>Cancel
                            </button>
                            <button type="button"  onclick="SubmitForm()"  class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Save Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    


         <!-- Add Category Modal -->
         <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="editCategoryModalLabel">
                            <i class="fas fa-plus-circle me-2"></i>Edit Category
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="updCategoryForm" action="/update-category" method="POST" enctype="multipart/form-data"> @csrf
                        <div class="modal-body">
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="categoryName" class="form-label required">Category Name</label>
                                        <input type="hidden" id="category_id" name="category_id">
                                        <input type="text" class="form-control" id="categoryName_upd" name="category_name" 
                                               required minlength="2" maxlength="100"
                                               pattern="^[a-zA-Z0-9\s\-_]+$"
                                               title="Only letters, numbers, spaces, hyphens and underscores are allowed">
                                        <div class="form-text">Enter a unique category name (2-100 characters)</div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="categorySlug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" id="categorySlug_upd" name="slug" 
                                               pattern="^[a-z0-9\-]+$" readonly
                                               title="Only lowercase letters, numbers, and hyphens are allowed">
                                        <div class="form-text">Will be automatically generated from the category name if left empty</div>
                                    </div>
    
                                     
    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryStatus" class="form-label">Country</label>
                                                <select class="form-select" id="country_upd" name="country">
                                                    <option value="" selected disabled>--Select Country--</option>
                                                    @if ($country)
                                                    @foreach ($country as $item)
                                                    <option value="{{$item->id}}"  >{{$item->country_name}}</option>
                                                     
                                                 @endforeach
                                                     
                                                 @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryStatus" class="form-label">City</label>
                                                <select class="form-select" id="city_upd" name="city">
                                                    <option value="" selected disabled>--Select City--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="categoryStatus" class="form-label">Status</label>
                                                <select class="form-select" id="categoryStatus_upd" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
    
                                <!-- Right Column -->
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Category Image</label>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="image-preview-container mb-3">
                                                    <img id="categoryImagePreview_upd" src="assets/admin/img/placeholder.png" 
                                                         class="img-fluid">
                                                </div>
                                                <div class="d-grid gap-2">
                                                    <label class="btn btn-outline-primary mb-1" for="categoryImage_upd">
                                                        <i class="fas fa-upload me-2"></i>Choose Image
                                                    </label>
                                                    <input type="file" class="d-none" id="categoryImage_upd" name="category_image"
                                                           accept="image/png, image/jpeg, image/webp">
                                                    <button type="button" class="btn btn-outline-danger btn-sm" 
                                                            onclick="removeImage('categoryImage_upd', 'categoryImagePreview_upd')">
                                                        <i class="fas fa-trash me-2"></i>Remove
                                                    </button>
                                                </div>
                                                <div class="form-text mt-2">
                                                    Recommended size: 800x600px<br>
                                                    Max file size: 2MB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                 

                                    
                                </div>
    
                                
                            </div>
                        </div>
                        <div class="modal-footer  ">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-2"></i>Cancel
                            </button>
                            <button type="button"  onclick="SubmitFormUpd()"  class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Save Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
  
    
        <!-- Delete Confirmation Modal -->
        {{-- <div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteCategoryModalLabel">
                            <i class="fas fa-exclamation-triangle me-2"></i>Confirm Delete
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this category? This action cannot be undone.</p>
                        <p class="mb-0"><strong>Category: </strong><span id="deleteCategoryName"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>Cancel
                        </button>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                            <i class="fas fa-trash me-2"></i>Delete
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Core JavaScript -->
<script src="assets/admin/js/vendor.min.js"></script>
<script src="assets/admin/js/app.min.js"></script>

<script>


// IMage Script Start ======
$(document).ready(function () {
    // Image preview and validation
    $('#categoryImage').change(function (e) {
        const file = e.target.files[0]; // Get the selected file
        const validImageTypes = ['image/jpeg', 'image/png', 'image/webp']; // Allowed file types
        const maxSize = 2 * 1024 * 1024; // 2MB in bytes

        // Check if a file is selected
        if (file) {
            // Validate file type
            if (!validImageTypes.includes(file.type)) {
                alert('Invalid file type. Please upload an image in JPEG, PNG, or WEBP format.');
                resetImagePreview();
                return;
            }

            // Validate file size
            if (file.size > maxSize) {
                alert('File size exceeds 2MB. Please upload a smaller image.');
                resetImagePreview();
                return;
            }

            // Preview the image
            const reader = new FileReader();
            reader.onload = function (e) {
                $('#categoryImagePreview').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });


  // Image preview and validation
  $('#categoryImage_upd').change(function (e) {
        const file = e.target.files[0]; // Get the selected file
        const validImageTypes = ['image/jpeg', 'image/png', 'image/webp']; // Allowed file types
        const maxSize = 2 * 1024 * 1024; // 2MB in bytes

        // Check if a file is selected
        if (file) {
            // Validate file type
            if (!validImageTypes.includes(file.type)) {
                alert('Invalid file type. Please upload an image in JPEG, PNG, or WEBP format.');
                resetImagePreviewUpd();
                return;
            }

            // Validate file size
            if (file.size > maxSize) {
                alert('File size exceeds 2MB. Please upload a smaller image.');
                resetImagePreviewUpd();
                return;
            }

            // Preview the image
            const reader = new FileReader();
            reader.onload = function (e) {
                $('#categoryImagePreview_upd').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    // Remove image
    window.removeImage = function (inputId, previewId) {
        $(`#${inputId}`).val(''); // Clear the file input
        $(`#${previewId}`).attr('src', 'assets/admin/img/placeholder.png'); // Reset to placeholder image
    };

    // Helper function to reset image preview
    function resetImagePreview() {
        $('#categoryImage').val(''); // Clear the file input
        $('#categoryImagePreview').attr('src', 'assets/admin/img/placeholder.png'); // Reset to placeholder image
    }

    // Helper function to reset image preview
    function resetImagePreviewUpd() {
        $('#categoryImage_upd').val(''); // Clear the file input
        $('#categoryImagePreview_upd').attr('src', 'assets/admin/img/placeholder.png'); // Reset to placeholder image
    }
});
// IMage Script END ======


// Get Cities Ajax Script Start =========
$('#country').on('change', function () {

    var country = $('#country').val();

    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });

   $.ajax({
       type: "POST",
       url: '/get-cities',
       data:{   country:country,  _token: '{{csrf_token()}}'},
       dataType: 'json',
       success: function (response) {
         
        var cities = response ;
        var len = 0 ;

        $('#city').empty();
        $('#city').append('<option value="" selected disabled>--Select City--</option>');
     
        
        if (Array.isArray(response.cities)) {
            const cities = response.cities;
            for (let i = 0; i < cities.length; i++) {
                const id = cities[i].id;
                const name = cities[i].city_name;
                $('#city').append(`<option value="${id}">${name}</option>`);
            }
        } else {
            console.error('cities is not an array');
        }
    
       
         
       },
     
   });
    
});

$('#country_upd').on('change', function () {

    var country = $('#country_upd').val();

    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });

   $.ajax({
       type: "POST",
       url: '/get-cities',
       data:{   country:country,  _token: '{{csrf_token()}}'},
       dataType: 'json',
       success: function (response) {

        var cities = response ;
        var len = 0 ;

        $('#city_upd').empty();
        $('#city_upd').append('<option value="" selected disabled>--Select City--</option>');
     
     

        if (Array.isArray(response.cities)) {
            const cities = response.cities;
            for (let i = 0; i < cities.length; i++) {
                const id = cities[i].id;
                const name = cities[i].city_name;
                $('#city_upd').append(`<option value="${id}">${name}</option>`);
            }
        } else {
            console.error('cities is not an array');
        }
       
         
       },
     
   });
    
});
// Get Cities Ajax Script END =========



    // Global variables
    let currentPage = 1;
    let pageSize = 10;
    let totalRecords = 0;
    let categories = [];
    let currentSortColumn = null;
    let sortDirection = 'asc';
    let deleteId = null;

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', () => {
      
        setupEventListeners();
      
    });

    function setupEventListeners() {
        // Search input with debouncing
        let searchTimeout;
        document.getElementById('searchInput').addEventListener('input', (e) => {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                currentPage = 1;
              
            }, 500);
        });

        // Status filter
        document.getElementById('statusFilter').addEventListener('change', () => {
            currentPage = 1;
             
        });

        // Entries per page
        document.getElementById('entriesPerPage').addEventListener('change', (e) => {
            pageSize = parseInt(e.target.value);
            currentPage = 1;
        
        });

        // Category name to slug conversion
        document.getElementById('categoryName').addEventListener('input', function(e) {
            const slug = generateSlug(e.target.value);
            document.getElementById('categorySlug').value = slug;
        });

      

    }
 

 

    function generateSlug(text) {
        return text
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '') // Remove invalid chars
            .replace(/\s+/g, '-') // Replace spaces with -
            .replace(/-+/g, '-') // Replace multiple - with single -
            .trim();
    }



    function SubmitForm() {
    const showError = (message) => {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            timeOut: "10000", // 10 seconds
            extendedTimeOut: "4410000", // 10 seconds
        };
        toastr.error(message);
    };

    // Get form values
    const categoryName = document.getElementById("categoryName")?.value;
    const categorySlug = document.getElementById("categorySlug")?.value;
    const country = document.getElementById("country")?.value;
    const city = document.getElementById("city")?.value;
    const categoryStatus = document.getElementById("categoryStatus")?.value;
    const categoryImage = document.getElementById("categoryImage")?.value;

    // Validation
    if (!categoryName) {
        showError("Category Name is required!");
        return false;
    }
    if (!categorySlug) {
        showError("Category Slug is required!");
        return false;
    }
    if (!country) {
        showError("Country is required!");
        return false;
    }
    if (!city) {
        showError("City is required!");
        return false;
    }
    if (!categoryStatus) {
        showError("Category Status is required!");
        return false;
    }
    if (!categoryImage) {
        showError("Category Image is required!");
        return false;
    }

    // If all validations pass, submit the form
    document.getElementById("addCategoryForm").submit();
}

  


// Update Category Edit Script START =======
function EditCategory(Clicked) {  
    var id = $('#'+Clicked).data('id');
    var name = $('#'+Clicked).data('name');
    var slug = $('#'+Clicked).data('slug');
    var country = $('#'+Clicked).data('country');
    var city = $('#'+Clicked).data('city');
    var status = $('#'+Clicked).data('status');
    var image = $('#'+Clicked).data('image');

 


    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });

   $.ajax({
       type: "POST",
       url: '/get-cities',
       data:{   country:country,  _token: '{{csrf_token()}}'},
       dataType: 'json',
       success: function (response) {

        var cities = response ;
        var len = 0 ;

        $('#city_upd').empty();
        
        
        if (Array.isArray(response.cities)) {
            const cities = response.cities;
            for (let i = 0; i < cities.length; i++) {
                const id = cities[i].id;
                const name = cities[i].city_name;
                if (id == city) {
                    $('#city_upd').append(`<option selected value="${id}">${name}</option>`);
                    
                } else {
                    $('#city_upd').append(`<option value="${id}">${name}</option>`);
                    
                }
            }
        } else {
            console.error('cities is not an array');
        }
       
         
       },
     
   });
 
    

    $('#category_id').val(id);
    $('#categoryName_upd').val(name);
    $('#categorySlug_upd').val(slug);
    $('#country_upd').val(country);
    // $('#city_upd').val(city);
    if (status == 1) {
        
    } else {
        
    }
    $('#categoryStatus_upd').val(status);
    $('#categoryImagePreview_upd').attr('src', 'assets/category_img/'+image);
$('#editCategoryModal').modal('show');
}
// Update Category Edit Script END =======





function SubmitFormUpd() {
    const showError = (message) => {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            timeOut: "10000", // 10 seconds
            extendedTimeOut: "4410000", // 10 seconds
        };
        toastr.error(message);
    };

    // Get form values
    const categoryName = document.getElementById("categoryName_upd")?.value;
    const categorySlug = document.getElementById("categorySlug_upd")?.value;
    const country = document.getElementById("country_upd")?.value;
    const city = document.getElementById("city_upd")?.value;
    const categoryStatus = document.getElementById("categoryStatus_upd")?.value; 

    // Validation
    if (!categoryName) {
        showError("Category Name is required!");
        return false;
    }
    if (!categorySlug) {
        showError("Category Slug is required!");
        return false;
    }
    if (!country) {
        showError("Country is required!");
        return false;
    }
    if (!city) {
        showError("City is required!");
        return false;
    }
    if (!categoryStatus) {
        showError("Category Status is required!");
        return false;
    }
 

    // If all validations pass, submit the form
    document.getElementById("updCategoryForm").submit();
}
 

    
 
</script>
</body>
</html>