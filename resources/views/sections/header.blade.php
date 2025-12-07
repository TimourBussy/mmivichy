@php
$global_settings_id = get_page_by_title('Global Settings')->ID;
@endphp

<header class="sticky flex h-[95px] w-full items-center justify-between pl-7 pr-[69px] py-[21px]">
  {!! wp_get_attachment_image(get_field('logo', $global_settings_id), 'logo-header', false, ['alt' => 'Logo']) !!}

  <nav>
    <ul class="flex space-x-8 items-center gap-[66px] font-bold text-2xl">
      @foreach (wp_get_nav_menu_items('primary_navigation') as $item)
      <li>
        <a href="{{ $item->url }}">
          {{ $item->title }}
        </a>
      </li>
      @endforeach
    </ul>
  </nav>

  <a href="{{ home_url('/contact') }}" class="bg-[#253CD9] px-[24.5px] py-[13.5px] rounded-[15px] font-bold text-2xl text-[#F3F4FF]">Contact</a>
</header>