@extends('layouts.app')

@section('content')
    @php(the_content())
    <picture>
        <source srcset="{{ asset('ext-preview.webp') }}" type="image/webp">
        <source srcset="{{ asset('ext-preview.jpg') }}" type="image/jpeg">
        <img src="{{ asset('ext-preview.jpg') }}" alt="Cour du Pôle Lardy">
    </picture>
@endsection