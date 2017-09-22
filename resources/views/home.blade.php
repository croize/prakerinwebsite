@if(Auth::user()->status == 0)
@include('user.layouts')
@section('content')
    <p>This is my body content.</p>
@endsection
@else
@include('admin.layouts')
@section('content')
    <p>This is my body content.</p>
@endsection
@endif
