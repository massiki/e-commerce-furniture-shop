@php
  $whatsappUrl = 'https://wa.me/6285294532451?text=' . urlencode('Halo, saya ingin bertanya tentang produk furniture.');
@endphp

<div class="support-chat" id="supportChat">
  <div class="support-chat__panel" id="supportChatPanel" aria-hidden="true" role="dialog"
    aria-labelledby="supportChatTitle">
    <div class="support-chat__header">
      <div>
        <h2 class="support-chat__title" id="supportChatTitle">Hi there</h2>
        <p class="support-chat__subtitle">We typically reply within minutes</p>
      </div>
      <button type="button" class="support-chat__close" id="supportChatClose" aria-label="Tutup chat">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="support-chat__body">
      <a href="{{ $whatsappUrl }}" class="support-chat__agent" target="_blank" rel="noopener noreferrer">
        <div class="support-chat__avatar" aria-hidden="true">
          <img src="{{ asset('assets/images/foto-fikri.jpg') }}" alt="" class="rounded-circle"
            style="width: 52px; height: 52px; object-fit: cover; border: 2px solid #f2a100;">
        </div>
        <div class="support-chat__agent-info">
          <span class="support-chat__agent-name">Fikri Amrullah</span>
          <span class="support-chat__agent-role">Sales</span>
        </div>
      </a>
    </div>

    <p class="support-chat__footer">
      Powered by <span class="support-chat__brand">{{ config('app.name', 'Furniture Shop') }}</span>
    </p>
  </div>

  <button type="button" class="support-chat__toggle" id="supportChatToggle" aria-label="Buka customer support"
    aria-expanded="false">
    <img src="{{ asset('assets/images/icon/icon-whatsapp.webp') }}" alt="" width="32" height="32">
  </button>
</div>

<script>
  (function() {
    var root = document.getElementById('supportChat');
    if (!root) return;

    var panel = document.getElementById('supportChatPanel');
    var toggle = document.getElementById('supportChatToggle');
    var closeBtn = document.getElementById('supportChatClose');

    function setOpen(open) {
      root.classList.toggle('is-open', open);
      panel.setAttribute('aria-hidden', open ? 'false' : 'true');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    }

    toggle.addEventListener('click', function() {
      setOpen(!root.classList.contains('is-open'));
    });

    closeBtn.addEventListener('click', function() {
      setOpen(false);
    });

    document.addEventListener('click', function(e) {
      if (!root.classList.contains('is-open')) return;
      if (!root.contains(e.target)) setOpen(false);
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') setOpen(false);
    });
  })();
</script>
