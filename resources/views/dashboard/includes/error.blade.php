@if($errors->any())
{!! implode('', $errors->all('<div class="alert alert-danger py-1 mb-2">:message</div>')) !!}
@endif
@foreach (['danger', 'warning', 'success', 'info'] as $key)
@if(Session::has($key))
<p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
@endif
@endforeach