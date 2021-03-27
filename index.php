<?php get_header(); ?>

    <!-- main -->
    <main id="top" class="l-main">

        <!-- first view -->
        <div class="p-fv">
            <div class="p-fv__box">
                <p class="p-fv__box__title">
                    Leon<br>
                    Iwanaga
                </p>
                <p class="p-fv__box__txt">
                    Front-End Engineer<br>
                    Video Editor<br>
                    PC Gamer
                </p>
            </div>
            <a href="#sec1" class="p-fv__scroll">
                Scroll
            </a>
        </div>

        <!-- profile -->
        <section id="sec1" class="p-section p-profile">
            <div class="l-container">
                <h2 class="p-profile__title c-top-title">
                    What I Do
                </h2>
                <p class="p-profile__txt c-fade-in">
                    都内の大学に通いながら、Web制作を中心に活動しています。<br>
                    迅速かつ丁寧にコミュニケーションをとり、安心してご依頼いただける環境づくりを心がけています。
                </p>
            </div>
        </section>

        <!-- about -->
        <section class="p-section p-about">
            <div class="l-container">
                <div class="c-flex">
                    <div class="p-about__box">
                        <h3 class="p-about__box__sub-title c-sub-title c-fade-in"> <!-- ::afterで下線 -->
                            About me
                        </h3>
                        <p class="p-about__box__txt p-about__box__name">
                            岩永 礼恩<span>- Iwanaga Leon -</span><br>
                        </p>
                        <p class="p-about__box__txt">
                            <time datetime="2000-03-25">2000/03/25</time>
                            <span>21歳</span> 
                            東京都出身<br>
                        </p>
                        <p class="p-about__box__txt">
                            趣味：<br>
                            PCゲーム（FPS）、旅行、ドライブ、動画撮影・編集
                        </p>
                    </div>
                    
                    <div class="p-about__box">
                        <h3 class="p-about__box__sub-title c-sub-title c-fade-in"> <!-- ::afterで下線 -->
                            Skill
                        </h3>
                        <p class="p-about__box__skill">
                            HTML ｜ CSS ｜ JavaScript ｜ jQuery ｜ Sass<br>
                            CSS設計（FLOCSS）<br>
                            CMS（WordPress） ｜ Adobe XD ｜ Premire Pro<br>
                            Git（Sourcetree） ｜ GitHub<br>
                            etc...
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- services -->
        <section id="sec2" class="p-section p-service">
            <div class="l-container">
                <h2 class="p-service__title c-section-title c-fade-in">
                    SERVICES
                </h2>
                <div class="c-flex">
                    <article class="p-service__web">
                        <h3 class="p-service__web__title">
                            Webサイト制作
                        </h3>
                        <i class="fas fa-laptop-code"></i>
                        <p>
                            HTML・CSS (Sass) ・JavaScript (jQuery) を用いて静的、動的なWebサイトを制作することが可能です。
                        </p>
                        <p>
                            約80%以上の方がスマートフォンでWebサイトを閲覧されている現在、どのデバイスにも対応したレスポンシブなWebサイトを制作いたします。
                        </p>
                        <p>
                            また、FLOCSSによるCSS設計を取り入れ、作業効率向上と共同作業に対応しています。
                        </p>
                    </article>

                    <article class="p-service__wp">
                        <h3 class="p-service__wp__title">
                            WordPress
                        </h3>
                        <i class="fab fa-wordpress"></i>
                        <p>
                            WordPress導入、必要プラグインの追加などのWordPress化に必要な工程全般をお受けいたします。
                        </p>
                        <p>
                            すでにお持ちの静的なサイトのWordPress化も可能です。編集、更新のしやすいサイトを制作いたします。
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- works -->
        <section id="sec3" class="p-section p-works">
            <div class="c-slider-container">
                <h2 class="p-works__title c-section-title c-fade-in">
                    WORKS
                </h2>
                <div class="p-works__slider js-slider">
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                </div>
                <div class="p-works__thumb js-thumb">
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                    <a href="https://github.com/Noeswt"><img src="<?php echo get_template_directory_uri(); ?>/images/cresta_third.jpg" alt=""></a>
                </div>
                <button class="p-works__btn c-btn-white c-slide-white">Read more ></button>
            </div>
        </section>

        <!-- contact -->
        <section id="sec4" class="p-section p-contact">
            <div class="l-container">
                <h2 class="p-contact__title c-section-title c-fade-in">
                    CONTACT
                </h2>
                <p class="p-contact__txt c-fade-in">
                    制作のご依頼、ご相談などはこちら<br>
                    お問い合わせはお気軽にどうぞ
                </p>
                <form action="" class="p-contact__form">
                    <div class="p-contact__form__inner">
                        <label for="name">お名前</label>
                        <input type="text" name="name">
                    </div>
                    <div class="p-contact__form__inner">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email">
                    </div>
                    <div class="p-contact__form__inner">
                        <label for="message">お問い合わせ内容</label>
                        <textarea name="message"></textarea>
                    </div>
                </form>
                <button class="p-contact__btn c-btn-black c-slide-black">Submit ></button>
            </div>
        </section>
    </main>

<?php get_footer(); ?>