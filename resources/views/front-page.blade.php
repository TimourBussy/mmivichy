@extends('layouts.app')

@section('content')
<div class="page-content">
    @if( have_rows('sections') )
    @while( have_rows('sections') ) @php the_row() @endphp

    @if( get_row_layout() == 'hero' )
    <section class="hero">
        <h1>{{ get_sub_field('titre') }}</h1>
        <p>{{ get_sub_field('texte') }}</p>
        {!! wp_get_attachment_image(get_sub_field('image'), 'full') !!}
    </section>
    @endif

    @if( get_row_layout() == 'cta' )
    <section class="cta">
        <a href="{{ get_sub_field('lien') }}">{{ get_sub_field('texte_bouton') }}</a>
    </section>
    @endif

    @endwhile
    @endif

    <div>
        {!! wp_get_attachment_image(29, 'full', false, ['alt' => 'Cour du Pôle Lardy']) !!}
    </div>
</div>
@endsection