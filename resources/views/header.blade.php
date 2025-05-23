<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">
    @vite(['/app.css', 'public/java.js','resources/js/app.js', 'public/javafigure.js'])
    <title>Eco Portal</title>
</head>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const burgerBtn = document.querySelector('.burger-btn');
        const mobileMenu = document.querySelector('.mobile-menu');
        const overlay = document.querySelector('.overlay');

        burgerBtn.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', function() {
            burgerBtn.classList.remove('active');
            mobileMenu.classList.remove('active');
            this.classList.remove('active');
        });
    });
</script>

<body>
    <div class="adress">
        <div class="burger-menu">
            <div class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="burger-nav">
                <a href="/catalog" class="nav_link" data-lang-content="es" style="display: block;">Página de catálogo</a>
                <a href="/catalog" class="nav_link" data-lang-content="pt" style="display: none;">Página do catálogo</a>
                <a href="/catalog" class="nav_link" data-lang-content="en" style="display: none;">Catalog page</a>
                <a href="/about" class="nav_link" data-lang-content="es" style="display: block;">Sobre nosotros</a>
                <a href="/about" class="nav_link" data-lang-content="pt" style="display: none;">Sobre nós</a>
                <a href="/about" class="nav_link" data-lang-content="en" style="display: none;">About us</a>
                <a href="/delivery" class="nav_link" data-lang-content="es" style="display: block;">Entrega</a>
                <a href="/delivery" class="nav_link" data-lang-content="pt" style="display: none;">Entrega</a>
                <a href="/delivery" class="nav_link" data-lang-content="en" style="display: none;">Delivery</a>
                <a href="/montage" class="nav_link" data-lang-content="es" style="display: block;">Montaje</a>
                <a href="/montage" class="nav_link" data-lang-content="pt" style="display: none;">Montagem</a>
                <a href="/montage" class="nav_link" data-lang-content="en" style="display: none;">Assembly</a>
                <a href="/comments" class="nav_link" data-lang-content="es" style="display: block;">Comentarios</a>
                <a href="/comments" class="nav_link" data-lang-content="pt" style="display: none;">Comentários</a>
                <a href="/comments" class="nav_link" data-lang-content="en" style="display: none;">Comments</a>
                <a href="/contacts" class="nav_link" data-lang-content="es" style="display: block;">Contactos</a>
                <a href="/contacts" class="nav_link" data-lang-content="pt" style="display: none;">Contatos</a>
                <a href="/contacts" class="nav_link" data-lang-content="en" style="display: none;">Contacts</a>
            </nav>
        </div>
        <a href="">Asuncion, Villa Elisa</a>
        <div class="custom-language-selector">

            <div class="selected-language">
                <img src="/img/gb-eng.svg" class="flag">
                <span class="arrow">▼</span>
            </div>
            <ul class="language-options">
                <li data-lang="en">
                    <img src="/img/gb-eng.svg" class="flag">
                </li>
                <li data-lang="es">
                    <img src="/img/es.svg" class="flag">
                </li>
                <li data-lang="pt">
                    <img src="/img/br.svg" class="flag">
                </li>
            </ul>
        </div>
    </div>
    <div class="header">
        <div class="search">
            <div class="logo">
                <div class="logotip">
                    <a href="/"><img src="\img\logo80x80.png" alt=""></a>
                </div>
                <div class="interes">
                    <div class="text_interes">
                        <p data-lang-content="es">Estudio topiari</p>
                        <p data-lang-content="pt" style="display: none;">Topiari studio</p>
                        <p data-lang-content="en" style="display: none;">Topiari studio</p>
                    </div>
                    <div class="text_interes_green">
                        <p>El Toque Verde</p>
                    </div>
                    <div class="text_interes">
                        <p data-lang-content="es">Producción de figuras topiarias</p>
                        <p data-lang-content="pt" style="display: none;">Produção de figuras de topiaria</p>
                        <p data-lang-content="en" style="display: none;">Production of topiary figures</p>
                    </div>
                </div>
            </div>
            <div class="header-search">
                <div class="time-email">
                    <div class="time">
                        <img class="img-clock" src="\img\clock.svg">
                        <div>
                            <p data-lang-content="es">Régimen del trabajo:</p>
                            <p data-lang-content="pt" style="display: none;">Regime de trabalho:</p>
                            <p data-lang-content="en" style="display: none;">Work regime:</p>
                            <p data-lang-content="es">Lun-Dom 9:00-19:00</p>
                            <p data-lang-content="pt" style="display: none;">Lun-Dom 9:00-19:00</p>
                            <p data-lang-content="en" style="display: none;">Mon-Sun 9:00-19:00</p>
                        </div>
                    </div>
                    <div class="email">
                        <img class="img-email" src="\img\email.svg">
                        <div>
                            <p>Email:</p>
                            <p>ecoportal@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="search-block">
                    <form action="" method="get">
                        <input class="search-line" type="text" name="query" placeholder="Buscar por catálogo...">
                    </form>
                </div>
            </div>
            <div class="phone_adres">
                <div class="phone-1">
                    <img src="\img\phone-modern.svg" alt="" width="15" height="20">
                    <a href="https://wa.me/595994799700">
                        <p>+595 994 799 700</p>
                    </a>
                </div>
                <!-- <div class="phone-2">
                    <img src="\img\phone-modern.svg" alt="" width="15" height="20">
                    <p>+595 123 123 123</p>
                </div> -->
            </div>
        </div>
        <nav class="nav_header">
            @include('nav')
        </nav>
    </div>