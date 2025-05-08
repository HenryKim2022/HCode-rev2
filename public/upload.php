<?php
// upload.php

$uploadDir = "uploads/";

// Create uploads directory if it doesn't exist
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photos'])) {
    $files = $_FILES['photos'];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    foreach ($files['name'] as $index => $name) {
        $tmpName = $files['tmp_name'][$index];
        $error = $files['error'][$index];

        if ($error !== UPLOAD_ERR_OK) {
            $response[] = ['status' => 'error', 'message' => "Error uploading file: $name"];
            continue;
        }

        $fileType = mime_content_type($tmpName);

        if (!in_array($fileType, $allowedTypes)) {
            $response[] = ['status' => 'error', 'message' => "$name is not a valid image."];
            continue;
        }

        // Generate unique filename to avoid overwriting
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $newName = uniqid('img_', true) . "." . $ext;
        $destination = $uploadDir . $newName;

        if (move_uploaded_file($tmpName, $destination)) {
            $response[] = [
                'status' => 'success',
                'filename' => $newName,
                'url' => $destination
            ];
        } else {
            $response[] = ['status' => 'error', 'message' => "Failed to move uploaded file: $name"];
        }
    }
} else {
    $response = ['status' => 'error', 'message' => 'No files uploaded or invalid request.'];
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
