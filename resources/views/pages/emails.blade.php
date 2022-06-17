@extends(backpack_view('blank'))

@section('after_styles')
@endsection

@section('content')
<div class="py-3">
    <a href="{{ route('email.send', ['test']) }}" class="btn btn-primary">
        Teszt e-mail küldése
    </a>
</div>
@endsection
