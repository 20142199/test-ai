<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Component Demo</title>
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            padding: 40px;
            background-color: #f8f9fa;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h1, h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .demo-section {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .demo-row {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .demo-block {
            margin-bottom: 20px;
        }
        
        code {
            background: #f4f4f4;
            padding: 12px;
            border-radius: 4px;
            font-size: 13px;
            display: block;
            margin-top: 10px;
            overflow-x: auto;
        }
        
        .label {
            font-weight: 600;
            margin-bottom: 10px;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Button Component Demo</h1>
    
    <div class="demo-section">
        <h2>Các biến thể nút (Button Variants)</h2>
        <div class="demo-row">
            @include('common.button', ['text' => 'Primary', 'variant' => 'primary'])
            @include('common.button', ['text' => 'Secondary', 'variant' => 'secondary'])
            @include('common.button', ['text' => 'Success', 'variant' => 'success'])
            @include('common.button', ['text' => 'Danger', 'variant' => 'danger'])
            @include('common.button', ['text' => 'Warning', 'variant' => 'warning'])
            @include('common.button', ['text' => 'Info', 'variant' => 'info'])
            @include('common.button', ['text' => 'Light', 'variant' => 'light'])
            @include('common.button', ['text' => 'Dark', 'variant' => 'dark'])
        </div>
        <code>@include('common.button', ['text' => 'Primary', 'variant' => 'primary'])</code>
    </div>

    <div class="demo-section">
        <h2>Kích thước nút (Button Sizes)</h2>
        <div class="demo-row">
            @include('common.button', ['text' => 'Small Button', 'size' => 'small'])
            @include('common.button', ['text' => 'Medium Button', 'size' => 'medium'])
            @include('common.button', ['text' => 'Large Button', 'size' => 'large'])
        </div>
        <code>@include('common.button', ['text' => 'Small Button', 'size' => 'small'])</code>
    </div>

    <div class="demo-section">
        <h2>Nút viền (Outline Buttons)</h2>
        <div class="demo-row">
            @include('common.button', ['text' => 'Primary', 'variant' => 'primary', 'outline' => true])
            @include('common.button', ['text' => 'Secondary', 'variant' => 'secondary', 'outline' => true])
            @include('common.button', ['text' => 'Success', 'variant' => 'success', 'outline' => true])
            @include('common.button', ['text' => 'Danger', 'variant' => 'danger', 'outline' => true])
        </div>
        <code>@include('common.button', ['text' => 'Primary', 'variant' => 'primary', 'outline' => true])</code>
    </div>

    <div class="demo-section">
        <h2>Nút có biểu tượng (Buttons with Icons)</h2>
        <div class="demo-row">
            @include('common.button', ['text' => 'Download', 'icon' => 'download', 'iconPosition' => 'left'])
            @include('common.button', ['text' => 'Upload', 'icon' => 'upload', 'iconPosition' => 'left', 'variant' => 'success'])
            @include('common.button', ['text' => 'Delete', 'icon' => 'delete', 'iconPosition' => 'left', 'variant' => 'danger'])
            @include('common.button', ['text' => 'Next', 'icon' => 'check', 'iconPosition' => 'right', 'variant' => 'info'])
        </div>
        <code>@include('common.button', ['text' => 'Download', 'icon' => 'download', 'iconPosition' => 'left'])</code>
    </div>

    <div class="demo-section">
        <h2>Trạng thái nút (Button States)</h2>
        
        <div class="demo-block">
            <div class="label">Nút bị vô hiệu hóa (Disabled):</div>
            <div class="demo-row">
                @include('common.button', ['text' => 'Disabled Button', 'disabled' => true])
                @include('common.button', ['text' => 'Disabled Primary', 'variant' => 'primary', 'disabled' => true])
                @include('common.button', ['text' => 'Disabled Success', 'variant' => 'success', 'disabled' => true])
            </div>
            <code>@include('common.button', ['text' => 'Disabled Button', 'disabled' => true])</code>
        </div>

        <div class="demo-block">
            <div class="label">Nút đang tải (Loading):</div>
            <div class="demo-row">
                @include('common.button', ['text' => 'Loading...', 'loading' => true])
                @include('common.button', ['text' => 'Processing...', 'variant' => 'primary', 'loading' => true])
                @include('common.button', ['text' => 'Submitting...', 'variant' => 'success', 'loading' => true])
            </div>
            <code>@include('common.button', ['text' => 'Loading...', 'loading' => true])</code>
        </div>
    </div>

    <div class="demo-section">
        <h2>Nút toàn chiều rộng (Block Button)</h2>
        <div class="demo-block">
            @include('common.button', ['text' => 'Block Button', 'block' => true, 'variant' => 'primary'])
        </div>
        <div class="demo-block">
            @include('common.button', ['text' => 'Submit Form', 'block' => true, 'variant' => 'success', 'size' => 'large'])
        </div>
        <code>@include('common.button', ['text' => 'Block Button', 'block' => true, 'variant' => 'primary'])</code>
    </div>

    <div class="demo-section">
        <h2>Nhóm nút (Button Group)</h2>
        <div class="btn-group">
            @include('common.button', ['text' => 'Left', 'variant' => 'primary'])
            @include('common.button', ['text' => 'Middle', 'variant' => 'primary'])
            @include('common.button', ['text' => 'Right', 'variant' => 'primary'])
        </div>
        <code>&lt;div class="btn-group"&gt;
    @include('common.button', ['text' => 'Left', 'variant' => 'primary'])
    @include('common.button', ['text' => 'Middle', 'variant' => 'primary'])
    @include('common.button', ['text' => 'Right', 'variant' => 'primary'])
&lt;/div&gt;</code>
    </div>

    <div class="demo-section">
        <h2>Các loại nút (Button Types)</h2>
        <div class="demo-row">
            @include('common.button', ['text' => 'Button', 'type' => 'button', 'variant' => 'primary'])
            @include('common.button', ['text' => 'Submit', 'type' => 'submit', 'variant' => 'success'])
            @include('common.button', ['text' => 'Reset', 'type' => 'reset', 'variant' => 'danger'])
        </div>
        <code>@include('common.button', ['text' => 'Submit', 'type' => 'submit', 'variant' => 'success'])</code>
    </div>

    <div class="demo-section">
        <h2>Sử dụng nâng cao (Advanced Usage)</h2>
        
        <div class="demo-block">
            <div class="label">Với onclick event:</div>
            <div class="demo-row">
                @include('common.button', [
                    'text' => 'Click Me', 
                    'variant' => 'primary',
                    'onclick' => 'alert("Button clicked!")'
                ])
            </div>
            <code>@include('common.button', ['text' => 'Click Me', 'variant' => 'primary', 'onclick' => 'alert("Button clicked!")'])</code>
        </div>

        <div class="demo-block">
            <div class="label">Với custom class và ID:</div>
            <div class="demo-row">
                @include('common.button', [
                    'text' => 'Custom Button',
                    'variant' => 'info',
                    'class' => 'my-custom-class',
                    'id' => 'my-button-id'
                ])
            </div>
            <code>@include('common.button', ['text' => 'Custom Button', 'variant' => 'info', 'class' => 'my-custom-class', 'id' => 'my-button-id'])</code>
        </div>
    </div>

    <div class="demo-section">
        <h2>Tất cả tham số (All Parameters)</h2>
        <code>@include('common.button', [
    'text' => 'Button Text',           // Văn bản nút
    'type' => 'button',                // button, submit, reset
    'variant' => 'primary',            // primary, secondary, success, danger, warning, info, light, dark
    'size' => 'medium',                // small, medium, large
    'icon' => 'check',                 // Tên icon
    'iconPosition' => 'left',          // left, right
    'disabled' => false,               // true, false
    'loading' => false,                // true, false
    'block' => false,                  // true, false (toàn chiều rộng)
    'outline' => false,                // true, false (nút viền)
    'class' => '',                     // CSS class tùy chỉnh
    'id' => '',                        // ID tùy chỉnh
    'onclick' => ''                    // JavaScript onclick event
])</code>
    </div>
</body>
</html>
