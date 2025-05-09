<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Aplikasi Cetak Foto Gratis | Print Foto tanpa Photoshop dan Microsoft Word</title>
    <meta name="description"
        content="Aplikasi cetak foto yang memudahkan anda menata pas foto sebelum dicetak atau print tanpa perlu install Photoshop dan Microsoft Word.">
    <meta name="keywords" content="aplikasi cetak foto, aplikasi print foto">
    <meta property="og:title" content="Aplikasi Cetak Foto Gratis | Print Foto tanpa Photoshop dan Microsoft Word">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Aplikasi cetak foto yang memudahkan anda menata pas foto sebelum dicetak atau print tanpa perlu install Photoshop dan Microsoft Word.">
    <meta property="og:site_name" content="Jasa Pembuatan Website Naevaweb">
    <meta property="og:locale" content="id_ID">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Aplikasi Cetak Foto Gratis | Print Foto tanpa Photoshop dan Microsoft Word">
    <meta name="twitter:description"
        content="Aplikasi cetak foto yang memudahkan anda menata pas foto sebelum dicetak atau print tanpa perlu install Photoshop dan Microsoft Word.">
    <meta property="og:image:width" content="768">
    <meta property="og:image:height" content="768">
    <meta property="og:image:alt" content="Aplikasi Cetak Foto Gratis | Print Foto tanpa Photoshop dan Microsoft Word">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Naevaweb.com">





    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
        type="text/css">
    <!-- Optional custom CSS -->
    <link href="custom/jspdf/naevaweb.com-builder.css" rel="stylesheet" type="text/css">
    <!-- jQuery Full Version -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"
        type="text/css">




    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>




    <script src="https://naevaweb.com/userfiles/asset/vendors/naevaweb/basic.js"></script>
    <link rel="alternate" type="application/rss+xml"
        title="Aplikasi Cetak Foto Gratis | Print Foto tanpa Photoshop dan Microsoft Word"
        href="https://naevaweb.com/feed/">

</head>

