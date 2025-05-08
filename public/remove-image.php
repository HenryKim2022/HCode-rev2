<?php
// Configuration
$uploadDir = "uploads/";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the image source from the request body
  $imageSrc = json_decode(file_get_contents('php://input'), true)['imageSrc'];

  // Remove the image from the server
  if (file_exists($uploadDir . basename($imageSrc))) {
    unlink($uploadDir . basename($imageSrc));
    echo json_encode(['message' => 'Image removed successfully']);
  } else {
    echo json_encode(['message' => 'Image not found']);
  }
} else {
  echo json_encode(['message' => 'Invalid request method']);
}
