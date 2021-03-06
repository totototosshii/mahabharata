<!--
	Template Name: ご予約
-->

<?php get_header(); ?>

  <!-- ファーストビュー -->
  <div class="fv">
    <div class="fv-content">
      <div class="site-title"><img src="<?php echo esc_url(get_theme_file_uri('images/site-title.png')); ?>" alt="世界最長の領事詩をピーター・ブルック以来の全編舞台化完全版マハーバーラタ"></div><!-- /.site-title -->
      <p class="schedule">
        <img src="<?php echo esc_url(get_theme_file_uri( 'images/schedule.png' )); ?>" alt="2020年７月４日〜７日 なかのZERO大ホール">
      </p><!-- /.schedule -->
      <a href="#" class="btn underlayer-ticket-btn">チケット予約サイトへ</a><!-- /.btn -->
    </div><!-- /.fv-content -->
  </div><!-- /.fv -->

  <!-- パンくずリスト -->
  <p class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <!-- Breadcrumb NavXT のパンくずを表示するための記述 -->
    <?php if(function_exists('bcn_display')){
        bcn_display();
      }
    ?>
  </p><!-- /.breadcrumbs -->

  <!-- メインコンテンツ -->
  <main>
    <section class="section">
      <div class="section-inner">
        <h2 class="section-head">INQUIRY</h2><!-- /.section-head -->
        <div class="section-content">
          <p class="confilm-read">
            お問い合わせありがとうございました。<br>
            メッセージは正常に送信されました。
          </p><!-- /.confilm-read -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <section class="section">
      <div class="section-inner">
        <div class="section-content">
          <h2 class="section-head">LATEST NEWS</h2><!-- /.section-head -->
          <div class="section-contents">
            <?php
              $args = array(
              'posts_per_page' => 5 // 表示件数
              );
              $posts = get_posts( $args );
              foreach ( $posts as $post ): // ループの開始
              setup_postdata( $post ); // 記事データの取得
            ?>
            <a href="<?php the_permalink(); ?>" class="contents-item">
              <picture class="news-img">
                <!-- アイキャッチ画像が設定されているなら -->
                <?php if ( has_post_thumbnail() ) : ?>
                  <!-- アイキャッチ画像を大サイズで表示 -->
                  <?php the_post_thumbnail( 'large' ); ?>
                <?php else : ?>
                <!-- アイキャッチ画像が無ければnoimage 画像を表示 -->
                  <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="NO IMAGEと灰色文字で記載された白背景画像">
                <?php endif; ?>
              </picture><!-- /.news-img -->
              <div class="news-text">
                <time class="article-time"><?php the_time( 'Y/n/j' ); ?></time><!-- /.article-time -->
                <h1 class="news-head">
                  <?php the_title(); ?>
                </h1><!-- /.news-head -->
              </div><!-- /.news-text -->
            </a><!-- /.contents-item -->
            <?php
              endforeach; // ループの終了
            ?>
          </div><!-- /.section-contents -->
          <a href="<?php echo home_url( '/category/news' ); ?>" class="btn news-btn">ニュース一覧へ</a><!-- /.btn -->
        </div><!-- /.section-content -->
      </div><!-- /.section-inner -->
    </section><!-- /.section -->

    <!-- SCHEDULE -->
    <?php get_template_part('template-parts/schedule-section'); ?>
  </main>

<?php get_footer(); ?>
