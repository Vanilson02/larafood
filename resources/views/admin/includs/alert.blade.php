@if ($errors->any())
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{{-- @if (session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>   
@endif  --}}

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('text-' . $msg))
        <strong class="text-{{ $msg }}" role="text">
            {!! Session::get('text-' . $msg) !!}
        </strong>
    @endif
@endforeach