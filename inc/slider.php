<?php if (!$detect->isMobile()): ?>
  <h2 class="hidden-mobile">This slider is only displayed on Desktop</h2>
  <div id="home-slider" class="owl-carousel owl-theme hidden-mobile">
    <div class="item"><img src="http://lorempicsum.com/futurama/1200/600/3" alt="The Last of us"></div>
    <div class="item"><img src="http://lorempicsum.com/futurama/1200/600/4" alt="GTA V"></div>
    <div class="item"><img src="http://lorempicsum.com/futurama/1200/600/5" alt="Mirror Edge"></div>
  </div>
<?php endif;?>