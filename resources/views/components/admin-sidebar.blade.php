<nav class="sidebar">
  <div class="logo d-flex justify-content-between">
    <a class="large_logo" href="javascript:void(0)"><img src="{{ asset('img/logo.png') }}" alt=""></a>
    <a class="small_logo" href="javascript:void(0)"><img src="{{ asset('img/mini_logo.png') }}" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
      <i class="ti-close"></i>
    </div>
  </div>
  <ul id="sidebar_menu">
    @foreach ($links as $link)
      <li class="">
        <a href="{{ $link['url'] }}" wire:navigate aria-expanded="false">
          <div class="nav_icon_small">
            <img src="{{ $link['icon'] }}" alt="">
          </div>
          <div class="nav_title">
            <span>{{ $link['name'] }}</span>
          </div>
        </a>
      </li>
    @endforeach
  </ul>
</nav>
