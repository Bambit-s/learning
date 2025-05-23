<div class="footer">
  <div class="footer_box">
    <div class="logo">
      <a href="/"><img src="\img\logo80x80.png" alt=""></a>
      <div class="interes">
        <div class="text_interes" data-lang-content="es">Estudio topiari</div>
        <div class="text_interes" data-lang-content="pt" style="display: none;">Topiari studio</div>
        <div class="text_interes" data-lang-content="en" style="display: none;">Topiari studio</div>
        <div class="text_interes_green">Eco Portal</div>
        <div class="text_interes" data-lang-content="es">Producción de figuras topiarias</div>
        <div class="text_interes" data-lang-content="pt" style="display: none;">Produção de figuras de topiaria</div>
        <div class="text_interes" data-lang-content="en" style="display: none;">Production of topiary figures</div>
      </div>
    </div>
    <div class="text" data-lang-content="es">La producción topiar de la figura por nuestra compañía "Eco Portal" es una dirección de la actividad, que nos ocupa con el amor, usando las tecnologías más modernas y los materiales.</div>
    <div class="text" data-lang-content="pt" style="display: none;">A produção topiaria da figura pela nossa empresa "Eco Portal" é uma direção de atividade, que nos ocupa com amor, utilizando as tecnologias e materiais Moderna.</div>
    <div class="text" data-lang-content="en" style="display: none;">The topiary production of the figure by our company "Eco Portal" is a direction of activity, which occupies us with love, using the Moderna technologies and materials.</div>
  </div>
  <div class="footer_box">
    <div class="nav_name">
      <p data-lang-content="es">Empresa</p>
      <p data-lang-content="pt" style="display: none;">Empresa</p>
      <p data-lang-content="en" style="display: none;">Company</p>
      <div class="nav_footer">
        <a href="catalog" class="nav_link" data-lang-content="es">Página de catálogo</a>
        <a href="about" class="nav_link" data-lang-content="es">Sobre nosotros</a>
        <a href="delivery" class="nav_link" data-lang-content="es">Entrega</a>
        <a href="montage" class="nav_link" data-lang-content="es">Montaje</a>
        <a href="comments" class="nav_link" data-lang-content="es">Comentarios</a>
        <a href="contacts" class="nav_link" data-lang-content="es">Contactos</a>
      </div>
      <div class="nav_footer">
        <a href="catalog" class="nav_link" data-lang-content="pt" style="display: none;">Página do catálogo</a>
        <a href="about" class="nav_link" data-lang-content="pt" style="display: none;">Sobre nós</a>
        <a href="delivery" class="nav_link" data-lang-content="pt" style="display: none;">Entrega</a>
        <a href="montage" class="nav_link" data-lang-content="pt" style="display: none;">Montagem</a>
        <a href="comments" class="nav_link" data-lang-content="pt" style="display: none;">Comentários</a>
        <a href="contacts" class="nav_link" data-lang-content="pt" style="display: none;">Contatos</a>
      </div>
      <div class="nav_footer" data-lang-content="en" style="display: none;">
        <a href="catalog" class="nav_link" data-lang-content="en" style="display: none;">Catalog page</a>
        <a href="about" class="nav_link" data-lang-content="en" style="display: none;">About us</a>
        <a href="delivery" class="nav_link" data-lang-content="en" style="display: none;">Delivery</a>
        <a href="montage" class="nav_link" data-lang-content="en" style="display: none;">Assembly</a>
        <a href="comments" class="nav_link" data-lang-content="en" style="display: none;">Comments</a>
        <a href="contacts" class="nav_link" data-lang-content="en" style="display: none;">Contacts</a>
      </div>
    </div>
  </div>
  <div class="footer_box">
    <div class="phone_adres">
      <p>Asuncion, Villa Elisa</p>
      <div class="phone-1">
        <img src="\img\phone-modern.svg" alt="" width="15" height="20">
        <a style="text-decoration: none; color:#83B735" href="https://wa.me/595994799700">
          <p>+595 994 799 700</p>
        </a>
      </div>
      <!-- <div class="phone-2">
                <img src="\img\phone-modern.svg" alt="" width="15" height="20">
                <p>+595 123 123 123</p>
            </div> -->
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const selector = document.querySelector('.custom-language-selector');
    const selected = selector.querySelector('.selected-language');
    const options = selector.querySelector('.language-options');
    const savedLang = localStorage.getItem('lang') || 'es';

    // Загружаем сохранённый язык
    updateLanguage(savedLang);

    // Открываем/закрываем список
    selected.addEventListener('click', () => {
      options.style.display = options.style.display === 'block' ? 'none' : 'block';
    });

    // Выбор языка
    options.querySelectorAll('li').forEach(li => {
      li.addEventListener('click', () => {
        const lang = li.dataset.lang;
        updateLanguage(lang);
        options.style.display = 'none';
      });
    });

    // Закрытие при клике вне списка
    document.addEventListener('click', (e) => {
      if (!selector.contains(e.target)) {
        options.style.display = 'none';
      }
    });

    // Обновление языка
    function updateLanguage(lang) {
      localStorage.setItem('lang', lang);
      const selectedLangOption = options.querySelector(`[data-lang="${lang}"]`);
      const flag = selectedLangOption.querySelector('.flag').cloneNode(true);
      const text = selectedLangOption.textContent.trim();

      // Обновляем выбранный язык
      selected.innerHTML = '';
      selected.appendChild(flag);
      selected.appendChild(document.createTextNode(text));
      selected.appendChild(document.createElement('span')).className = 'arrow';
      selected.querySelector('.arrow').textContent = '▼';

      // Обновляем контент страницы (как в предыдущем примере)
      document.querySelectorAll('[data-lang-content]').forEach(el => {
        el.style.display = el.dataset.langContent === lang ? 'block' : 'none';
      });
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    const block = document.querySelector('.index-interests-1');
    if (block) observer.observe(block);
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    const block = document.querySelector('.index-delivery-price');
    if (block) observer.observe(block);
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
      threshold: 0.2,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Анимация заголовка (активного языка)
          const activeHeaderText = entry.target.querySelector('.servis-header .servis-name[style*="display: block"]');
          if (activeHeaderText) {
            activeHeaderText.style.opacity = '1';
            activeHeaderText.style.transform = 'translateY(0)';
          }

          // Анимация блоков
          const boxes = entry.target.querySelectorAll('.servis-box');
          boxes.forEach(box => {
            box.classList.add('visible');
          });

          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const serviceSection = document.querySelector('.servis');
    if (serviceSection) observer.observe(serviceSection);
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const burgerIcon = document.querySelector('.burger-icon');
    const burgerNav = document.querySelector('.burger-nav');

    // Функция для обновления ссылок в бургер-меню
    function updateBurgerMenuLinks() {
      // Находим все видимые ссылки в основном меню
      const visibleLinks = document.querySelectorAll('.nav_header .nav_link[style="display: block;"]');

      // Очищаем бургер-меню
      burgerNav.innerHTML = '';

      // Добавляем видимые ссылки в бургер-меню
      visibleLinks.forEach(link => {
        const clone = link.cloneNode(true);
        clone.style.display = 'block'; // Убедимся, что ссылка видима
        burgerNav.appendChild(clone);
      });
    }

    // Инициализация меню при загрузке
    updateBurgerMenuLinks();

    // Наблюдатель за изменениями в основном меню
    const observer = new MutationObserver(updateBurgerMenuLinks);
    const navHeader = document.querySelector('.nav_header');
    if (navHeader) {
      observer.observe(navHeader, {
        attributes: true,
        attributeFilter: ['style'],
        subtree: true
      });
    }

    // Обработчик клика по бургер-иконке
    burgerIcon.addEventListener('click', function() {
      this.classList.toggle('open');
      burgerNav.classList.toggle('open');
    });

    // Закрытие меню при клике на ссылку
    burgerNav.addEventListener('click', function(e) {
      if (e.target.classList.contains('nav_link')) {
        burgerIcon.classList.remove('open');
        burgerNav.classList.remove('open');
      }
    });
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.delivery').forEach(block => {
        observer.observe(block);
    });
});
</script>
</body>

</html>