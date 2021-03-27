<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="岩永 礼恩｜Leon Iwanaga のPortfolio">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    
    <script src="https://kit.fontawesome.com/3101a44c6b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>岩永礼恩｜Leon Iwanaga - Portfolio</title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <div class="l-header-container">
            <div class="p-header">
                <a href="#top" class="p-header__title">
                    <h1 class="p-header__title__txt"><?php bloginfo( 'name' ); ?></h1>
                </a>
                <nav class="p-header__nav"> <!-- menu open -->
                    <ul class="p-header__nav__ul">
                        <li class="p-header__nav__ul__li"><a href="#sec1">ABOUT</a></li>
                        <li class="p-header__nav__ul__li"><a href="#sec2">SERVICES</a></li>
                        <li class="p-header__nav__ul__li"><a href="#sec3">WORKS</a></li>
                        <li class="p-header__nav__ul__li"><a href="#sec4">CONTACT</a></li>
                    </ul>
                </nav>

                <!-- burger-button -->
                <button class="p-header__burger-btn js-burger-btn"> <!-- on click --> <!-- menu open -->
                    <span class="p-header__burger-btn__bar"></span> <!-- menu open -->
                    <span class="p-header__burger-btn__bar"></span> <!-- menu open -->
                    <span class="p-header__burger-btn__bar"></span> <!-- menu open -->
                </button>
            </div>
        </div>
    </header>   