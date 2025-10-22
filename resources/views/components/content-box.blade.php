@props([
    'backgroundImage' => '',
    'width' => '256px',
    'height' => '80px',
    'class' => ''
])

<div class="content-box {{ $class }}" style="width: {{ $width }}; height: {{ $height }}; background: url('{{ $backgroundImage }}') center/cover; border: 2px solid #0f1742; border-radius: 10px; box-shadow: 12px 12px 0 #0f1742; position: relative; display: flex; flex-direction: column; padding: 24px 16px;">
    {{ $slot }}
</div>
