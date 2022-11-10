<?php get_header() ?>
<div id="carouselExampleIndicators" class="c-main-view carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo esc_url(get_theme_file_uri('images/photo-53.jpg')) ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo esc_url(get_theme_file_uri('images/photo-41.jpg')) ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo esc_url(get_theme_file_uri('images/photo-03.jpg')) ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <div class="c-main-view__text">
        <div class="c-main-view__text-lead"><span>すべてのクリエイターや</span><span>そのファンをリアルでつなげる</span></div>
        <h2 class="c-main-view__text-title my-3">Making Show</h2>
        <div class="c-main-view__text-day">
            2022年11月5日（土）11:00～20:00 <br>
            2022年11月6日（日）10:00～20:00
        </div>
        <a href="<?php echo home_url('/ticket/') ?>" class="mt-3 btn btn-primary">チケットを購入する</a>
    </div>
</div>
<main>

    <section class="l-section my-5 container">
        <div class="c-news">
            <div class="c-news__title text-primary">
                <h2>お知らせ</h2>
            </div>
            <div class="c-cards row row-cols-1 row-cols-md-3 g-4">
                <?php
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ];

                $args['tax_query'][] = [
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'news',

                ];

                $query = new WP_Query($args);



                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                        <div class="col">
                            <a class="c-card__link text-decoration-none" href="<?php the_permalink() ?>">
                                <div class="card">
                                    <?php

                                    $image_url = get_theme_file_uri('images/photo-03.jpg');
                                    if (has_post_thumbnail()) {
                                        $image_url = get_the_post_thumbnail_url(null, 'large');
                                    }
                                    ?>
                                    <img src="<?php echo esc_url($image_url) ?>" class="card-img-top" alt="...">
                                    <div class="c-card__body card-body">
                                        <h5 class="card-title text-dark"><?php the_title() ?></h5>
                                        <div class="c-card__text-content card-text text-dark"><?php the_content() ?></div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between">
                                        <span class="bg-primary py-1 px-2 text-light rounded"><?php echo esc_html(get_the_terms(get_the_ID(), 'category')[0]->name) ?></span>
                                        <span class="bg-primary  py-1 px-2  text-light rounded"><?php the_field('map') ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="l-section my-5 container">
        <div class="c-open-info">
            <div class="c-open-info__title">
                <h2 class="text-primary">開催情報</h2>
            </div>
            <div class="c-open-info__content d-flex flex-md-row-reverse flex-column align-items-center">
                <div class="c-open-info__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/photo-10.jpg')) ?>" alt="">
                </div>
                <div class="c-open-info__text">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">日時</th>
                                <td>
                                    2022年11月5日（土）11:00～20:00 <br>
                                    2022年11月6日（日）10:00～20:00
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">会場/アクセス</th>
                                <td>
                                    幕張メッセ 国際展示場 展示ホール1～3<br>
                                    千葉県千葉市美浜区中瀬2丁目1<br>
                                    JR京葉線 『海浜幕張駅』から徒歩約5分 (東京から快速利用で約30分)<br>
                                    JR総武線・京成線『幕張本郷駅』から『幕張メッセ中央』行きバスで約17分
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">ブース数（2日間合計）</th>
                                <td>企業ブース:25ブース<br>
                                    一般出展:約1,800ブース<br>
                                    ※ブース配置はパンフレットをご参照ください
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">入場料</th>
                                <td>
                                    1日券:700円<br>
                                    2日通し券:1,200円<br>
                                    ※前売り券は100円引き
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="l-section my-5">
        <div class="c-ticket">
            <div class="c-ticket__img">
                <img src="<?php echo esc_url(get_theme_file_uri('images/photo-17.jpg')) ?>" alt="">
            </div>
            <div class="c-ticket__content">
                <div class="c-ticket__lead text-light mb-3 d-flex flex-column flex-md-row"><span>創作を通してつながった輪から</span><span>さらに次の創作が生まれていく</span></div>
                <div>
                    <a href="<?php echo home_url('/ticket/') ?>" class="btn btn-primary c-ticket__btn">チケット購入はこちら</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>