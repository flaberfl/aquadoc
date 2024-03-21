<footer class="footer section-line_left">
  <div class="footer__container">
    <div class="footer__top">
      <a href="#" class="footer__logo logo">
        <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Логотип">
      </a>
      <a href="" class="footer__link text-base">Отказ от ответственности</a>
      <a href="" class="footer__link text-base">Условия продаж и возврата товара</a>
      <a href="" class="footer__link text-base">Политика конфиденциальности</a>
      <!-- <button type="button" aria-label="Open menu" aria-checked="false" class="icon-menu">
				<span></span>
			</button> -->
    </div>
    <div class="footer__bottom">
      <p class="footer__copyright text-base">AquaDoc. Все права защищены © 2024</p>
      <div class="footer__delevop">
        <p>Сайт создан:</p>
        <a href="https://afreeca.ru" class="">
          <img src="<?php bloginfo('template_url'); ?>/img/develop.svg" alt="Логотип">
        </a>
      </div>
    </div>

  </div>
</footer>
</div>


<div id="features-popup-1" aria-hidden="true" class="features-popup popup popup_show1">
  <div class="popup__wrapper features-popup__wrapper">
    <div class="popup__content features-popup__content">
      <button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)" fill="#D9D9D9" />
          <rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)" fill="#D9D9D9" />
        </svg>
      </button>
      <div class="popup__body">
        <div class="popup__top">
          <div class="popup__left-side">
            <h2 class="popup__title"><?= CFS()->get('features_old_title'); ?></h2>
            <h3 class="popup__subtitle" data-da=".popup__top, 992"><?= CFS()->get('features_old_text'); ?></h3>
            <p class="popup__name"><?= CFS()->get('features_old_link'); ?></p>
          </div>
          <div class="popup__image-ibg"><img data-src="<?= CFS()->get('features_old_popup_img'); ?>" alt="Изображение блога"></div>
        </div>
        <div class="popup__bottom">
          <p class="popup__text text-base"><?= CFS()->get('features_old_popup_text'); ?></p>
          <a href="<?= CFS()->get('features_old_popup_link1'); ?>" class="popup__link text-base"><?= CFS()->get('features_old_popup_link1'); ?></a>
          <a href="<?= CFS()->get('features_old_popup_link2'); ?>" class="popup__link text-base"><?= CFS()->get('features_old_popup_link2'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="features-popup-2" aria-hidden="true" class="features-popup popup popup_show1">
  <div class="popup__wrapper features-popup__wrapper">
    <div class="popup__content features-popup__content">
      <button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)" fill="#D9D9D9" />
          <rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)" fill="#D9D9D9" />
        </svg>
      </button>
      <div class="popup__body">
        <div class="popup__top">
          <div class="popup__left-side">
            <h2 class="popup__title"><?= CFS()->get('features_sport_title'); ?></h2>
            <h3 class="popup__subtitle" data-da=".popup__top, 992"><?= CFS()->get('features_sport_text'); ?></h3>
            <p class="popup__name"><?= CFS()->get('features_sport_link'); ?></p>
          </div>
          <div class="popup__image-ibg"><img data-src="<?= CFS()->get('features_sport_popup_img'); ?>" alt="Изображение блога"></div>
        </div>
        <div class="popup__bottom">
          <p class="popup__text text-base"><?= CFS()->get('features_sport_popup_text'); ?></p>
          <a href="<?= CFS()->get('features_sport_popup_link'); ?>" class="popup__link text-base"><?= CFS()->get('features_sport_popup_link'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="features-popup-3" aria-hidden="true" class="features-popup popup popup_show1">
  <div class="popup__wrapper features-popup__wrapper">
    <div class="popup__content features-popup__content">
      <button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)" fill="#D9D9D9" />
          <rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)" fill="#D9D9D9" />
        </svg>
      </button>
      <div class="popup__body">
        <div class="popup__top">
          <div class="popup__left-side">
            <h2 class="popup__title"><?= CFS()->get('features_v_title'); ?></h2>
            <h3 class="popup__subtitle" data-da=".popup__top, 992"><?= CFS()->get('features_v_text'); ?></h3>
            <p class="popup__name"><?= CFS()->get('features_v_link'); ?></p>
          </div>
          <div class="popup__image-ibg"><img data-src="<?= CFS()->get('features_v_popup_img'); ?>" alt="Изображение блога"></div>
        </div>
        <div class="popup__bottom">
          <p class="popup__text text-base"><?= CFS()->get('features_v_popup_text'); ?></p>
          <a href="<?= CFS()->get('features_v_popup_link'); ?>" class="popup__link text-base"><?= CFS()->get('features_v_popup_link'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="features-popup-4" aria-hidden="true" class="features-popup popup popup_show1">
  <div class="popup__wrapper features-popup__wrapper">
    <div class="popup__content features-popup__content">
      <button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)" fill="#D9D9D9" />
          <rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)" fill="#D9D9D9" />
        </svg>
      </button>
      <div class="popup__body">
        <div class="popup__top">
          <div class="popup__left-side">
            <h2 class="popup__title"><?= CFS()->get('features_d_title'); ?></h2>
            <h3 class="popup__subtitle" data-da=".popup__top, 992"><?= CFS()->get('features_d_text'); ?></h3>
            <p class="popup__name"><?= CFS()->get('features_d_link'); ?></p>
          </div>
          <div class="popup__image-ibg"><img data-src="<?= CFS()->get('features_d_popup_img'); ?>" alt="Изображение блога"></div>
        </div>
        <div class="popup__bottom">
          <p class="popup__text text-base"><?= CFS()->get('features_d_popup_text'); ?></p>
          <a href="<?= CFS()->get('features_d_popup_link'); ?>" class="popup__link text-base"><?= CFS()->get('features_d_popup_link'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="videos-popup-video" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="video-popup__content popup__content">
      <button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)" fill="#D9D9D9" />
          <rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)" fill="#D9D9D9" />
        </svg>
      </button>
      <div data-youtube-place class="popup__text">

      </div>
    </div>
  </div>
</div>

<div id="videos-popup-video-2" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="video-popup__content popup__content">
      <button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)" fill="#D9D9D9" />
          <rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)" fill="#D9D9D9" />
        </svg>
      </button>
      <div data-youtube-place class="popup__text">

      </div>
    </div>
  </div>
</div>
<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js?_v=20240319125921"></script>
<!-- <script src="js/app.min.js?_v=20240319125921"></script> -->

<?php wp_footer(); ?>


</body>

</html>