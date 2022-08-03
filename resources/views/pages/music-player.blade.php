@extends(backpack_view('blank'))

@section('content')
    <div id="react_music_player"></div>
@endsection

@section('after_scripts')
    <script>
        window.FOR_REACT = {
            'audio_lists': {!! json_encode($audio_lists) !!},
        };
    </script>
@endsection
