<div class="{{ $class ?? 'concentric-circles' }}">
    @for ($i = 0; $i < ($count ?? 12); $i++)
        <div class="{{ $circleClass ?? 'circle' }}"></div>
    @endfor
</div>
