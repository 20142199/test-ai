<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Generator</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8fafc;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-textarea {
            width: 100%;
            min-height: 120px;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            resize: vertical;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        .form-textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .file-input-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-input {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-input-label {
            display: block;
            padding: 12px 16px;
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #f9fafb;
        }

        .file-input-label:hover {
            border-color: #3b82f6;
            background-color: #eff6ff;
        }

        .file-input-label.has-file {
            border-color: #10b981;
            background-color: #ecfdf5;
            border-style: solid;
        }

        .image-preview-container {
            margin-top: 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .image-preview-item {
            position: relative;
            width: 80px;
            height: 80px;
            border-radius: 8px;
            overflow: hidden;
            border: 2px solid #e5e7eb;
        }

        .image-preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-preview-item .remove-btn {
            position: absolute;
            top: -8px;
            right: -8px;
            width: 20px;
            height: 20px;
            background: #ef4444;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .file-count {
            font-size: 12px;
            color: #6b7280;
            margin-top: 4px;
        }

        .blocks-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8fafc;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .block-item {
            margin-bottom: 20px;
            padding: 16px;
            background: white;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .block-title {
            font-size: 16px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 12px;
        }

        .submit-btn {
            width: 100%;
            padding: 14px 24px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 30px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .hidden {
            display: none;
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="form-title">Landing Page Generator</h1>

        @if(session('success'))
            <div style="background-color: #d1fae5; color: #065f46; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #a7f3d0;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div style="background-color: #fee2e2; color: #991b1b; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #fca5a5;">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div style="background-color: #fee2e2; color: #991b1b; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #fca5a5;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="landingForm" method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Logo Upload -->
            <div class="form-group">
                <label class="form-label" for="logo">Logo</label>
                <div class="file-input-wrapper">
                    <input type="file" id="logo" name="logo" class="file-input" accept="image/*" onchange="handleFileSelect(this)">
                    <label for="logo" class="file-input-label" id="logoLabel">
                        <span id="logoText">Click to upload logo or drag and drop</span>
                    </label>
                </div>
            </div>

            <!-- Header Content -->
            <div class="form-group">
                <label class="form-label" for="header">Header</label>
                <textarea
                    id="header"
                    name="header"
                    class="form-textarea"
                    placeholder="Enter header content here..."
                    rows="4"
                ></textarea>
            </div>

            <!-- Number of Blocks -->
            <div class="form-group">
                <label class="form-label" for="blockCount">Số lượng block</label>
                <input
                    type="number"
                    id="blockCount"
                    name="blockCount"
                    class="form-input"
                    min="1"
                    max="20"
                    value="1"
                    onchange="generateBlocks()"
                    placeholder="Enter number of blocks"
                >
            </div>

            <!-- Dynamic Blocks Container -->
            <div id="blocksContainer" class="blocks-container hidden">
                <h3 style="margin-top: 0; color: #374151;">Block Contents</h3>
                <div id="blocksList"></div>
            </div>

            <!-- Footer Content -->
            <div class="form-group">
                <label class="form-label" for="footer">Footer</label>
                <textarea
                    id="footer"
                    name="footer"
                    class="form-textarea"
                    placeholder="Enter footer content here..."
                    rows="4"
                ></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">
                Generate Landing Page
            </button>
        </form>
    </div>

    <script>
        // Handle file selection
        function handleFileSelect(input) {
            const label = input.nextElementSibling;
            const text = label.querySelector('span');
            const blockId = input.id;

            if (input.files && input.files.length > 0) {
                label.classList.add('has-file');
                
                if (input.files.length === 1) {
                    text.textContent = `Selected: ${input.files[0].name}`;
                } else {
                    text.textContent = `Selected: ${input.files.length} files`;
                }

                // Show image previews for block images
                if (blockId.startsWith('images-')) {
                    showImagePreviews(input, blockId);
                }
            } else {
                label.classList.remove('has-file');
                text.textContent = 'Click to upload images or drag and drop';
                
                // Clear image previews for block images
                if (blockId.startsWith('images-')) {
                    clearImagePreviews(blockId);
                }
            }
        }

        // Show image previews for block images
        function showImagePreviews(input, blockId) {
            const blockItem = input.closest('.block-item');
            let previewContainer = blockItem.querySelector('.image-preview-container');
            
            if (!previewContainer) {
                previewContainer = document.createElement('div');
                previewContainer.className = 'image-preview-container';
                input.parentNode.parentNode.appendChild(previewContainer);
            }
            
            previewContainer.innerHTML = '';
            
            Array.from(input.files).forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const previewItem = document.createElement('div');
                        previewItem.className = 'image-preview-item';
                        previewItem.innerHTML = `
                            <img src="${e.target.result}" alt="Preview ${index + 1}">
                            <button type="button" class="remove-btn" onclick="removeImagePreview(this, '${blockId}', ${index})">×</button>
                        `;
                        previewContainer.appendChild(previewItem);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Clear image previews
        function clearImagePreviews(blockId) {
            const blockItem = document.querySelector(`#${blockId}`).closest('.block-item');
            const previewContainer = blockItem.querySelector('.image-preview-container');
            if (previewContainer) {
                previewContainer.innerHTML = '';
            }
        }

        // Remove individual image preview
        function removeImagePreview(button, blockId, index) {
            const input = document.getElementById(blockId);
            const dt = new DataTransfer();
            
            Array.from(input.files).forEach((file, i) => {
                if (i !== index) {
                    dt.items.add(file);
                }
            });
            
            input.files = dt.files;
            handleFileSelect(input);
        }

        // Generate dynamic blocks
        function generateBlocks() {
            const blockCount = parseInt(document.getElementById('blockCount').value);
            const blocksContainer = document.getElementById('blocksContainer');
            const blocksList = document.getElementById('blocksList');

            // Clear existing blocks
            blocksList.innerHTML = '';

            if (blockCount > 0) {
                blocksContainer.classList.remove('hidden');

                // Generate new blocks
                for (let i = 1; i <= blockCount; i++) {
                    const blockDiv = document.createElement('div');
                    blockDiv.className = 'block-item fade-in';
                    blockDiv.innerHTML = `
                        <div class="block-title">Block ${i}</div>
                        <textarea
                            name="blocks[${i}]"
                            class="form-textarea"
                            placeholder="Enter content for block ${i}..."
                            rows="3"
                        ></textarea>
                        <label class="form-label" for="images-${i}">Images (Multiple)</label>
                        <div class="file-input-wrapper">
                            <input type="file" id="images-${i}" name="images[${i}]" multiple class="file-input" accept="image/*" onchange="handleFileSelect(this)">
                            <label for="images-${i}" class="file-input-label" id="imagesLabel-block-${i}">
                                <span>Click to upload images or drag and drop</span>
                            </label>
                        </div>
                    </div>
                    `;
                    blocksList.appendChild(blockDiv);
                }
                
                // Add drag and drop listeners to new file inputs
                addDragDropListeners();
            } else {
                blocksContainer.classList.add('hidden');
            }
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            generateBlocks();
        });

        // Add drag and drop functionality for all file inputs
        function addDragDropListeners() {
            const fileInputs = document.querySelectorAll('input[type="file"]');
            
            fileInputs.forEach(input => {
                const label = input.nextElementSibling;
                
                label.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    label.style.borderColor = '#3b82f6';
                    label.style.backgroundColor = '#eff6ff';
                });

                label.addEventListener('dragleave', function(e) {
                    e.preventDefault();
                    label.style.borderColor = '#d1d5db';
                    label.style.backgroundColor = '#f9fafb';
                });

                label.addEventListener('drop', function(e) {
                    e.preventDefault();
                    label.style.borderColor = '#d1d5db';
                    label.style.backgroundColor = '#f9fafb';

                    const files = e.dataTransfer.files;
                    if (files.length > 0) {
                        input.files = files;
                        handleFileSelect(input);
                    }
                });
            });
        }

        // Initialize drag and drop for existing inputs
        addDragDropListeners();

        // Form validation
        document.getElementById('landingForm').addEventListener('submit', function(e) {
            const blockCount = parseInt(document.getElementById('blockCount').value);
            const blocks = document.querySelectorAll('textarea[name^="blocks["]');

            if (blockCount > 0 && blocks.length === 0) {
                e.preventDefault();
                alert('Please wait for blocks to be generated before submitting.');
                return false;
            }

            // Basic validation
            const header = document.getElementById('header').value.trim();
            const footer = document.getElementById('footer').value.trim();

            if (!header && !footer && blockCount === 0) {
                e.preventDefault();
                alert('Please fill in at least one field.');
                return false;
            }
        });
    </script>
</body>
</html>
