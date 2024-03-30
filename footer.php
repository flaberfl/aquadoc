<footer class="footer section-line_left">
  <div class="footer__container">
    <div class="footer__top">
      <a href="#" class="footer__logo logo">
        <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="Логотип">
      </a>
      <a href="" class="footer__link text-base"><?php pll_e('protection'); ?></a>
      <a href="" class="footer__link text-base"><?php pll_e('disclaimer'); ?></a>
      <a href="" class="footer__link text-base"><?php pll_e('policy'); ?></a>
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


<div id="guarantee-popup" aria-hidden="true" class="guarantee-popup popup form-popup">
	<div class="popup__wrapper guarantee-popup__wrapper">
		<div class="popup__content guarantee-popup__content">
			<button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)"
						fill="#D9D9D9" />
					<rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)"
						fill="#D9D9D9" />
				</svg>
			</button>
			<div class="popup__body submit-popup__body">
				<h2 class="submit-popup__title"><?php pll_e('guarantee'); ?></h2>

				<form class="form" action="">
					<div class="form__line form__line_name">
						<label for="name">Имя, Фамилия *</label>
						<input autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Ваше имя, Фамилия"
							class="input input_name">
					</div>

					<div class="form__line form__line_tel">
						<label for="name">Телефон *</label>
						<input autocomplete="off" type="tel" name="tel" data-error="Ошибка" placeholder="Ваш номер телефона"
							class="input input_tel">
					</div>

					<div class="form__line form__line_mail">
						<label for="name">E-mail *</label>
						<input autocomplete="off" type="email" name="tel" data-error="Ошибка" placeholder="Ваш e-mail"
							class="input input_mail">
					</div>
					
			<div class="form__line form__line_number">
						<label for="name">Номер прибора *</label>
						<input autocomplete="off" type="number" name="tel" data-error="Ошибка" placeholder="Номер прибора"
							class="input input_mail">
					</div>

					<div class="form__line form__line_text">
						<label for="name">Дата и место покупки *</label>
				<input autocomplete="off" type="text" name="tel" data-error="Ошибка" placeholder="Дата и место покупки"
							class="input input_mail">
					</div>

					<div class="form__line form__line_policy">
							<div class="checkbox">
							<input id="manual-submit" data-error="Помилка" class="checkbox__input" type="checkbox" value="1" name="form[]">
							<label for="manual-submit" class="checkbox__label"><span class="checkbox__text">Я внимательно ознакомился с Руководством пользователя</span></label>
						</div>
						<div class="checkbox">
							<input id="pol-submit" data-error="Помилка" class="checkbox__input" type="checkbox" value="1" name="form[]">
							<label for="pol-submit" class="checkbox__label"><span class="checkbox__text">Согласен с политикой
									конфидециальности</span></label>
						</div>
					</div>

					<div class="form__line form__line_button">
						<button id="pol-submit-b" type="submit" class="button form__button for-human__button">Регистрировать</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>


<div id="repair-popup" aria-hidden="true" class="repair-popup popup form-popup">
	<div class="popup__wrapper repair-popup__wrapper">
		<div class="popup__content repair-popup__content">
			<button data-close type="button" class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<rect x="31.1128" y="4.94971" width="37" height="7" rx="3" transform="rotate(135 31.1128 4.94971)"
						fill="#D9D9D9" />
					<rect width="37" height="7" rx="3" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 31.1128 26.1636)"
						fill="#D9D9D9" />
				</svg>
			</button>
			<div class="popup__body repair-popup__body">
				<h2 class="submit-popup__title"><?php pll_e('repair'); ?></h2>

				<form class="form" action="">
					<div class="form__line form__line_name">
						<label for="name">Имя, Фамилия *</label>
						<input autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Ваше имя, Фамилия"
							class="input input_name">
					</div>

					<div class="form__line form__line_tel">
						<label for="name">Телефон *</label>
						<input autocomplete="off" type="tel" name="tel" data-error="Ошибка" placeholder="Ваш номер телефона"
							class="input input_tel">
					</div>

					<div class="form__line form__line_mail">
						<label for="name">E-mail *</label>
						<input autocomplete="off" type="email" name="tel" data-error="Ошибка" placeholder="Ваш e-mail"
							class="input input_mail">
					</div>
					
			<div class="form__line form__line_number">
						<label for="name">Номер прибора *</label>
						<input autocomplete="off" type="number" name="tel" data-error="Ошибка" placeholder="Номер прибора"
							class="input input_mail">
					</div>

					<div class="form__line form__line_text">
						<label for="name">Дата и место покупки *</label>
				<input autocomplete="off" type="text" name="tel" data-error="Ошибка" placeholder="Дата и место покупки"
							class="input input_mail">
					</div>
					
					<div class="form__line form__line_text">
						<label for="name">Описание дефекта *</label>
						<textarea name="callback-text" id="callback-text" cols="30" rows="5"
							placeholder="Описание дефекта"></textarea>
					</div>

					<div class="form__line form__line_policy">
						<div class="checkbox">
							<input id="rep-submit" data-error="Помилка" class="checkbox__input" type="checkbox" value="1" name="form[]">
							<label for="rep-submit" class="checkbox__label"><span class="checkbox__text">Согласен с политикой
									конфидециальности</span></label>
						</div>
					</div>

					<div class="form__line form__line_button">
						<button id="rep-submit-b" type="submit" class="button form__button for-human__button">Отправить</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>


<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js?_v=20240319125921"></script>
<!-- <script src="js/app.min.js?_v=20240319125921"></script> -->

<?php wp_footer(); ?>


</body>

</html>