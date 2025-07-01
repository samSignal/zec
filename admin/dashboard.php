<?php
require 'auth.php';
require '../includes/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Add DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        .modal-content {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: none;
            padding: 1.5rem 1.5rem 1rem;
            background: #f8f9fa;
            border-radius: 15px 15px 0 0;
        }

        .modal-header .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .modal-header .btn-close {
            background-color: #e9ecef;
            padding: 0.75rem;
            margin: -0.5rem -0.5rem -0.5rem auto;
            border-radius: 50%;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            border-top: none;
            padding: 1rem 1.5rem 1.5rem;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
            border-color: #86b7fe;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .btn {
            
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            box-shadow: 0 2px 6px rgba(13, 110, 253, 0.2);
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(13, 110, 253, 0.3);
        }

        .btn-secondary {
            background-color: #e9ecef;
            border: none;
            color: #495057;
        }

        .btn-secondary:hover {
            background-color: #dee2e6;
            color: #212529;
        }

        .modal-dialog {
            margin-top: 2.75rem;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Mabecarestore construction Private limited Admin</a>
            <a href="logout.php" class="btn btn-outline-light">Logout</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2>Services Management</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                    <i class="bi bi-plus-circle"></i> Add New Service
                </button>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>About Us:</strong>
                    <p>
                        Mabecarestore construction is a company which specializes in construction of civil and commercial building services, also including renovations.
                    </p>
                    <strong>Contact:</strong>
                    <p>
                        Call: +263 782 612 644<br>
                        Email: moyobhekinkosi@yahoo.com
                    </p>
                </div>
                <div class="table-responsive">
                    <table id="servicesTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->query("SELECT * FROM services ORDER BY created_at DESC");
                            while ($row = $stmt->fetch()) {
                                echo '<tr>';
                                echo '<td><img src="../uploads/' . htmlspecialchars($row['image_path']) . '" class="img-thumbnail" style="max-width: 100px;" alt="' . htmlspecialchars($row['title']) . '"></td>';
                                echo '<td>' . htmlspecialchars($row['title']) . '</td>';
                                echo '<td>' . ucfirst(htmlspecialchars($row['category'])) . '</td>';
                                echo '<td>' . htmlspecialchars($row['description']) . '</td>';
                                echo '<td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editServiceModal' . $row['id'] . '">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteServiceModal' . $row['id'] . '">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>';
                                echo '</tr>';

                                // Edit Modal for each service
                                echo '<div class="modal fade" id="editServiceModal' . $row['id'] . '" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Service</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="edit_service.php" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="' . $row['id'] . '">
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" name="title" class="form-control" value="' . htmlspecialchars($row['title']) . '" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" class="form-control" rows="4">' . htmlspecialchars($row['description']) . '</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Category</label>
                                                        <select name="category" class="form-select" required>
                                                            <option value="" selected disabled>Choose Category</option>
                                                            <option value="brick laying"' . ($row['category'] == 'brick laying' ? ' selected' : '') . '>Brick laying</option>
                                                            <option value="paving"' . ($row['category'] == 'paving' ? ' selected' : '') . '>Paving</option>
                                                            <option value="skimming"' . ($row['category'] == 'skimming' ? ' selected' : '') . '>Skimming</option>
                                                            <option value="durahal"' . ($row['category'] == 'durahal' ? ' selected' : '') . '>Durahal</option>
                                                            <option value="plastering"' . ($row['category'] == 'plastering' ? ' selected' : '') . '>Plastering</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">New Image (optional)</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>';

                                // Delete Modal for each service
                                echo '<div class="modal fade" id="deleteServiceModal' . $row['id'] . '" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Service</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete "' . htmlspecialchars($row['title']) . '"?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="delete_service.php" method="post" style="display: inline;">
                                                    <input type="hidden" name="id" value="' . $row['id'] . '">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Service Modal -->
    <div class="modal fade" id="addServiceModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-control" required>
                                <option value="" selected disabled>Choose Category</option>
                                <option value="brick laying">Brick laying</option>
                                <option value="paving">Paving</option>
                                <option value="skimming">Skimming</option>
                                <option value="durahal">Durahal</option>
                                <option value="plastering">Plastering</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#servicesTable').DataTable({
                "order": [[1, "asc"]], // Sort by title column by default
                "pageLength": 10, // Show 10 entries per page
                "language": {
                    "search": "Search Project:",
                    "lengthMenu": "Show _MENU_ projects per page",
                    "info": "Showing _START_ to _END_ of _TOTAL_ ptojects"
                },
                "columnDefs": [
                    { "orderable": false, "targets": [0, 4] } // Disable sorting for image and actions columns
                ]
            });
        });
    </script>
</body>
</html>
