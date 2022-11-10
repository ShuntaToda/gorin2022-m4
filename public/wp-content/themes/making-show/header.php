<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>Making Show</title>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>


    <header class="l-header ">
        <nav class="navbar h-100 navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <h1 class="l-header__head">
                    <a class="navbar-brand l-header__logo" href="<?php echo home_url('')?>"><img class="" src="<?php echo esc_url(get_theme_file_uri('images/logo2.svg'))?>" alt=""></a>
                </h1>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo home_url('')?>">ホーム</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo home_url('//')?>">お知らせ・出店情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo home_url('/info/')?>">お問い合わせ</a>
                        </li>
                        
                    </ul>
                    <div>
                        <a href="<?php echo home_url('/ticket/')?>" class="l-header__ticket btn btn-outline-primary">チケット購入はこちら</a>
                    </div>
                </div>
                
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>