<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <h2 class="hide">메인콘텐츠</h2>
      <section class="visual">
        <h3 class="hide">메인비주얼</h3>
        <div class="swiper visual-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide visual-slide1">
              <div class="swiper-slide-txt">
                <div class="swiper-slide-number">
                  <span>01</span><span>/</span><span>03</span>
                </div>
                <h3>가득햄 부대찌개</h3>
                <p>아쉬움 없도록 아낌없이 가득 담긴 땅스의 돋보적 햄들!</p>
              </div>
            </div>
            <div class="swiper-slide visual-slide2">
              <div class="swiper-slide-txt">
                <div class="swiper-slide-number">
                  <span>02</span><span>/</span><span>03</span>
                </div>
                <h3>몽글비지 부대찌개</h3>
                <p>국내산 콩으로 만든 담백한 비지와 순두부</p>
              </div>
            </div>
            <div class="swiper-slide visual-slide3">
              <div class="swiper-slide-txt">
                <div class="swiper-slide-number">
                  <span>03</span><span>/</span><span>03</span>
                </div>
                <h3>땅스 부대떡볶이</h3>
                <p>질 좋은 햄 그대로 가득 떡볶이계의 센세이션</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next visual-btn"></div>
          <div class="swiper-button-prev visual-btn"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <section class="about sec">
        <div class="inner">
          <header class="sec-header">
            <h3 class="tit">About TS FOOD</h3>
            <p class="desc">땅스부대찌개를 선택해야 하는 이유! 부대찌개 분야 독보적 브랜드 땅스부대찌개</p>
            <a href="/sub/sub1-1.php" class="more">브랜드소개 바로가기<span class="plus-icon"><i class="xi-plus-circle"></i></span></a>
          </header>
          <ul class="about-wrap">
            <li class="about-wrap-list">
              <a href="/sub/sub1-2.php" class="about-wrap-box">
                <div class="about-wrap-tit">
                  <h4><span>History</span>연혁</h4>
                </div>
                <span class="plus-icon"><i class="xi-plus-circle"></i></span>
              </a>
            </li>
            <li class="about-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=notice" class="about-wrap-box">
                <div class="about-wrap-tit">
                  <h4><span>News</span>뉴스</h4>
                </div>
                <span class="plus-icon"><i class="xi-plus-circle"></i></span>
              </a>
            </li>
            <li class="about-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=event" class="about-wrap-box">
                <div class="about-wrap-tit">
                  <h4><span>Event</span>이벤트</h4>
                </div>
                <span class="plus-icon"><i class="xi-plus-circle"></i></span>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="menu sec">
        <div class="inner">
          <header class="sec-header">
            <h3 class="tit hide">메뉴</h3>
          </header>
          <ul class="menu-wrap">
            <li class="menu-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu1" class="menu-wrap-box">
                <h4 class="menu-wrap-tit">부대찌개</h4>
                <figure class="menu-wrap-img">
                  <img src="/img/menu1.jpg" alt="">
                </figure>
              </a>
            </li>
            <li class="menu-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu1" class="menu-wrap-box">
                <h4 class="menu-wrap-tit">신메뉴</h4>
                <figure class="menu-wrap-img">
                  <img src="/img/menu2.jpg" alt="">
                </figure>
              </a>
            </li>
            <li class="menu-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu2" class="menu-wrap-box">
                <h4 class="menu-wrap-tit">떡볶이</h4>
                <figure class="menu-wrap-img">
                  <img src="/img/menu3.jpg" alt="">
                </figure>
              </a>
            </li>
            <li class="menu-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu2" class="menu-wrap-box">
                <h4 class="menu-wrap-tit">사이드와 음료</h4>
                <figure class="menu-wrap-img">
                  <img src="/img/menu4.jpg" alt="">
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="store sec">
        <div class="inner">
          <header class="sec-header">
            <h3 class="tit">Sotre & APP</h3>
            <p class="desc">전국 620여개 가맹점들의 배달 서비스를 이용해보세요.</p>
          </header>
          <ul class="store-wrap">
            <li class="store-wrap-list">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=map" class="store-wrap-box">
                <figure class="store-wrap-img">
                  <img src="/img/store-img.jpg" alt="">
                </figure>
                <div class="store-wrap-txt">
                  <h4>Store</h4>
                  <p>가까운 땅스부대찌개 매장에서<br>부대찌개를 즐겨보세요</p>
                </div>
              </a>
            </li>
            <li class="store-wrap-list">
              <a href="/sub/sub3-1.php" class="store-wrap-box">
                <figure class="store-wrap-img">
                  <img src="/img/app.jpg" alt="">
                </figure>
                <div class="store-wrap-txt">
                  <h4>Mission</h4>
                  <p>언제 어디서든 땅스부대찌개를<br>쉽고 빠르게 만나요</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="consulting sec">
        <div class="inner">
          <header class="sec-header">
            <h3 class="tit">Consulting</h3>
            <p class="desc">부대찌개 포장· 배달의 원조<br>땅스부대찌개의 자신감을 함께 경험하세요.</p>
            <a href="/sub/sub5-1.php" class="more">상담문의 바로가기<span class="plus-icon"><i class="xi-plus-circle"></i></span></a>
          </header>
        </div>
      </section>
      <section class="notice sec">
        <div class="inner">
          <header class="sec-header">
            <h3 class="tit">Notice</h3>
            <p class="desc">땅스부대찌개의 새로운 소식을 알려드립니다.</p>
          </header>
          <div class="notice-swiper">
            <?php    echo latest('swiper_card2', 'notice', 4, 23);    ?>
          </div>
          <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=notice" class="notice-more"><span>전체보기<i class="xi-plus"></i></span><i class="xi-plus-circle"></i></a>
        </div>
      </section>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".visual-swiper", {
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".visual-swiper .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".visual-swiper .swiper-button-next",
      prevEl: ".visual-swiper .swiper-button-prev",
    },
  });
</script>

<script>
var swiper = new Swiper(".notice-swiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  navigation: {
    nextEl: ".notice-swiper.swiper-button-next",
    prevEl: ".notice-swiper.swiper-button-prev",
  },
  pagination: {
    el: ".notice-swiper.swiper-pagination",
    clickable: true,
  },
  keyboard: true,
  breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      780: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
});
</script>

<?php
include_once(G5_PATH.'/tail.php');