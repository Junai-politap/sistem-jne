@foreach (['primary', 'warning', 'danger'] as $status)
    @if (session($status))
    
        <div class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box text-center">
            <strong>{{ session($status) }}</strong>
        </div>
    @endif
@endforeach
