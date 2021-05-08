{{-- @if ($errors->any())
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <strong>{{ $error }}</strong>
        @endforeach
    </div>
@endif --}}

{{-- @if (session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>   
@endif  --}}

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
            <strong>
                {!! Session::get('alert-' . $msg) !!}
            </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endforeach