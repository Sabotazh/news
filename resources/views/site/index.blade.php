<x-app-layout>
    <header data-lp>
        <div class="container">
            <a href="./home.html" class="header-logo">
                <picture>
                    <source srcset="{{ asset('img/components/logo-text.webp') }}" media="(min-width: 768px)"/>
                    <source srcset="{{ asset('img/components/logo-text.png') }}" media="(min-width: 768px)"/>

                    <source srcset="{{ asset('img/components/logo.webp') }}"/>
                    <source srcset="{{ asset('img/components/logo.png') }}"/>

                    <img src="{{ asset('img/components/logo.png') }}" alt="" />
                </picture>


            </a>

            <div class="header-main">
                <nav>
                    <ul>
                        <li>
                            <a href="./about.html">{{ __('About the fund') }}</a>
                        </li>
                        <li>
                            <a href="./projects.html">{{ __('Projects') }}</a>
                        </li>
                        <li>
                            <a href="">{{ __('News and events') }}</a>
                        </li>
                        <li>
                            <a href="">{{ __('Donors') }}</a>
                        </li>
                        <li>
                            <a href="">{{ __('Contacts') }}</a>
                        </li>
                    </ul>
                </nav>

                <div class="lang-switcher">
                    <div class="lang-switcher__selected">uk</div>
                    <ul class="lang-switcher__list">
                        <li>
                            <a href="">pl</a>
                        </li>
                        <li>
                            <a href="" class="current">UK</a>
                        </li>
                        <li>
                            <a href="">en</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="header-btns">
                <a href="/donation.html" class="btn-icon bg-red icon-link" data-text="{{ __('Support the fund') }}">Підтримати</a>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="header-overflow"></div>
        </div>
    </header>



    <div class="blog">
        <section class="main-header">
            <div class="container">
                <ul class="breadcrumb _white">
                    <li><a href="">Головна</a></li>
                    <li><span>Новини та події </span></li>
                </ul>
                <h1 class="main-header__title">Новини та події </h1>
                <div class="main-header__description">
                    <p>
                        Тут ви знайдете важливі новини з приводу зборів та напрямів діяльності фонду, анонси майбутніх подій та інші матеріали від фонду. Lorem ipsum
                        dolor sit amet consectetur.
                    </p>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="tabs-block">
                <div class="tabs-buttons">
                    <a href="./news.html" class="tab-btn active">Новини</a>
                    <a href="./event.html" class="tab-btn">події</a>
                </div>
                <div class="tab-content">
                    <div class="tab-item active">
                        <div class="blog-cards">
                            <a href="" class="link-block blog-cart">
                                <span class="icon-link _red"></span>
                                <div class="blog-cart__top">
                                    <p class="blog-cart__type">Новина</p>
                                    <p class="blog-cart__date">10/11/2023</p>
                                </div>
                                <div class="blog-cart__img">
                                    <picture>
                                        <source srcset="/img/delete/project-img.webp" type="image/webp">
                                        <source srcset="/img/delete/project-img.jpg" type="image/jpeg">

                                        <img src="/img/delete/project-img.jpg" loading="lazy" alt="">
                                    </picture>
                                </div>
                                <p class="link-text">
                                    Lorem ipsum dolor sit amet consectetur. Nulla sagittis mattis lacus sem. Arcu congue.
                                </p>
                            </a>
                            <a href="" class="link-block blog-cart">
                                <span class="icon-link _red"></span>
                                <div class="blog-cart__top">
                                    <p class="blog-cart__type">Новина</p>
                                    <p class="blog-cart__date">10/11/2023</p>
                                </div>
                                <div class="blog-cart__img">
                                    <picture>
                                        <source srcset="/img/delete/project-img.webp" type="image/webp">
                                        <source srcset="/img/delete/project-img.jpg" type="image/jpeg">

                                        <img src="/img/delete/project-img.jpg" loading="lazy" alt="">
                                    </picture>
                                </div>
                                <p class="link-text">
                                    Lorem ipsum dolor sit amet consectetur. Nulla sagittis mattis lacus sem. Arcu congue.
                                </p>
                            </a>
                            <a href="" class="link-block blog-cart">
                                <span class="icon-link _red"></span>
                                <div class="blog-cart__top">
                                    <p class="blog-cart__type">Новина</p>
                                    <p class="blog-cart__date">10/11/2023</p>
                                </div>
                                <div class="blog-cart__img">
                                    <picture>
                                        <source srcset="/img/delete/project-img.webp" type="image/webp">
                                        <source srcset="/img/delete/project-img.jpg" type="image/jpeg">

                                        <img src="/img/delete/project-img.jpg" loading="lazy" alt="">
                                    </picture>
                                </div>
                                <p class="link-text">
                                    Lorem ipsum dolor sit amet consectetur. Nulla sagittis mattis lacus sem. Arcu congue.
                                </p>
                            </a>
                            <a href="" class="link-block blog-cart">
                                <span class="icon-link _red"></span>
                                <div class="blog-cart__top">
                                    <p class="blog-cart__type">Новина</p>
                                    <p class="blog-cart__date">10/11/2023</p>
                                </div>
                                <div class="blog-cart__img">
                                    <picture>
                                        <source srcset="/img/delete/project-img.webp" type="image/webp">
                                        <source srcset="/img/delete/project-img.jpg" type="image/jpeg">

                                        <img src="/img/delete/project-img.jpg" loading="lazy" alt="">
                                    </picture>
                                </div>
                                <p class="link-text">
                                    Lorem ipsum dolor sit amet consectetur. Nulla sagittis mattis lacus sem. Arcu congue.
                                </p>
                            </a>
                        </div>

                        <div class="pagination">
                            <button type="button" class="btn-icon icon-loader border-blue reverse btn-more">Більше новин</button>
                            <div class="pagination-elems">
                                <a href="" class="pagin-elem arrow arrow-prev">Назад</a>
                                <a href="" class="pagin-elem">1</a>
                                <span class="pagin-elem dots">...</span>
                                <a href="" class="pagin-elem additional-page">30</a>
                                <a href="" class="pagin-elem current">31</a>
                                <a href="" class="pagin-elem additional-page">32</a>
                                <span class="pagin-elem dots">...</span>
                                <a href="" class="pagin-elem">44</a>
                                <a href="" class="pagin-elem arrow arrow-next disabled">Вперед</a>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-credentials _js-modal js-modal-bank-transfer" data-overlay >
            <div class="modal-content">
                <button type="button" class="modal-close _js-btn-close-modal"></button>

                <p class="credentials-title">Банківський переказ</p>

                <ul class="credentials-list">
                    <li>
                        <p><strong>Nazwa odbiorcy:</strong> Odrodzimy Dziedzictwo Kulturowe</p>
                    </li>
                    <li>
                        <p><strong>Nazwa banku:</strong> Powszechna Kasa Oszczednosci Bank Polski SA</p>
                    </li>
                    <li>
                        <p><strong>Kod BIC (Swift) banku:</strong> BPKOPLPW</p>
                    </li>
                </ul>

                <div class="credential-cards">
                    <div class="credential-card">
                        <div class="credential-card__top">
                            Numer rachunku odbiorcy <span>Polish Zloty (PLN)</span>
                        </div>
                        <div class="credential-card__bank">
                            PL71 1020 4274 0000 1202 0100 8739
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-credentials _js-modal js-modal-paypal " data-overlay>
            <div class="modal-content">
                <button type="button" class="modal-close _js-btn-close-modal"></button>

                <p class="credentials-title">Paypal</p>

                <div class="credential-cards">
                    <div class="credential-card">
                        <div class="credential-card__bank">mail@gmail.com</div>
                        <div class="credential-card__desc">
                            <p>
                                <strong>Комментар:</strong> Благодійний  внесок
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-credentials _js-modal js-modal-swift" data-overlay>
            <div class="modal-content">
                <button type="button" class="modal-close _js-btn-close-modal"></button>

                <p class="credentials-title">SWIFT перекази</p>



                <ul class="credentials-list">
                    <li>
                        <p>
                            <strong>Beneficiary name:</strong> Odrodzimy Dziedzictwo Kulturowe
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Beneficiary bank name:</strong> Powszechna Kasa Oszczednosci Bank Polski SA
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Beneficiary bank code:</strong> BPKOPLPW
                        </p>
                    </li>
                    <li>
                        <p>
                            <strong>Możliwe dopiski:</strong> Ah decyduje, pomoc humanitarna, woda, żywność, edukacja lub wybrany kraj naszych działań
                        </p>
                    </li>
                </ul>


                <div class="credential-cards">
                    <div class="credential-card">
                        <div class="credential-card__top">
                            Beneficiary account <span>US Dollar (USD)</span>
                        </div>
                        <div class="credential-card__bank">
                            PL09 1020 4274 0000 1202 0103 8470
                        </div>
                    </div>
                    <div class="credential-card">
                        <div class="credential-card__top">
                            Beneficiary account <span>Euro (EUR)</span>
                        </div>
                        <div class="credential-card__bank">
                            PL76 1020 4274 0000 1002 0100 8747
                        </div>
                    </div>
                    <div class="credential-card">
                        <div class="credential-card__top">
                            Beneficiary account <span>Great Britain Pound (GBP)</span>
                        </div>
                        <div class="credential-card__bank">
                            PL00 0000 0000 0000 0000 0000 0000
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-alert _js-modal js-modal-alert-success" data-overlay>
            <div class="modal-content">
                <button type="button" class="modal-close _js-btn-close-modal"></button>

                <p class="alert-title">Дякуємо</p>
                <p class="alert-subtitle">Ваша заявка на співпрацю прийнята</p>
                <div class="alert-desc">
                    <p>
                        Наша служба турботи зв'яжеться з вами найближчим часом для уточнення деталей.
                    </p>
                </div>
            </div>
        </div>

        <div class="overlay-modal"></div>

        <div class="msg-widget">
            <button type="button" class="widget-show"></button>

            <a href="" class="widget-item _whats-app"></a>
            <a href="" class="widget-item _facebook-messenger"></a>
        </div>

        <footer class="_anim-items _anim-no-hide _anim-fade-in-up" data-start="10">
            <div class="container">
                <div class="footer-wrapper">
                    <div class="footer-top">
                        <a href="./home.html" class="logo">
                            <picture>
                                <source srcset="/img/components/logo-text__white.webp"/>
                                <source srcset="/img/components/logo-text__white.png"/>
                                <img src="/img/components/logo-text__white.png" loading="lazy" alt=""/>
                            </picture>
                        </a>
                        <div class="list-contact">
                            <p class="top-list__title">Адреса:</p>
                            <ul>
                                <li>Portowa 26, 47-205 Kędzierzyn-Koźle,Польша</li>
                                <li>NIP 118-14-28-385, KRS 0000037904</li>
                            </ul>
                        </div>
                        <div class="list-contact">
                            <p class="top-list__title">Контакти:</p>
                            <ul>
                                <li><a href="tel:+48123456789">+48 (123) 456-789</a></li>
                                <li><a href="mailto:mail@gmail.com">mail@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-main">
                        <div class="menu-item footer-dropdown">
                            <p class="menu-title">Про фонд</p>
                            <ul>
                                <li><a href="">Історія </a></li>
                                <li><a href="">Місія та цілі</a></li>
                                <li><a href="">Структура Фонду</a></li>
                                <li><a href="">Майно фонду</a></li>
                                <li><a href="">Інструкції щодо використання веб-сайту BIP</a></li>
                                <li><a href="">Дані Національного судового реєстру, Статут, звіти</a></li>
                            </ul>
                        </div>
                        <div class="menu-item footer-dropdown">
                            <p class="menu-title">Пожертвування</p>
                            <ul>
                                <li><a href="">Пожертвувати 1,5% від вашого податку</a></li>
                                <li><a href="">Онлайн внесок через Hotpay.pl</a></li>
                                <li><a href="">Соціально відповідальний бізнес</a></li>
                                <li><a href="">Обрати інші форми підтримки</a></li>
                            </ul>
                        </div>
                        <div class="menu-item footer-dropdown">
                            <p class="menu-title">Донори</p>
                            <ul>
                                <li><a href="">Вони нам допомагають</a></li>
                                <li><a href="">Співпраця</a></li>
                                <li><a href="">Форми подяки</a></li>
                            </ul>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-title">Як ми допомагаємо</a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-title">Проекти</a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-title">Новини та події</a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-title">Контакти</a>
                        </div>
                        <div class="social-network">
                            <a href="" class="link-block sn-card _instagram">
                                <span class="icon-link _white"></span>
                                <p class="link-text">
                                    Instagram
                                </p>
                            </a>
                            <a href="" class="link-block sn-card _facebook">
                                <span class="icon-link _white"></span>
                                <p class="link-text">
                                    Facebook
                                </p>
                            </a>
                            <a href="" class="link-block sn-card _pinterest">
                                <span class="icon-link _white"></span>
                                <p class="link-text">
                                    Pinterest
                                </p>
                            </a>
                            <a href="" class="link-block sn-card _youtube">
                                <span class="icon-link _white"></span>
                                <p class="link-text">
                                    Youtube
                                </p>
                            </a>
                            <a href="" class="link-block sn-card _twitter">
                                <span class="icon-link _white"></span>
                                <p class="link-text">
                                    Twitter
                                </p>
                            </a>
                            <a href="" class="link-block sn-card _tik-tok">
                                <span class="icon-link _white"></span>
                                <p class="link-text">
                                    TikTok
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="social-network">
                        <a href="" class="link-block sn-card _instagram">
                            <span class="icon-link _white"></span>
                            <p class="link-text">
                                Instagram
                            </p>
                        </a>
                        <a href="" class="link-block sn-card _facebook">
                            <span class="icon-link _white"></span>
                            <p class="link-text">
                                Facebook
                            </p>
                        </a>
                        <a href="" class="link-block sn-card _pinterest">
                            <span class="icon-link _white"></span>
                            <p class="link-text">
                                Pinterest
                            </p>
                        </a>
                        <a href="" class="link-block sn-card _youtube">
                            <span class="icon-link _white"></span>
                            <p class="link-text">
                                Youtube
                            </p>
                        </a>
                        <a href="" class="link-block sn-card _twitter">
                            <span class="icon-link _white"></span>
                            <p class="link-text">
                                Twitter
                            </p>
                        </a>
                        <a href="" class="link-block sn-card _tik-tok">
                            <span class="icon-link _white"></span>
                            <p class="link-text">
                                TikTok
                            </p>
                        </a>
                    </div>
                    <div class="footer-contacts">
                        <div class="list-contact">
                            <p class="top-list__title">Адреса:</p>
                            <ul>
                                <li>Portowa 26, 47-205 Kędzierzyn-Koźle,Польша</li>
                                <li>NIP 118-14-28-385, KRS 0000037904</li>
                            </ul>
                        </div>
                        <div class="list-contact">
                            <p class="top-list__title">Контакти:</p>
                            <ul>
                                <li><a href="tel:+48123456789">+48 (123) 456-789</a></li>
                                <li><a href="mailto:mail@gmail.com">mail@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2546.24999176773!2d18.154321476550955!3d50.34324247157193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471111fa0637d445%3A0x952ed2afe9358ac7!2zUG9ydG93YSAyNiwgNDctMjA1IEvEmWR6aWVyenluLUtvxbpsZSwg0J_QvtC70YzRidCw!5e0!3m2!1suk!2sua!4v1704379255406!5m2!1suk!2sua"
                                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="footer-bottom">
                        <div class="policy">
                            <p>Фонд «Відродимо культурну спадщину» © {{ date('Y') }}</p>
                        </div>
                        <div class="author">
                            <p>Створено</p>
                            <a href="https://uaitlab.com/">
                                <img src="./img/components/uaitlab.svg" loading="lazy" alt="">
                                <img class="hover" src="./img/components/uaitlab-hover.svg" loading="lazy" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</x-app-layout>
