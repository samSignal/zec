<?php
require '../includes/db.php';

// Start session for potential error messages
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    try {
        $id = $_POST['id'];
        
        // First get the image path before deleting the record
        $stmt = $pdo->prepare("SELECT image_path FROM services WHERE id = ?");
        $stmt->execute([$id]);
        $service = $stmt->fetch();
        
        if ($service) {
            // Delete the image file if it exists
            $imagePath = '../uploads/' . $service['image_path'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            
            // Delete the database record
            $stmt = $pdo->prepare("DELETE FROM services WHERE id = ?");
            if (!$stmt->execute([$id])) {
                throw new Exception('Failed to delete the service');
            }
            
            $_SESSION['success'] = 'Service deleted successfully';
        } else {
            $_SESSION['error'] = 'Service not found';
        }
        
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}

// Redirect back to dashboard
header('Location: dashboard.php');
exit;
?>