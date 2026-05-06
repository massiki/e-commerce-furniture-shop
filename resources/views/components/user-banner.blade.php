<div class="section page-banner-section" style="background-image: url({{ asset('assets/images/page-banner.jpg') }})">
  <div class="container">
    <!-- Page Banner Content End -->
    <div class="page-banner-content">
      <h2 class="title">{{ $title }}</h2>
      <ul class="breadcrumb">
        <li>
          <a href="{{ route('home') }}" wire:navigate>Home</a>
        </li>
        <li class="active">{{ $title }}</li>
      </ul>
    </div>
    <!-- Page Banner Content End -->
  </div>
</div>
