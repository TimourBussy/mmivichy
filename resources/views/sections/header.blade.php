<<<<<<< HEAD
<header class="sticky flex h-[95px] w-full items-center justify-between pl-7 pr-[69px] py-[21px]">
  <img src="{{ asset('logo.png') }}" alt="Logo MMI" class="h-[54px]">

  <nav class="">
    <ul class="flex space-x-8 items-center gap-[66px] font-bold text-2xl">
      <li><a href="">À propos</a></li>
      <li><a href="">Formation</a></li>
      <li><a href="">Admissions</a></li>
      <li><a href="">Actualités</a></li>
    </ul>
  </nav>

  <a href="{{ home_url('/contact') }}" class="bg-[#253CD9] px-[24.5px] py-[13.5px] rounded-[15px] font-bold text-2xl text-[#F3F4FF]">Contact</a>
</header>
=======
<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
>>>>>>> 7920ac9eae20e7f12e62f496a41561c5c48eca1b