<body data-spy="scroll" data-target="#scrollspy" data-offset="0">
    <a id="top" class="clear"></a>
    <style>
        #drop-area {
            border: 2px dashed #ccc !important;
            text-align: center;
            padding: 50px;
            color: #999 !important;
            cursor: pointer !important;
        }

        #drop-area:hover {
            background: #f0f0f0 !important;
        }
    </style>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mynavbar");
                var bodytop = $(this).scrollTop();
                var bodymargin = 120;
                var navheight = $nav.height();
                var navtop = bodymargin - bodytop;
                if (navtop < 0) navtop = 0;
                $nav.toggleClass('navbar-scrolled', navheight < bodytop);
                $("#topwrapnav").toggleClass('d-none', navheight < bodytop);
            });
        });


        $('.dropdown-menu .dropdown-toggle').on('click', function () {

            var $el = $(this);
            var $parent = $el.offsetParent(".dropdown-menu");

            if (!$el.next().hasClass("show")) {
                $el.parents('.dropdown-menu').first().find(".show").removeClass("show");
            }
            $el.next(".dropdown-menu").toggleClass("show").parent("li").toggleClass("show");

            $el.parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", function () {
                $(".dropdown-menu .show").removeClass("show");
            });

            if (!$parent.parent().hasClass("navbar-nav")) {
                $el.next().css({
                    "top": $el[0].offsetTop,
                    "left": $parent.outerWidth()
                });
            }

            return false;
        });
    </script>
    <style>
        #drop-area.highlight {
            border-color: #555555;
        }

        #fileElem {
            display: none;
        }

        .defaultwhatsapp {
            display: none !important;
        }
    </style>
    </div>
    </div>
    </div>
    <div class="px-3 py-3 bg-white border d-flex justify-content-between"></div>
    </div>



    <div id="preview-pane"></div>

    <div class="container-fluid">
        <div class="row justify-content-center pb-5">
            <div class="col-xl-4 col-lg-4 col-md-5 mb-3" style="display: block;" id="previewPDF">
                <div class="px-2 py-1 small bg-dark text-white">PREVIEW</div>
                <div class="bg-secondary border text-center py-2" style="height:350px; overflow: auto;">
                    <div style="width:210px;" class="mx-auto">
                        <div class="bg-white mb-3 shadow" style="height: 297px; padding:0px;">
                            <div class="border position-relative" style="height: 297px;">
                                <img src="" width="178" height="undefined"
                                    style="position:absolute; top: 0px; left: 0px;">
                            </div>
                        </div>
                        <div class="bg-white mb-3 shadow" style="height: 297px; padding:0px;">
                            <div class="border position-relative" style="height: 297px;">

                            </div>
                        </div>

                        <div class="bg-white mb-3 shadow" style="height: 297px; padding:0px;">
                            <div class="border position-relative" style="height: 297px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-3 py-3 bg-white border d-flex justify-content-between">
                    <div>
                        <button type="button" class="btn btn-success d-none d-lg-inline-block"
                            onclick="downloadPDF('print')">Print</button> <button type="button"
                            class="btn btn-success d-inline-block d-lg-none"
                            onclick="modalSBoxAlert('<strong>Maaf browser ini tidak mendukung fitur print.</strong> <div>Silahkan download sebagai PDF lalu print menggunakan aplikasi atau perangkat lain.</div>')">Print</button>
                        <button type="button" class="btn btn-success" onclick="downloadPDF('download')">Download
                            PDF</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success" href="javascript:void(0)" data-toggle="modal"
                            data-target="#gtModal"><span class="fa fa-cog"></span><span class="d-none d-lg-inline">
                                Setting</span></button>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-7">
                <div id="drop-area" class="border rounded bg-white p-4 text-center mb-3 highlight">
                    <p style="font-size:1.125em;" class="pt-2">Drag banyak foto yang akan dicetak sekaligus.</p>
                    <input type="file" id="fileElem" multiple="" accept="image/*" onchange="handleFiles(this.files)">
                    <label class="btn btn-primary" for="fileElem"><i class="fa fa-upload mr-2"></i> Upload Foto</label>
                </div>
                <div class="px-2 px-md-0">
                    <div id="img-settings" class="row justify-content-start align-items-start no-gutters">

                    </div>
                </div>

            </div>
        </div>
        <a id="imageDownload"></a>
    </div>



    <!--
    <div class="text-center pt-2 pb-4">
        <a href="https://api.whatsapp.com/send?phone=6281215787470&text=Halo+Naevaweb+,+saya+punya+ide+untuk+aplikasi+cetak+foto:&source=&data=" class="btn btn-success">Kirim Saran / Request Fitur</a>
    </div>
    -->



    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                    <div class="img-container">
                        <img id="cropImage" src="" alt="Image to crop" style="max-width: 100%;">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center w-100">
                        <label for="aspectRatioSelect" class="mr-2">Aspect Ratio:</label>
                        <select id="aspectRatioSelect" class="form-control mr-auto">
                            <!-- <option value="NaN">Free</option>
                            <option value="1">Persegi</option>
                            <option value="0.6667">Pas Foto 2x3</option>
                            <option value="0.75">Pas Foto 3x4</option>
                            <option value="0.6667">Pas Foto 4x6</option>
                            <option value="1.91">Facebook Cover</option>
                            <option value="1.5">Foto 3R</option>
                            <option value="1.5">Foto 5R</option>
                            <option value="1.25">Foto 8R</option>
                            <option value="1.25">Foto 10R</option>
                            <option value="3">3x1</option>
                            <option value="0.5">1x2</option>
                            <option value="0.3333">1x3</option>
                            <option value="1">Foto Profile Lingkaran</option>
                            <option value="1.91">Facebook Post</option>
                            <option value="0.707">Kertas A4</option>
                            <option value="0.707">Kertas A5</option>
                            <option value="1.7778">16x9</option>
                            <option value="0.5625">9x16</option> -->
                        </select>
                        <button type="button" class="btn btn-success ml-2" id="confirmCrop">
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <div id="jsContainer">
        <script src="custom/jspdf/jspdf.umd.min.js"></script>
        <script>window.jsPDF = window.jspdf.jsPDF;</script>

        <script>
            let dropArea = document.getElementById("drop-area");
            let files;
            let amountDefault = 4;
            let setting;
            let photoID = 0;
            let photos = {};
            let paperWidth = 210;
            let paperHeight = 297;
            let paperRatio = 1.51176;

            // Generate number options for amount dropdown
            let numberOptions = '';
            for (let i = 1; i <= 50; i++) {
                let selected = (i == amountDefault) ? 'selected="selected"' : '';
                numberOptions += '<option value="' + i + '" ' + selected + '>' + i + ' buah</option>';
            }

            // Photo dimensions mapping
            let photoHeights = {
                "20": 40,    // Pas Foto 1x2
                "10": 30,    // Pas Foto 1x3
                "120": 40,   // Pas Foto 3x1
                "21.6": 27.9, // Pas Foto 2x3
                "27.9": 38.1, // Pas Foto 3x4
                "38.1": 55.9, // Pas Foto 4x6
                "90": 160,   // Pas Foto 9x16
                "160": 90,   // Pas Foto 16x9
                "63.5": 88.9, // Foto 2R
                "89": 127,   // Foto 3R
                "102": 152,  // Foto 4R
                "127": 178,  // Foto 5R
                "203": 254,  // Foto 8R
                "254": 305,  // Foto 10R
                "594": 420,  // Kertas A2
                "420": 297,  // Kertas A3
                "193": 280,  // Kertas A4
                "297": 210,  // Kertas A4 Landscape
                "148": 210,  // Kertas A5
                "100": 52,   // Facebook Cover
                "120": 63    // Facebook Post
            };

            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
                document.body.addEventListener(eventName, preventDefaults, false);
            });

            // Highlight drop area on drag over
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });

            // Handle dropped files
            dropArea.addEventListener('drop', handleDrop, false);

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            function highlight(e) {
                dropArea.classList.add('highlight');
            }

            function unhighlight(e) {
                dropArea.classList.remove('highlight');
            }

            function handleDrop(e) {
                let dt = e.dataTransfer;
                files = dt.files;
                handleFiles(files);
            }

            function handleFiles(files) {
                files = [...files];
                files.forEach(previewFile);
                $('#fileElem').val('');
            }

            function previewFile(file) {
                photoID++;
                let photoName = 'file' + photoID;
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onloadend = function () {
                    let maxWidth = 38.1;
                    let width, height, ratio;
                    let image = new Image();
                    image.src = reader.result;
                    image.onload = function () {
                        width = image.width;
                        height = image.height;
                        ratio = height / width;
                        if (ratio > paperRatio) {
                            maxWidth = Math.floor((paperWidth - 2 * setting['margin']) * (paperRatio / ratio));
                        }
                        photos[photoName] = {
                            data: reader.result, // Cropped or current image data
                            originalData: reader.result, // Store the original image data
                            amount: amountDefault,
                            ratio: ratio,
                            width: maxWidth,
                            maxWidth: maxWidth,
                            orientation: 'portrait'
                        };
                        const container = document.createElement('div');
                        container.className = 'col-lg-3 col-md-4 col-6 mb-3';
                        container.id = photoName;
                        const card = document.createElement('div');
                        card.className = 'bg-white border text-center';
                        const topWrapper = document.createElement('div');
                        topWrapper.className = 'position-relative';
                        const buttonBar = document.createElement('div');
                        buttonBar.className = 'position-absolute pt-2';
                        buttonBar.style.right = '8px';

                        // const zoomBtn = document.createElement('button');
                        // zoomBtn.type = 'button';
                        // zoomBtn.className = 'btn btn-sm btn-primary';
                        // zoomBtn.title = 'Perbesar Gambar Halaman';
                        // zoomBtn.onclick = () => zoomImage(photoName);
                        // zoomBtn.innerHTML = '<i class="fas fa-expand"></i>';

                        const dupBtn = document.createElement('button');
                        dupBtn.type = 'button';
                        dupBtn.className = 'btn btn-sm btn-primary';
                        dupBtn.title = 'Duplikat Gambar Halaman';
                        dupBtn.onclick = () => duplicateImage(photoName);
                        dupBtn.innerHTML = '<i class="far fa-clone"></i>';

                        const delBtn = document.createElement('button');
                        delBtn.type = 'button';
                        delBtn.className = 'btn btn-sm btn-danger';
                        delBtn.title = 'Hapus Gambar';
                        delBtn.onclick = () => deleteImage(photoName);
                        delBtn.innerHTML = '<i class="fas fa-trash-alt"></i>';


                        const cropBtn = document.createElement('button');
                        cropBtn.type = 'button';
                        cropBtn.className = 'btn btn-sm btn-primary';
                        cropBtn.innerHTML = '<i class="fas fa-crop"></i> Crop';
                        cropBtn.onclick = () => toggleCrop(photoName, cropBtn);


                        // buttonBar.appendChild(zoomBtn);
                        buttonBar.appendChild(cropBtn);
                        buttonBar.appendChild(dupBtn);
                        buttonBar.appendChild(delBtn);
                        topWrapper.appendChild(buttonBar);
                        card.appendChild(topWrapper);

                        const imgContainer = document.createElement('div');
                        const img = document.createElement('img');
                        img.src = reader.result;
                        img.alt = '';
                        img.className = 'w-100';
                        imgContainer.appendChild(img);
                        card.appendChild(imgContainer);

                        const settingsDiv = document.createElement('div');
                        settingsDiv.className = 'each-img-settings p-2 border-top';





                        // const sizeSelect = document.createElement('select');
                        // sizeSelect.id = photoName + '_size';
                        // sizeSelect.className = 'form-control form-control-sm';
                        // sizeSelect.onchange = () => resizeImage(photoName, sizeSelect.value);

                        // const sizes = [
                        //     { val: "50", label: "Persegi (Square)" }, // Square
                        //     { val: "40", label: "Pas Foto 1x2" }, // 1x2
                        //     { val: "30", label: "Pas Foto 1x3" }, // 1x3
                        //     { val: "40", label: "Pas Foto 3x1" }, // 3x1
                        //     { val: "27.9", label: "Pas Foto 2x3" }, // 2x3
                        //     { val: "38.1", label: "Pas Foto 3x4" }, // 3x4
                        //     { val: "55.9", label: "Pas Foto 4x6" }, // 4x6
                        //     { val: "160", label: "Pas Foto 9x16" }, // 9x16
                        //     { val: "90", label: "Pas Foto 16x9" }, // 16x9
                        //     { val: "88.9", label: "Foto 2R" }, // 2R
                        //     { val: "127", label: "Foto 3R" }, // 3R
                        //     { val: "152", label: "Foto 4R" }, // 4R
                        //     { val: "178", label: "Foto 5R" }, // 5R
                        //     { val: "254", label: "Foto 8R" }, // 8R
                        //     { val: "305", label: "Foto 10R" }, // 10R
                        //     { val: "420", label: "Kertas A2" }, // A2
                        //     { val: "297", label: "Kertas A3" }, // A3
                        //     { val: "280", label: "Kertas A4" }, // A4
                        //     { val: "210", label: "Kertas A4 Landscape" }, // A4 Landscape
                        //     { val: "210", label: "Kertas A5" }, // A5
                        //     { val: "52", label: "Facebook Cover" }, // Facebook Cover
                        //     { val: "63", label: "Facebook Post" } // Facebook Post
                        // ];

                        // sizes.forEach(opt => {
                        //     const option = document.createElement('option');
                        //     option.value = opt.val;
                        //     option.textContent = opt.label;
                        //     sizeSelect.appendChild(option);
                        // });

                        // const sizeWrapper = document.createElement('div');
                        // sizeWrapper.className = 'determine-related-img-size-in-preview flex-fill';
                        // sizeWrapper.appendChild(sizeSelect);
                        // settingsDiv.appendChild(sizeWrapper);




                        const amountSelect = document.createElement('select');
                        amountSelect.id = photoName + '_amount';
                        amountSelect.className = 'form-control form-control-sm';
                        amountSelect.onchange = () => amountImage(photoName, amountSelect.value);
                        amountSelect.innerHTML = numberOptions;

                        const amountWrapper = document.createElement('div');
                        amountWrapper.className = 'pt-1';
                        amountWrapper.style.minWidth = '40px';
                        amountWrapper.appendChild(amountSelect);

                        const orientationSelect = document.createElement('select');
                        orientationSelect.id = photoName + '_orientation';
                        orientationSelect.className = 'form-control form-control-sm';
                        orientationSelect.onchange = () => changeOrientation(photoName, orientationSelect.value);

                        ['portrait', 'landscape'].forEach(val => {
                            const option = document.createElement('option');
                            option.value = val;
                            option.textContent = val.charAt(0).toUpperCase() + val.slice(1);
                            orientationSelect.appendChild(option);
                        });

                        const orientationWrapper = document.createElement('div');
                        orientationWrapper.className = 'pt-1';
                        orientationWrapper.style.minWidth = '40px';
                        orientationWrapper.appendChild(orientationSelect);


                        settingsDiv.appendChild(amountWrapper);
                        settingsDiv.appendChild(orientationWrapper);
                        card.appendChild(settingsDiv);
                        container.appendChild(card);
                        document.getElementById('img-settings').appendChild(container);
                        previewPDF();
                    };
                };
            }

            function zoomImage(i) {
                modalSBoxOpenImage(photos[i].data);
            }

            function deleteImage(i) {
                delete photos[i];
                $('#' + i).css('display', 'none');
                previewPDF();
            }

            function duplicateImage(i) {
                photoID++;
                let photoName = 'file' + photoID;
                photos[photoName] = Object.assign({}, photos[i]);
                const container = document.createElement('div');
                container.className = 'col-lg-3 col-md-4 col-6 mb-3';
                container.id = photoName;
                const card = document.createElement('div');
                card.className = 'bg-white border text-center';
                const topWrapper = document.createElement('div');
                topWrapper.className = 'position-relative';
                const buttonBar = document.createElement('div');
                buttonBar.className = 'position-absolute pt-2';
                buttonBar.style.right = '8px';

                const dupBtn = document.createElement('button');
                dupBtn.type = 'button';
                dupBtn.className = 'btn btn-sm btn-primary';
                dupBtn.title = 'Duplikat Gambar Halaman';
                dupBtn.onclick = () => duplicateImage(photoName);
                dupBtn.innerHTML = '<i class="far fa-clone"></i>';

                const delBtn = document.createElement('button');
                delBtn.type = 'button';
                delBtn.className = 'btn btn-sm btn-danger';
                delBtn.title = 'Hapus Gambar';
                delBtn.onclick = () => deleteImage(photoName);
                delBtn.innerHTML = '<i class="fas fa-trash-alt"></i>';

                buttonBar.appendChild(dupBtn);
                buttonBar.appendChild(delBtn);
                topWrapper.appendChild(buttonBar);
                card.appendChild(topWrapper);

                const imgContainer = document.createElement('div');
                const img = document.createElement('img');
                img.src = photos[photoName].data;
                img.alt = '';
                img.className = 'w-100';
                imgContainer.appendChild(img);
                card.appendChild(imgContainer);

                const settingsDiv = document.createElement('div');
                settingsDiv.className = 'each-img-settings p-2 border-top';

                const amountSelect = document.createElement('select');
                amountSelect.id = photoName + '_amount';
                amountSelect.className = 'form-control form-control-sm';
                amountSelect.onchange = () => amountImage(photoName, amountSelect.value);
                amountSelect.innerHTML = numberOptions;

                const amountWrapper = document.createElement('div');
                amountWrapper.className = 'pt-1';
                amountWrapper.style.minWidth = '40px';
                amountWrapper.appendChild(amountSelect);

                const orientationSelect = document.createElement('select');
                orientationSelect.id = photoName + '_orientation';
                orientationSelect.className = 'form-control form-control-sm';
                orientationSelect.onchange = () => changeOrientation(photoName, orientationSelect.value);

                ['portrait', 'landscape'].forEach(val => {
                    const option = document.createElement('option');
                    option.value = val;
                    option.textContent = val.charAt(0).toUpperCase() + val.slice(1);
                    orientationSelect.appendChild(option);
                });

                const orientationWrapper = document.createElement('div');
                orientationWrapper.className = 'pt-1';
                orientationWrapper.style.minWidth = '40px';
                orientationWrapper.appendChild(orientationSelect);

                settingsDiv.appendChild(amountWrapper);
                settingsDiv.appendChild(orientationWrapper);
                card.appendChild(settingsDiv);
                container.appendChild(card);
                document.getElementById('img-settings').appendChild(container);

                // Ensure the dropdown exists before setting its value
                const sizeDropdown = document.getElementById(photoName + '_size');
                if (sizeDropdown) {
                    sizeDropdown.value = photos[photoName].width;
                }

                document.getElementById(photoName + '_amount').value = photos[photoName].amount;
                previewPDF();
            }

            // // function resizeImage(photoName, width) {
            // //     const height = photoHeights[width]; // Ambil height dari mapping photoHeights
            // //     photos[photoName]['width'] = width;
            // //     photos[photoName]['height'] = height; // Perbarui height
            // //     previewPDF(); // Refresh preview
            // // }


            // function resizeImage(i, v) {
            //     photos[i]['width'] = v;
            //     previewPDF();
            // }

            function resizeImage(photoName, width) {
                const height = photoHeights[width]; // Get height from mapping
                if (!width || !height) {
                    console.error(`Invalid dimensions for photo: ${photoName}. Width: ${width}, Height: ${height}`);
                    return;
                }
                photos[photoName]['width'] = width;
                photos[photoName]['height'] = height; // Update height
                previewPDF(); // Refresh preview
            }


            function amountImage(i, v) {
                photos[i]['amount'] = v;
                previewPDF();
            }

            function changeOrientation(photoName, orientation) {
                photos[photoName]['orientation'] = orientation;
                previewPDF();
            }



            function previewPDF() {
                if (!setting) {
                    setting = {
                        paperSize: 'a4',
                        margin: 8,
                        spacing: 3,
                        line: 0
                    };
                }
                if (Object.keys(photos).length === 0) {
                    document.getElementById('previewPDF').style.display = 'none';
                } else {
                    document.getElementById('previewPDF').style.display = 'block';
                }

                let top = 0;
                let left = 0;
                let currentHeight = 0;
                let maxRight = paperWidth - 2 * setting['margin'];
                let maxBottom = paperHeight - setting['margin'];
                let html = '<div class="px-2 py-1 small bg-dark text-white">PREVIEW</div>';
                html += '<div class="bg-secondary border text-center py-2" style="height:350px; overflow: auto;">';
                html += '<div style="width:210px;" class="mx-auto">';
                html += '<div class="bg-white mb-3 shadow" style="height: ' + paperHeight + 'px; padding:' + setting['margin'] + 'px;">';
                html += '<div class="border position-relative" style="height: ' + (maxBottom - setting['margin']) + 'px;">';

                let pi = 0;
                for (let x in photos) {
                    if (setting['line'] === 1 && pi > 0) {
                        left = 0;
                        top += currentHeight + setting['spacing'];
                        currentHeight = 0;
                    }

                    let amount = parseInt(photos[x]['amount']);
                    let width = parseInt(photos[x]['width']);
                    let height = photoHeights[photos[x]['width']];

                    // Swap dimensions for landscape orientation
                    if (photos[x]['orientation'] === 'landscape') {
                        [width, height] = [height, width]; // Swap width and height
                        html += `<img src="${photos[x]['data']}"
        style="position:absolute; top:${top}px; left:${left}px;
        width:${height}px; height:${width}px;
        transform: rotate(90deg); transform-origin: ${left}px ${top}px;" />`;
                    } else {
                        html += `<img src="${photos[x]['data']}"
        style="position:absolute; top:${top}px; left:${left}px;
        width:${width}px; height:${height}px;" />`;
                    }

                    for (let y = 0; y < amount; y++) {
                        let imgWidth = width;
                        let imgHeight = height;

                        const MAX_WIDTH = paperWidth - 2 * setting['margin'];
                        const MAX_HEIGHT = paperHeight - 2 * setting['margin'];

                        // Scale image if needed
                        if (imgWidth > MAX_WIDTH || imgHeight > MAX_HEIGHT) {
                            let scale = Math.min(MAX_WIDTH / imgWidth, MAX_HEIGHT / imgHeight);
                            imgWidth *= scale;
                            imgHeight *= scale;
                        }

                        let right = left + imgWidth;

                        if (right <= maxRight) {
                            html += `<img src="${photos[x]['data']}" width="${imgWidth}" height="${imgHeight}"
                style="position:absolute; top:${top}px; left:${left}px;
                ${photos[x]['orientation'] === 'landscape' ? 'transform: rotate(90deg); transform-origin: top left;' : ''}" />`;
                            left = right + setting['spacing'];
                            if (imgHeight > currentHeight) currentHeight = imgHeight;
                        } else {
                            left = 0;
                            top += currentHeight + setting['spacing'];
                            let bottom = top + imgHeight;

                            if (bottom <= maxBottom) {
                                html += `<img src="${photos[x]['data']}" width="${imgWidth}" height="${imgHeight}"
                    style="position:absolute; top:${top}px; left:${left}px;
                    ${photos[x]['orientation'] === 'landscape' ? 'transform: rotate(90deg); transform-origin: top left;' : ''}" />`;
                                left = imgWidth + setting['spacing'];
                                currentHeight = imgHeight;
                            } else {
                                html += '</div></div>';
                                html += '<div class="bg-white mb-3 shadow" style="height: ' + paperHeight + 'px; padding:' + setting['margin'] + 'px;">';
                                html += '<div class="border position-relative" style="height: ' + (maxBottom - setting['margin']) + 'px;">';

                                top = 0;

                                html += `<img src="${photos[x]['data']}" width="${imgWidth}" height="${imgHeight}"
                    style="position:absolute; top:${top}px; left:${left}px;
                    ${photos[x]['orientation'] === 'landscape' ? 'transform: rotate(90deg); transform-origin: top left;' : ''}" />`;
                                left = imgWidth + setting['spacing'];
                                currentHeight = imgHeight;
                            }
                        }
                        pi++;
                    }
                }

                html += '</div></div></div></div>'; // Close all divs

                html += `
        <div class="px-3 py-3 bg-white border d-flex justify-content-between">
            <div>
                <button type="button" class="btn btn-success d-none d-lg-inline-block" onclick="downloadPDF('print')">Print</button>
                <button type="button" class="btn btn-success d-inline-block d-lg-none" onclick="modalSBoxAlert('<strong>Maaf browser ini tidak mendukung fitur print.</strong> <div>Silahkan download sebagai PDF lalu print menggunakan aplikasi atau perangkat lain.</div>')">Print</button>
                <button type="button" class="btn btn-success" onclick="downloadPDF('download')">Download PDF</button>
            </div>
            <div>
                <button type="button" class="btn btn-success" href="javascript:void(0)" data-toggle="modal" data-target="#gtModal"><span class="fa fa-cog"></span><span class="d-none d-lg-inline"> Setting</span></button>
            </div>
        </div>
    `;

                document.getElementById('previewPDF').innerHTML = html;
            }




            var doc;
            function downloadPDF(mode) {
                doc = new jsPDF('p', 'mm', 'a4');
                let top = setting['margin'];
                let left = setting['margin'];
                let currentHeight = 0;
                let maxRight = (paperWidth - 2 * setting['margin']) + setting['margin'];
                let maxBottom = (paperHeight - setting['margin']) + setting['margin'];
                let pi = 0;

                for (let x in photos) {
                    if (setting['line'] == 1 && pi > 0) {
                        left = setting['margin'];
                        top = top + currentHeight + setting['spacing'];
                        currentHeight = 0;
                    }

                    let amount = 1 * parseInt(photos[x]['amount']);
                    let width = 1 * parseInt(photos[x]['width']);
                    let height = photoHeights[photos[x]['width']];

                    // Validate dimensions
                    if (!width || !height || isNaN(width) || isNaN(height)) {
                        console.error(`Invalid dimensions for photo: ${x}. Width: ${width}, Height: ${height}`);
                        continue; // Skip this photo if dimensions are invalid
                    }

                    let rotationAngle = 0;
                    if (photos[x]['orientation'] === 'landscape') {
                        rotationAngle = 90; // Rotate 90 degrees
                        [width, height] = [height, width]; // Swap width and height
                        doc.addImage(
                            photos[x]['data'],
                            "JPEG",
                            left,
                            top,
                            height, // Use swapped dimensions
                            width,
                            null,
                            'SLOW',
                            rotationAngle
                        );
                    } else {
                        doc.addImage(
                            photos[x]['data'],
                            "JPEG",
                            left,
                            top,
                            width,
                            height,
                            null,
                            'SLOW'
                        );
                    }
                    for (let y = 0; y < amount; y++) {
                        let right = left + width;

                        if (right <= maxRight) {
                            doc.addImage(photos[x]['data'], "JPEG", left, top, width, height, null, 'SLOW', rotationAngle);
                            left = right + setting['spacing'];
                            if (height > currentHeight) currentHeight = height;
                        } else {
                            left = setting['margin'];
                            top = top + currentHeight + setting['spacing'];
                            let bottom = top + height;

                            if (bottom <= maxBottom) {
                                doc.addImage(photos[x]['data'], "JPEG", left, top, width, height, null, 'SLOW', rotationAngle);
                                left = left + width + setting['spacing'];
                                currentHeight = height;
                            } else {
                                doc.addPage("a4", "p");
                                top = setting['margin'];
                                doc.addImage(photos[x]['data'], "JPEG", left, top, width, height, null, 'SLOW', rotationAngle);
                                left = left + width + setting['spacing'];
                                currentHeight = height;
                            }
                        }
                    }
                    pi++;
                }

                if (mode == 'download') {
                    let today = new Date();
                    let date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                    let time = today.getHours() + "-" + today.getMinutes();
                    let dateTime = date + '-' + time;
                    doc.save('cetak-foto-' + dateTime + '.pdf');
                } else if (mode == 'print') {
                    doc.autoPrint();
                    doc.output('dataurlnewwindow');
                }
            }

            function gSetup() {
                if (localStorage.getItem("cetak-setting") === null) {
                    setting = {
                        paperSize: 'a4',
                        margin: 8,
                        spacing: 3,
                        line: 0
                    };
                    localStorage.setItem("cetak-setting", JSON.stringify(setting));
                } else {
                    let settingJSON = localStorage.getItem('cetak-setting');
                    setting = JSON.parse(settingJSON);
                }
                for (var s in setting) {
                    $('#setting-' + s).val(setting[s]);
                }
                setting['margin'] = parseInt(setting['margin']) || 8;
                setting['spacing'] = parseInt(setting['spacing']) || 3;
                setting['line'] = parseInt(setting['line']) || 0;
            }

            gSetup();

            function gSettingSave() {
                for (var s in setting) {
                    setting[s] = $('#setting-' + s).val();
                }
                setting['margin'] = parseInt($('#setting-margin').val()) || 8;
                setting['spacing'] = parseInt($('#setting-spacing').val()) || 3;
                setting['line'] = parseInt($('#setting-line').val()) || 0;
                localStorage.setItem("cetak-setting", JSON.stringify(setting));
                $('#gtModal').modal('hide');
                previewPDF();
            }
        </script>
    </div>


    <div class="modal fade" id="gtModal" tabindex="-1" role="dialog" aria-labelledby="gtModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gtModalLabel">Setting</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body bg-light" id="gtModalBody">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <label for="setting-paperSize">Ukuran Kertas</label>
                            <div>
                                <select id="setting-paperSize" class="form-control form-control-sm">
                                    <option value="a4" selected="selected">A4 - 210 x 297 mm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label for="setting-margin">Margin</label>
                            <div>
                                <select id="setting-margin" class="form-control form-control-sm">
                                    <option value="0">0 mm</option>
                                    <option value="1">1 mm</option>
                                    <option value="5">5 mm</option>
                                    <option value="8" selected="selected">8 mm</option>
                                    <option value="10">10 mm</option>
                                    <option value="15">15 mm</option>
                                    <option value="20">20 mm</option>
                                    <option value="25">25 mm</option>
                                    <option value="30">30 mm</option>
                                    <option value="35">35 mm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label for="setting-spacing">Spacing</label>
                            <div>
                                <select id="setting-spacing" class="form-control form-control-sm">
                                    <option value="0">0 mm</option>
                                    <option value="1">1 mm</option>
                                    <option value="2">2 mm</option>
                                    <option value="3" selected="selected">3 mm</option>
                                    <option value="4">4 mm</option>
                                    <option value="5">5 mm</option>
                                    <option value="6">6 mm</option>
                                    <option value="7">7 mm</option>
                                    <option value="8">8 mm</option>
                                    <option value="9">9 mm</option>
                                    <option value="10">10 mm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label for="setting-line">Tampilan Foto</label>
                            <div>
                                <select id="setting-line" class="form-control form-control-sm">
                                    <option value="0" selected="selected">Hemat Kertas</option>
                                    <option value="1">Foto Baru Baris Baru</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="gSettingSave()"><span
                            class="fas fa-check mr-1"></span> Simpan</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        modalSBoxSetup();
    </script>




    <script>
        const aspectRatioDimensions = {
            "none": { label: "Free", ratio: NaN, width: null, height: null, sizes: null, photoHeight: null }, // Free aspect ratio
            "1": { label: "Persegi (Square)", ratio: 1, width: 50, height: 50, sizes: "50", photoHeight: "50" }, // Persegi (Square)
            "2": { label: "Pas Foto 1x2", ratio: 1 / 2, width: 20, height: 40, sizes: "20", photoHeight: "40" }, // 1x2
            "3": { label: "Pas Foto 1x3", ratio: 1 / 3, width: 10, height: 30, sizes: "10", photoHeight: "30" }, // 1x3
            "4": { label: "Pas Foto 3x1", ratio: 3, width: 120, height: 40, sizes: "120", photoHeight: "40" }, // 3x1
            "5": { label: "Pas Foto 2x3", ratio: 2 / 3, width: 21.6, height: 27.9, sizes: "21.6", photoHeight: "27.9" }, // Pas Foto 2x3
            "6": { label: "Pas Foto 3x4", ratio: 3 / 4, width: 27.9, height: 38.1, sizes: "27.9", photoHeight: "38.1" }, // Pas Foto 3x4
            "7": { label: "Pas Foto 4x6", ratio: 4 / 6, width: 38.1, height: 55.9, sizes: "38.1", photoHeight: "55.9" }, // Pas Foto 4x6
            "8": { label: "Pas Foto 9x16", ratio: 9 / 16, width: 90, height: 160, sizes: "90", photoHeight: "160" }, // 9x16
            "9": { label: "Pas Foto 16x9", ratio: 16 / 9, width: 160, height: 90, sizes: "160", photoHeight: "90" }, // 16x9

            "10": { label: "Foto 2R", ratio: 2 / 3, width: 63.5, height: 88.9, sizes: "63.5", photoHeight: "88.9" }, // Foto 2R
            "11": { label: "Foto 3R", ratio: 2 / 3, width: 89, height: 127, sizes: "89", photoHeight: "127" }, // Foto 3R
            "12": { label: "Foto 4R", ratio: 2 / 3, width: 102, height: 152, sizes: "102", photoHeight: "152" }, // Foto 4R
            "13": { label: "Foto 5R", ratio: 2 / 3, width: 127, height: 178, sizes: "127", photoHeight: "178" }, // Foto 5R
            "14": { label: "Foto 8R", ratio: 4 / 5, width: 203, height: 254, sizes: "203", photoHeight: "254" }, // Foto 8R
            "15": { label: "Foto 10R", ratio: 4 / 5, width: 254, height: 305, sizes: "254", photoHeight: "305" }, // Foto 10R


            "16": { label: "Kertas A2", ratio: 594 / 420, width: 594, height: 420, sizes: "594", photoHeight: "420" }, // Kertas A2
            "17": { label: "Kertas A3", ratio: 420 / 297, width: 420, height: 297, sizes: "420", photoHeight: "297" }, // Kertas A3
            "18": { label: "Kertas A4", ratio: 210 / 297, width: 193, height: 280, sizes: "193", photoHeight: "280" }, // Kertas A4
            "19": { label: "Kertas A4 Landscape", ratio: 297 / 210, width: 297, height: 210, sizes: "297", photoHeight: "210" }, // Kertas A4 Landscape
            "20": { label: "Kertas A5", ratio: 148 / 210, width: 148, height: 210, sizes: "148", photoHeight: "210" }, // Kertas A5

            "21": { label: "Facebook Cover", ratio: 1.91, width: 100, height: 52, sizes: "100", photoHeight: "52" }, // Facebook Cover
            "22": { label: "Facebook Post", ratio: 1.91, width: 120, height: 63, sizes: "120", photoHeight: "63" }, // Facebook Post
        };

        const aspectRatioSelect = document.getElementById('aspectRatioSelect');
        // Clear existing options
        aspectRatioSelect.innerHTML = '';
        Object.keys(aspectRatioDimensions).forEach(key => {
            const { label } = aspectRatioDimensions[key];
            if (label) { // Ensure valid entries
                const option = document.createElement('option');
                option.value = key;
                option.textContent = label;
                aspectRatioSelect.appendChild(option);
            }
        });



        function toggleCrop(photoName, cropBtn) {
            if (cropBtn.dataset.mode === 'uncrop') {
                // Uncrop the image
                if (photos[photoName] && photos[photoName].originalData) {
                    photos[photoName].data = photos[photoName].originalData;

                    // Update the image in the gallery
                    const imgElement = document.querySelector(`#${photoName} img`);
                    imgElement.src = photos[photoName].originalData;

                    // Reset size to original
                    imgElement.style.width = 'auto';
                    imgElement.style.height = 'auto';

                    // Reset the dropdown size
                    const sizeSelect = document.getElementById(`${photoName}_size`);
                    if (sizeSelect) {
                        sizeSelect.value = ''; // Reset dropdown
                    }

                    // Refresh the PDF preview
                    previewPDF();

                    // Switch back to crop mode
                    cropBtn.dataset.mode = 'crop';
                    cropBtn.innerHTML = '<i class="fas fa-crop"></i> Crop';
                } else {
                    console.error('Original image data not found.');
                }
            } else {
                // Enable crop mode
                enableCropMode(photoName, cropBtn);
            }
        }






        function enableCropMode(photoName, cropBtn) {
            const imageData = photos[photoName].data;
            document.getElementById('cropImage').src = imageData;
            $('#cropModal').modal('show'); // Show the crop modal

            // Initialize Cropper.js when the modal is shown
            $('#cropModal').off('shown.bs.modal').on('shown.bs.modal', function () {
                const image = document.getElementById('cropImage');
                cropper = new Cropper(image, {
                    aspectRatio: NaN, // Default to free aspect ratio
                    viewMode: 1,
                    movable: true,
                    zoomable: true,
                    rotatable: true,
                    scalable: true,
                    ready() {
                        // Apply the selected aspect ratio on initialization
                        const selectedAspectRatio = document.getElementById('aspectRatioSelect').value;
                        const aspectRatio = parseFloat(aspectRatioDimensions[selectedAspectRatio]?.ratio || NaN);
                        cropper.setAspectRatio(aspectRatio);
                    }
                });

                // Update aspect ratio dynamically
                document.getElementById('aspectRatioSelect').addEventListener('change', function () {
                    const selectedAspectRatio = this.value;
                    const aspectRatio = parseFloat(aspectRatioDimensions[selectedAspectRatio]?.ratio || NaN);
                    cropper.setAspectRatio(aspectRatio);

                    // Log for debugging
                    console.log('Selected Aspect Ratio:', selectedAspectRatio);
                    console.log('Applied Aspect Ratio:', aspectRatio);
                });

                // Confirm crop and update the image
                document.getElementById('confirmCrop').onclick = function () {
                    const canvas = cropper.getCroppedCanvas();

                    if (!canvas || canvas.width === 0 || canvas.height === 0) {
                        console.error('Invalid cropped canvas dimensions.');
                        return;
                    }

                    const croppedImage = canvas.toDataURL('image/jpeg');
                    photos[photoName].data = croppedImage; // Update the photo data

                    // Get the selected aspect ratio
                    const selectedAspectRatio = document.getElementById('aspectRatioSelect').value;

                    // Validate sizes before calling resizeImage
                    if (aspectRatioDimensions[selectedAspectRatio]) {
                        const { sizes } = aspectRatioDimensions[selectedAspectRatio];
                        if (sizes) {
                            resizeImage(photoName, sizes); // Update dimensions and refresh preview
                        } else {
                            console.error(`Invalid sizes for aspect ratio: ${selectedAspectRatio}`);
                        }
                    } else {
                        // Default to the cropped canvas dimensions
                        photos[photoName].width = canvas.width;
                        photos[photoName].height = canvas.height;

                        // Call resizeImage with the cropped dimensions
                        resizeImage(photoName, canvas.width);
                    }

                    // Switch the crop button to uncrop mode
                    cropBtn.dataset.mode = 'uncrop';
                    cropBtn.innerHTML = '<i class="fas fa-undo"></i> Uncrop';

                    $('#cropModal').modal('hide');
                };
            });

            // Destroy Cropper.js when the modal is hidden
            $('#cropModal').off('hidden.bs.modal').on('hidden.bs.modal', function () {
                if (cropper) {
                    cropper.destroy();
                    cropper = null;
                }
            });
        }






    </script>



</body>

</html>
