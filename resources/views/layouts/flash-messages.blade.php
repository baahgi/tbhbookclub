@if ($message = Session::get('success'))
<div class="bg-green-200 p-2 my-1 rounded text-green-600">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="bg-blue-200 p-2 my-1 rounded text-blue-600">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('danger'))
<div class="bg-red-200 p-2 my-1 rounded text-red-600">
    {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="bg-orange-200  p-2 my-1 rounded text-orange-600">
    {{ $message }}
</div>
@endif


@if ($errors->any())
<div class="bg-red-200 p-2 my-1 rounded text-red-600">
   Please check the form below for errors
   @foreach ($errors->all() as $error)
       {{ $error }}
   @endforeach
</div>
@endif
