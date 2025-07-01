<?php
require '../includes/db.php';

// Start session for potential error messages
session_start();

// Function to resize image
function resizeImage($sourcePath, $targetPath) {
    list($width, $height, $type) = getimagesize($sourcePath);
    
    $newImage = imagecreatetruecolor(1024, 768);
    
    // Handle transparency for PNG images
    if ($type == IMAGETYPE_PNG) {
        imagealphablending($newImage, false);
        imagesavealpha($newImage, true);
    }
    
    switch ($type) {
        case IMAGETYPE_JPEG:
            $sourceImage = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $sourceImage = imagecreatefrompng($sourcePath);
            break;
        case IMAGETYPE_GIF:
            $sourceImage = imagecreatefromgif($sourcePath);
            break;
        default:
            return false;
    }
    
    // Resize image maintaining aspect ratio
    imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, 1024, 768, $width, $height);
    
    // Save the resized image
    switch ($type) {
        case IMAGETYPE_JPEG:
            imagejpeg($newImage, $targetPath, 90);
            break;
        case IMAGETYPE_PNG:
            imagepng($newImage, $targetPath, 9);
            break;
        case IMAGETYPE_GIF:
            imagegif($newImage, $targetPath);
            break;
    }
    
    imagedestroy($sourceImage);
    imagedestroy($newImage);
    
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Validate required fields
        if (empty($_POST['id']) || empty($_POST['title']) || empty($_POST['category'])) {
            throw new Exception('Required fields are missing');
        }

        $id = $_POST['id'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        // Start building the SQL query
        $sql = "UPDATE services SET title = ?, category = ?, description = ?";
        $params = [$title, $category, $description];

        // Handle image upload if new image is provided
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Validate file type
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($_FILES['image']['type'], $allowedTypes)) {
                throw new Exception('Invalid file type. Only JPG, PNG and GIF are allowed.');
            }

            // Generate unique filename
            $fileName = uniqid() . '_' . $_FILES['image']['name'];
            $targetPath = '../uploads/' . $fileName;

            // Resize and save the image
            if (!resizeImage($_FILES['image']['tmp_name'], $targetPath)) {
                throw new Exception('Failed to process the image');
            }

            // Get old image path to delete
            $stmt = $pdo->prepare("SELECT image_path FROM services WHERE id = ?");
            $stmt->execute([$id]);
            $oldImage = $stmt->fetchColumn();

            // Delete old image if it exists
            if ($oldImage && file_exists('../uploads/' . $oldImage)) {
                unlink('../uploads/' . $oldImage);
            }

            // Add image path to update query
            $sql .= ", image_path = ?";
            $params[] = $fileName;
        }

        // Complete the query
        $sql .= " WHERE id = ?";
        $params[] = $id;

        // Execute update
        $stmt = $pdo->prepare($sql);
        if (!$stmt->execute($params)) {
            throw new Exception('Failed to update the service');
        }

        // Redirect back with success message
        $_SESSION['success'] = 'Service updated successfully';
        header('Location: dashboard.php');
        exit;

    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header('Location: dashboard.php');
        exit;
    }
} else {
    // If not POST request, redirect to dashboard
    header('Location: dashboard.php');
    exit;
}
?>