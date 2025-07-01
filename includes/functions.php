<?php
function login($pdo, $username, $password) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['admin'] = $user['id'];
        return true;
    }
    return false;
}

function is_logged_in() {
    session_start();
    return isset($_SESSION['admin']);
}

function resizeImage($sourcePath, $targetPath) {
    // Get image info
    list($width, $height, $type) = getimagesize($sourcePath);
    
    // Create new image with desired dimensions
    $newImage = imagecreatetruecolor(1024, 768);
    
    // Create source image based on file type
    switch ($type) {
        case IMAGETYPE_JPEG:
            $sourceImage = imagecreatefromjpeg($sourcePath);
            break;
        case IMAGETYPE_PNG:
            $sourceImage = imagecreatefrompng($sourcePath);
            // Preserve transparency
            imagealphablending($newImage, false);
            imagesavealpha($newImage, true);
            break;
        case IMAGETYPE_GIF:
            $sourceImage = imagecreatefromgif($sourcePath);
            break;
        default:
            return false;
    }
    
    // Resize image
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
    
    // Free up memory
    imagedestroy($sourceImage);
    imagedestroy($newImage);
    
    return true;
}
?>