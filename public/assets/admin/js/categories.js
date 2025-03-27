let currentPage = 1;
const limit = 10;

// Load categories on page load
$(document).ready(function() {
    loadCategories();
    loadParentCategories();

    // Event listeners
    $('#searchInput').on('keyup', debounce(loadCategories, 500));
    $('#statusFilter, #parentFilter').on('change', loadCategories);
    $('#addCategory').on('click', showAddModal);
    $('#saveCategory').on('click', saveCategory);
});

// Load categories with filters and pagination
function loadCategories() {
    const search = $('#searchInput').val();
    const status = $('#statusFilter').val();
    const parent = $('#parentFilter').val();

    $.get('api/get_categories.php', {
        page: currentPage,
        limit: limit,
        search: search,
        status: status,
        parent: parent
    })
    .done(function(response) {
        if (response.success) {
            displayCategories(response.data.categories);
            updatePagination(response.data.pagination);
        } else {
            alert('Error loading categories');
        }
    })
    .fail(function(jqXHR, textStatus, error) {
        alert('Error: ' + error);
    });
}

// Display categories in table
function displayCategories(categories) {
    const tbody = $('#categoriesTable tbody');
    tbody.empty();

    categories.forEach(category => {
        tbody.append(`
            <tr>
                <td>${category.id}</td>
                <td>${category.category_name}</td>
                <td>${category.parent_name || '-'}</td>
                <td>
                    <span class="badge ${category.status == 1 ? 'bg-success' : 'bg-danger'}">
                        ${category.status == 1 ? 'Active' : 'Inactive'}
                    </span>
                </td>
                <td>${category.subcategory_count}</td>
                <td>${formatDate(category.created_at)}</td>
                <td>
                    <button class="btn btn-sm btn-primary" onclick="editCategory(${category.id})">Edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deleteCategory(${category.id})">Delete</button>
                </td>
            </tr>
        `);
    });
}

// Update pagination controls
function updatePagination(pagination) {
    const paginationEl = $('#pagination');
    paginationEl.empty();

    // Previous button
    paginationEl.append(`
        <li class="page-item ${pagination.page === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${pagination.page - 1})">Previous</a>
        </li>
    `);

    // Page numbers
    for (let i = 1; i <= pagination.total_pages; i++) {
        paginationEl.append(`
            <li class="page-item ${pagination.page === i ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
            </li>
        `);
    }

    // Next button
    paginationEl.append(`
        <li class="page-item ${pagination.page === pagination.total_pages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${pagination.page + 1})">Next</a>
        </li>
    `);

    // Update info text
    $('#paginationInfo').text(
        `Showing ${(pagination.page - 1) * pagination.limit + 1} to ${Math.min(pagination.page * pagination.limit, pagination.total)} of ${pagination.total} entries`
    );
}

// Load parent categories for dropdown
function loadParentCategories() {
    $.get('api/get_categories.php', { parent: '0' })
        .done(function(response) {
            if (response.success) {
                const select = $('#parentCategory');
                select.empty().append('<option value="">None (Main Category)</option>');
                
                response.data.categories.forEach(category => {
                    select.append(`<option value="${category.id}">${category.category_name}</option>`);
                });
            }
        });
}

// Utility functions
function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString();
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Modal functions
function showAddModal() {
    $('#categoryId').val('');
    $('#categoryForm')[0].reset();
    $('#categoryModal').modal('show');
}

function editCategory(id) {
    $.get(`api/get_categories.php?id=${id}`)
        .done(function(response) {
            if (response.success) {
                const category = response.data.categories[0];
                $('#categoryId').val(category.id);
                $('#categoryName').val(category.category_name);
                $('#categoryDescription').val(category.description);
                $('#parentCategory').val(category.parent_id || '');
                $('#categoryStatus').val(category.status);
                $('#categoryModal').modal('show');
            }
        });
}

function saveCategory() {
    const data = {
        id: $('#categoryId').val(),
        category_name: $('#categoryName').val(),
        description: $('#categoryDescription').val(),
        parent_id: $('#parentCategory').val(),
        status: $('#categoryStatus').val()
    };

    $.post('api/save_category.php', data)
        .done(function(response) {
            if (response.success) {
                $('#categoryModal').modal('hide');
                loadCategories();
            } else {
                alert('Error saving category: ' + response.message);
            }
        })
        .fail(function(jqXHR, textStatus, error) {
            alert('Error: ' + error);
        });
}

function deleteCategory(id) {
    if (confirm('Are you sure you want to delete this category?')) {
        $.post('api/delete_category.php', { id: id })
            .done(function(response) {
                if (response.success) {
                    loadCategories();
                } else {
                    alert('Error deleting category: ' + response.message);
                }
            })
            .fail(function(jqXHR, textStatus, error) {
                alert('Error: ' + error);
            });
    }
}

function changePage(page) {
    currentPage = page;
    loadCategories();
}