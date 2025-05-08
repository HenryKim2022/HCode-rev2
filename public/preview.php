<?php
$uploadDir = "uploads/";

// Load existing images from the uploads directory
$files = scandir($uploadDir);
$uploadedImages = [];
foreach ($files as $file) {
    if (is_file($uploadDir . $file)) {
        $uploadedImages[] = $file;
    }
}

// Generate HTML for the preview section
$html = '<div class="preview">';
foreach ($uploadedImages as $img) {
    $html .= '<img src="' . $uploadDir . $img . '" width="21.6" height="27.9" alt="Photo" class="preview-img">';
}
$html .= '</div>';

echo $html;
?>
