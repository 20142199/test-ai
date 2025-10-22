<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icon Demo</title>
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
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
        
        .icon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .icon-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .icon-name {
            margin-top: 10px;
            font-size: 12px;
            color: #666;
            text-align: center;
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
            gap: 20px;
            align-items: center;
            margin-bottom: 15px;
        }
        
        code {
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Icon Component Demo</h1>
    
    <div class="demo-section">
        <h2>Basic Icons</h2>
        <div class="icon-grid">
            <div class="icon-item">
                @include('common.icon', ['name' => 'file'])
                <span class="icon-name">file</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'folder'])
                <span class="icon-name">folder</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'download'])
                <span class="icon-name">download</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'upload'])
                <span class="icon-name">upload</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'search'])
                <span class="icon-name">search</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'close'])
                <span class="icon-name">close</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'check'])
                <span class="icon-name">check</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'edit'])
                <span class="icon-name">edit</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'delete'])
                <span class="icon-name">delete</span>
            </div>
            <div class="icon-item">
                @include('common.icon', ['name' => 'user'])
                <span class="icon-name">user</span>
            </div>
        </div>
    </div>

    <div class="demo-section">
        <h2>Icon Sizes</h2>
        <div class="demo-row">
            @include('common.icon', ['name' => 'file', 'size' => 'small'])
            <span>Small (16px)</span>
        </div>
        <div class="demo-row">
            @include('common.icon', ['name' => 'file', 'size' => 'medium'])
            <span>Medium (24px)</span>
        </div>
        <div class="demo-row">
            @include('common.icon', ['name' => 'file', 'size' => 'large'])
            <span>Large (32px)</span>
        </div>
        <div class="demo-row">
            @include('common.icon', ['name' => 'file', 'size' => 'xlarge'])
            <span>Extra Large (48px)</span>
        </div>
    </div>

    <div class="demo-section">
        <h2>Icon Colors</h2>
        <div class="demo-row">
            @include('common.icon', ['name' => 'check', 'class' => 'icon-primary'])
            <span>Primary</span>
        </div>
        <div class="demo-row">
            @include('common.icon', ['name' => 'check', 'class' => 'icon-success'])
            <span>Success</span>
        </div>
        <div class="demo-row">
            @include('common.icon', ['name' => 'close', 'class' => 'icon-danger'])
            <span>Danger</span>
        </div>
        <div class="demo-row">
            @include('common.icon', ['name' => 'search', 'class' => 'icon-info'])
            <span>Info</span>
        </div>
    </div>

    <div class="demo-section">
        <h2>Usage Examples</h2>
        <p><strong>Basic usage:</strong></p>
        <code>@include('common.icon', ['name' => 'file'])</code>
        
        <p style="margin-top: 20px;"><strong>With size and color:</strong></p>
        <code>@include('common.icon', ['name' => 'file', 'size' => 'large', 'class' => 'icon-primary'])</code>
        
        <p style="margin-top: 20px;"><strong>Clickable icon:</strong></p>
        <code>@include('common.icon', ['name' => 'edit', 'class' => 'icon-clickable'])</code>
    </div>
</body>
</html>
