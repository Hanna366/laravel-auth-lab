<div class="card border-0 shadow-sm h-100 {{ $class ?? '' }}">
    <div class="card-header bg-white border-0 py-3">
        <h5 class="mb-0 d-flex align-items-center">
            @if(isset($icon))
                <span class="me-2">{!! $icon !!}</span>
            @endif
            {{ $title }}
        </h5>
    </div>
    <div class="card-body pt-3">
        {{ $slot }}
    </div>
</div>