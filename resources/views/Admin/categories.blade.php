 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-4">
        <div class="row mb-4">
            <div class="col">
                <h2>Categories Management</h2>
            </div>
            <div class="col text-end">
                <button class="btn btn-primary" id="addCategory">Add New Category</button>
            </div>
        </div>

        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-md-3">
                <input type="text" class="form-control" id="searchInput" placeholder="Search categories...">
            </div>
            <div class="col-md-2">
                <select class="form-select" id="statusFilter">
                    <option value="">All Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="parentFilter">
                    <option value="">All Categories</option>
                    <option value="0">Main Categories Only</option>
                </select>
            </div>
        </div>

        <!-- Categories Table -->
        <div class="table-responsive">
            <table class="table table-striped" id="categoriesTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>Status</th>
                        <th>Subcategories</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-md-6">
                <div class="dataTables_info" id="paginationInfo"></div>
            </div>
            <div class="col-md-6">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end" id="pagination"></ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Category Modal -->
    <div class="modal fade" id="categoryModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add/Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="categoryForm">
                        <input type="hidden" id="categoryId">
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" id="categoryDescription"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Parent Category</label>
                            <select class="form-select" id="parentCategory">
                                <option value="">None (Main Category)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" id="categoryStatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveCategory">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/categories.js"></script>
</body>
</html>