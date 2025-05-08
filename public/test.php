<?php
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Load uploaded images
$uploadedImages = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photos'])) {
    $files = $_FILES['photos'];
    foreach ($files['name'] as $i => $name) {
        $tmp_name = $files['tmp_name'][$i];
        if (is_uploaded_file($tmp_name)) {
            $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
            $newName = uniqid() . "." . $ext;
            move_uploaded_file($tmp_name, $uploadDir . $newName);
            $uploadedImages[] = $newName;
        }
    }
} else {
    // Load existing images from the uploads directory
    $files = scandir($uploadDir);
    foreach ($files as $file) {
        if (is_file($uploadDir . $file)) {
            $uploadedImages[] = $file;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Pass Photo Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">


    <style>
        /* Custom Styles */
        body {
            background: #f8f9fa;
        }

        .container {
            max-width: 1200px;
        }

        .preview-container {
            background: #e9ecef;
            padding: 10px;
            height: 400px;
            overflow-y: auto;
        }

        #paper-size-preview {
            border: 1px solid #000;
            padding: 10px;
            box-sizing: border-box;
        }

        .paper-preview {
            padding: 10px;
        }

        .preview {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }


        .preview img {
            width: 100px;
            height: auto;
            object-fit: cover;
            border: 1px solid #999;
        }

        .image-card {
            position: relative;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .image-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .image-card .controls {
            position: absolute;
            top: 0;
            right: 0.64rem;
            display: none;
            background: rgba(255, 255, 255, 0);
            padding: 5px;
        }

        .image-card:hover .controls {
            display: block;
        }

        .image-card .controls button {
            margin-left: 5px;
            font-size: 12px;
        }

        .settings-modal {
            max-width: 600px;
        }

        .dropdown-menu {
            min-width: 150px;
        }

        .btn-group {
            margin-bottom: 10px;
        }

        .drag-drop-area {
            border: 2px dashed #ccc;
            text-align: center;
            padding: 50px;
            color: #999;
            cursor: pointer;
        }

        .drag-drop-area:hover {
            background: #f0f0f0;
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    <div class="container py-4">

        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Naevaweb</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                WEBSITE
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOSTING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">DOMAIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">AFFILIATE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PORTOFOLIO</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GRATIS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">KONTAK</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-primary me-2">Login</button>
                        <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="row g-4">

            <!-- Preview Section -->
            <div class="col-md-6">
                <div class="card bg-dark text-white mb-3">
                    <h5 class="preview-header card-header" id="preview-header">PREVIEW</h5>
                    <div class="card-body preview-container bg-secondary d-flex align-items-center justify-content-center border text-center py-2 overflow-x-auto">

                        <div class="paper-preview bg-white border shadow-md" style="width: fit-content;">
                            <div class="paper-size" id="paper-size-preview">
                                <div id="preview" class="preview">
                                    <?php foreach ($uploadedImages as $img): ?>
                                        <img src="<?= $uploadDir . $img ?>" alt="Photo" class="preview-img">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-start mt-3">
                    <button class="btn btn-success me-2" onclick="window.print()">Print</button>
                    <button class="btn btn-primary me-2" onclick="generatePDF()">Download PDF</button>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#settingsModal">
                        <i class="bi bi-gear-fill me-1"></i> Setting
                    </button>
                </div>
            </div>

            <!-- Image Management Area -->
            <div class="col-md-6">
                <!-- Drag & Drop Upload -->
                <div class="drag-drop-area mb-3">
                    <p class="text-muted">Drag banyak foto yang akan dicetak sekaligus.</p>
                    <form method="post" enctype="multipart/form-data" id="photo-form">
                        <input type="file" id="image-upload" name="photos[]" multiple accept="image/*" style="display: none;"
                            draggable="true" ondragstart="return false;">
                        <label for="image-upload" class="btn btn-primary">
                            <i class="bi bi-cloud-upload-fill me-1"></i> Upload Foto
                        </label>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    </form>
                </div>

                <div class="each-image-settings row g-3">
                    <?php
                    $size_i_array = [
                        '21.6' => "Pass Foto 2x3",
                        '27.9' => "Pass Foto 3x4",
                        '38.1' => "Pass Foto 4x6",
                        '63.5' => "2R Portrait",
                        '88.9' => "2R Landscape"
                    ];
                    $ammo_i_max = 100;
                    ?>
                    <?php foreach ($uploadedImages as $img): ?>
                        <div class="col-md-3 image-card">
                            <img src="<?= $uploadDir . $img ?>" alt="Photo" class="img-fluid">
                            <div class="controls">
                                <button class="btn-copy btn btn-sm btn-primary"><i class="fas fa-thin fa-copy"></i></button>
                                <button class="btn-delete btn btn-sm btn-danger"><i class="fas fa-thin fa-trash-alt"></i></button>
                            </div>
                            <div class="image-settings">
                                <select class="form-select image-orientation" id="image-orientation-<?= $img ?>">
                                    <option value="portrait">Portrait</option>
                                    <option value="landscape">Landscape</option>
                                </select>
                                <select class="form-select image-size" id="image-size-<?= $img ?>">
                                    <?php foreach ($size_i_array as $size => $label): ?>
                                        <option value="<?= $size ?>"><?= $label ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <select class="form-select image-amount" id="image-amount-<?= $img ?>">
                                    <?php for ($i = 1; $i <= $ammo_i_max; $i++): ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </div>

    <!-- Global Settings Modal -->
    <div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content settings-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="settingsModalLabel">Pengaturan Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Ukuran Kertas</label>
                        <select class="form-select" id="paper-size">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Margin (mm)</label>
                        <input type="number" class="form-control" id="margin" value="10">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Spacing (mm)</label>
                        <input type="number" class="form-control" id="spacing" value="5">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="hemat-kertas">
                        <label class="form-check-label" for="hemat-kertas">
                            Hemat Kertas
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="saveSettings()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="custom/jspdf/jspdf.umd.min.js"></script>


    <script>window.jsPDF = window.jspdf.jsPDF;</script>



    <script>
        // Save settings to localStorage
        function saveSettings() {
            const settings = {
                paperSize: document.getElementById('paper-size').value,
                margin: document.getElementById('margin').value,
                spacing: document.getElementById('spacing').value,
                hematKertas: document.getElementById('hemat-kertas').checked
            };
            localStorage.setItem('passPhotoSettings', JSON.stringify(settings));
            alert("Setting disimpan!");
        }

        // Placeholder for generating PDF
        function generatePDF() {
            alert("Fitur download PDF sedang dalam pengembangan.");
        }

        // Handle file input change event for immediate upload
        document.getElementById('image-upload').addEventListener('change', function() {
            const formData = new FormData(document.getElementById('photo-form'));
            fetch('upload.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    location.reload();
                })
                .catch(error => console.error('Error:', error));
        });

        // Drag & Drop Area Handling
        const dropArea = document.querySelector('.drag-drop-area');
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.style.background = '#f0f0f0';
        });
        dropArea.addEventListener('dragleave', () => {
            dropArea.style.background = '';
        });
        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            const files = e.dataTransfer.files;
            const formData = new FormData();
            for (const file of files) {
                formData.append('photos[]', file);
            }
            fetch('upload.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    location.reload();
                })
                .catch(error => console.error('Error:', error));
        });
    </script>

    <script>
        const skala = 3.78; // scale factor for mm to px conversion

        function cmToPx(cm) {
            return cm * skala;
        }

        document.getElementById('paper-size').addEventListener('change', function() {
            const paperSize = this.value;
            const paperPreviewHeaderArea = document.getElementById('preview-header');
            paperPreviewHeaderArea.textContent = `PREVIEW (${paperSize})`;
            const paperPreview = document.getElementById('paper-size-preview');

            // Reset styles before applying new size
            paperPreview.style.width = '';
            paperPreview.style.height = '';

            switch (paperSize) {
                case 'A4':
                    paperPreview.style.width = `${cmToPx(21)}px`;
                    paperPreview.style.height = `${cmToPx(29.7)}px`;
                    break;
                    // Add other cases for different paper sizes as needed
                default:
                    paperPreview.style.width = `${cmToPx(21)}px`;
                    paperPreview.style.height = `${cmToPx(29.7)}px`;
                    break;
            }

            // Resize images to fit within the paper size
            resizeImagesToFitPaper();
        });

        function resizeImagesToFitPaper() {
            const paperPreview = document.getElementById('paper-size-preview');
            const paperRect = paperPreview.getBoundingClientRect();
            let availableWidth = paperRect.width - 20; // subtract padding/border
            let availableHeight = paperRect.height - 20;

            // Optional: get margin/spacing from saved settings
            const settings = JSON.parse(localStorage.getItem('passPhotoSettings'));
            if (settings) {
                const margin = parseFloat(settings.margin || 10) * skala; // mm to px
                const spacing = parseFloat(settings.spacing || 5) * skala; // mm to px
                availableWidth -= margin * 2 + spacing;
                availableHeight -= margin * 2 + spacing;
            }

            const previewImages = document.querySelectorAll('.preview img');
            previewImages.forEach((image) => {
                const baseWidth = 100; // Default base width for scaling
                const baseHeight = 150; // Default base height for scaling

                // Calculate scale factors
                const scaleX = availableWidth / baseWidth;
                const scaleY = availableHeight / baseHeight;
                const scaleFactor = Math.min(scaleX, scaleY);

                // Set new dimensions
                image.style.width = `${baseWidth * scaleFactor}px`;
                image.style.height = `${baseHeight * scaleFactor}px`;
                image.style.maxWidth = `${availableWidth}px`;
                image.style.maxHeight = `${availableHeight}px`;
            });
        }
    </script>

    <script>
        const imageCards = document.querySelectorAll('.image-card');
        imageCards.forEach((card) => {
            const copyButton = card.querySelector('.btn-copy');
            const deleteButton = card.querySelector('.btn-delete');

            copyButton.addEventListener('click', () => {
                const imageSrc = card.querySelector('img').src;
                navigator.clipboard.writeText(imageSrc).then(() => {
                    console.log('Image source copied to clipboard');
                });
            });

            deleteButton.addEventListener('click', () => {
                const imageSrc = card.querySelector('img').src;
                const previewImage = document.querySelector(`.preview img[src="${imageSrc}"]`);
                if (previewImage) {
                    previewImage.remove();
                }
                card.remove();

                fetch('remove-image.php', {
                        method: 'POST',
                        body: JSON.stringify({
                            imageSrc
                        }),
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        const previewContainer = document.querySelector('.preview-container');
                        previewContainer.innerHTML = '';
                        fetch('preview.php')
                            .then((response) => response.text())
                            .then((html) => {
                                previewContainer.innerHTML = html;
                            });
                    })
                    .catch((error) => console.error(error));
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.image-orientation').select2();
            $('.image-size').select2();
            $('.image-amount').select2();

            $('.image-size, .image-amount').on('change', function() {
                const imageSize = $(this).closest('.image-card').find('.image-size').val();
                const imageAmount = $(this).closest('.image-card').find('.image-amount').val();
                const imageSrc = $(this).closest('.image-card').find('img').attr('src');
                const previewImages = $('.preview img[src="' + imageSrc + '"]');

                if (previewImages.length > 0) {
                    switch (imageSize) {
                        case '21.6':
                            previewImages.css('width', '50px');
                            break;
                        case '27.9':
                            previewImages.css('width', '75px');
                            break;
                        case '38.1':
                            previewImages.css('width', '100px');
                            break;
                        case '63.5':
                            previewImages.css('width', '150px');
                            break;
                        case '88.9':
                            previewImages.css('width', '200px');
                            break;
                        default:
                            previewImages.css('width', '100px');
                    }

                    previewImages.css('height', 'auto');
                    previewImages.css('objectFit', 'cover');
                    previewImages.css('border', '1px solid #999');

                    const clones = previewImages.not(':first');
                    clones.remove();

                    if (imageAmount > 1) {
                        const firstImage = previewImages.first();
                        for (let i = 0; i < imageAmount - 1; i++) {
                            const clone = firstImage.clone();
                            firstImage.after(clone);
                        }
                    }
                }
            });

            $('.image-orientation').on('change', function() {
                const imageOrientation = $(this).val();
                const imageSrc = $(this).closest('.image-card').find('img').attr('src');
                const previewImages = $('.preview img[src="' + imageSrc + '"]');
                if (previewImages.length > 0) {
                    if (imageOrientation === 'portrait') {
                        previewImages.css('transform', 'rotate(0deg)');
                    } else if (imageOrientation === 'landscape') {
                        previewImages.css('transform', 'rotate(90deg)');
                    }
                }
            });

            const paperSizeSelect = document.getElementById('paper-size');
            const paperSizes = [{
                    value: "A0",
                    label: "A0(84,1x118,9 cm)"
                },
                {
                    value: "A1",
                    label: "A1(59,4x84,1 cm)"
                },
                {
                    value: "A2",
                    label: "A2(42x59,4 cm)"
                },
                {
                    value: "A3",
                    label: "A3(29,7x42 cm)"
                },
                {
                    value: "A4",
                    label: "A4(21x29,7 cm)"
                },
                {
                    value: "A4s",
                    label: "A4s(21,5x29,7 cm)"
                },
                {
                    value: "A5",
                    label: "A5(14,8x21 cm)"
                },
                {
                    value: "A6",
                    label: "A6(10,5x14,8 cm)"
                },
                {
                    value: "A7",
                    label: "A7(7,4x10,5 cm)"
                },
                {
                    value: "A8",
                    label: "A8(5,2x7,4 cm)"
                },
                {
                    value: "A9",
                    label: "A9(3,7x5,2 cm)"
                },
                {
                    value: "A10",
                    label: "A10(2,6x3,7 cm)"
                },
                {
                    value: "B0",
                    label: "B0(100x141,4 cm)"
                },
                {
                    value: "B1",
                    label: "B1(70,7x100 cm)"
                },
                {
                    value: "B2",
                    label: "B2(50x70,7 cm)"
                },
                {
                    value: "B3",
                    label: "B3(35,3x50 cm)"
                },
                {
                    value: "B4",
                    label: "B4(25x35,3 cm)"
                },
                {
                    value: "B5",
                    label: "B5(17,6x25 cm)"
                },
                {
                    value: "B6",
                    label: "B6(12,5x17,6 cm)"
                },
                {
                    value: "B7",
                    label: "B7(8,8x12,5 cm)"
                },
                {
                    value: "B8",
                    label: "B8(6,2x8,8 cm)"
                },
                {
                    value: "B9",
                    label: "B9(4,4x6,2 cm)"
                },
                {
                    value: "B10",
                    label: "B10(3,1x4,4 cm)"
                },
                {
                    value: "C0",
                    label: "C0(91,7x129,7 cm)"
                },
                {
                    value: "C1",
                    label: "C1(64,8x91,7 cm)"
                },
                {
                    value: "C2",
                    label: "C2(45,8x64,8 cm)"
                },
                {
                    value: "C3",
                    label: "C3(32,4x45,8 cm)"
                },
                {
                    value: "C4",
                    label: "C4(22,9x32,4 cm)"
                },
                {
                    value: "C5",
                    label: "C5(16,2x22,9 cm)"
                },
                {
                    value: "C6",
                    label: "C6(11,4x16,2 cm)"
                },
                {
                    value: "C7",
                    label: "C7(8,1x11,4 cm)"
                },
                {
                    value: "C8",
                    label: "C8(5,7x8,1 cm)"
                },
                {
                    value: "C9",
                    label: "C9(4x5,7 cm)"
                },
                {
                    value: "C10",
                    label: "C10(2,8x4 cm)"
                },
                {
                    value: "2R",
                    label: "2R(6x9 cm)"
                },
                {
                    value: "3R",
                    label: "3R(8,9x12,7 cm)"
                },
                {
                    value: "4R",
                    label: "4R(10,2x15,2 cm)"
                },
                {
                    value: "5R",
                    label: "5R(12,7x17,8 cm)"
                },
                {
                    value: "6R",
                    label: "6R(15,2x20,3 cm)"
                },
                {
                    value: "8R",
                    label: "8R(20,3x25,4 cm)"
                },
                {
                    value: "10R",
                    label: "10R(25,4x30,5 cm)"
                },
            ];

            paperSizes.forEach((paperSize) => {
                const option = document.createElement('option');
                option.value = paperSize.value;
                option.text = paperSize.label;
                paperSizeSelect.appendChild(option);
            });
        });
    </script>





</body>

</html>
