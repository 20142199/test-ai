{{-- Reusable Section Header Component --}}
<div class="section-header {{ $headerClass ?? '' }}">
    <h2 class="section-title {{ $titleClass ?? '' }}">{{ $title }}</h2>
    @if(isset($description))
        <p class="section-description {{ $descriptionClass ?? '' }}">{{ $description }}</p>
    @endif
</div>
