<?php
require '../includes/db.php';
require '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    
    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['image']['tmp_name'];
        $fileName = uniqid() . '_' . $_FILES['image']['name'];
        $targetPath = '../uploads/' . $fileName;
        
        // Resize and save the image
        if (resizeImage($tempName, $targetPath)) {
            // Insert into database
            $stmt = $pdo->prepare("INSERT INTO services (title, category, description, image_path) VALUES (?, ?, ?, ?)");
            if ($stmt->execute([$title, $category, $description, $fileName])) {
                header('Location: dashboard.php');
                exit;
            }
        }
    }
    
    // If we get here, something went wrong
    header('Location: dashboard.php?error=1');
    exit;
}
?>