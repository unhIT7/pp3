<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head1.php');
?>

      <section class="page-header sub-sec">
        <h2 class="sub-tit">캐릭터</h2>
      </section>
      <section class="character sub-sec">
        <div class="sub-inner">
          <article class="character-intro">
            <div class="character-intro-txt">
              <h4><em>또기</em>랑 <em>햄구</em>를 소개해줄게!</h4>
              <ul>
                <li>#귀여움 주의</li>
                <li>#귀여움한도초과</li>
                <li>#땅스마을인싸</li>
              </ul>
            </div>
            <figure>
              <img src="/img/ddogi.svg" alt="또기">
              <img src="/img/hamgu.svg" alt="햄구">
            </figure>
          </article>
          <article class="character-intro-detail">
            <div class="ddogi">
              <div class="ddogi-detail">
                <h5>또기<span>DDOGI</span></h5>
                <em>#땅스마을의 핵심 주인공 #가래떡 #수줍은 #소심한 #다중인격</em>
                <ul>
                  <li>가래떡을 모티브로 디자인 한 땅스의 떡, 또기입니다.</li>
                  <li>소심하고 수줍음이 많지만 햄구의 장난을 잘 받아줍니다.</li>
                  <li>또기는 분노할 때 땅스떡볶이 육수를 마시며 감정을 드러냅니다.</li>
                  <li>땅스 육수로 빨갛게 물든 입이 매력 포인트입니다.</li>
                  <li>답답할 때마다 머리를 움켜잡다 보니, 두 귀가 가래떡처럼 늘어나버렸습니다.</li>
                  <li>맹해 보이지만 감정이 변할 때는 표정이 극단적으로 변합니다.</li>
                  <li>햄구가 사고를 칠 때마다 5단계로 분노 레벨이 올라갑니다.</li>
                </ul>
              </div>
              <figure>
                <img src="/img/about-img-ddogi.svg" alt="또기상세">
              </figure>
            </div>
            <div class="hamgu">
              <div class="hamgu-detail">
                <h5>햄구<span>HAMGU</span></h5>
                <em>#또기의 친한 친구 #햄 #터프한 #인싸 #쾌활한 #적극적인</em>
                <ul>
                  <li>또기의 친한 친구 햄구는 부대찌개의 동그란 햄을 모티브로 디자인 한 햄 강아지입니다.</li>
                  <li>볼은 살라미, 꼬리는 돼지고기 민찌로 되어있습니다.</li>
                  <li>쾌활하고 적극적이며, 후각이 뛰어나 맛난 재료를 알아보는 능력이 탁월합니다.</li>
                  <li>늘 가지고 다니는 파도 향기로운 파 냄새에 이끌려 찾아낸 최상급 파입니다.</li>
                  <li>땅스 마을을 열심히 휘젓고 다니는 천진난만한 강아지로,<br>땅스 친구들을 이끄는 리더 같은 존재입니다.</li>
                  <li>낮에는 이렇게 활발하지만, 밤이면 라면으로 뜨개질을 하거나<br>치즈 이불을 덮고 휴식을 취하는 반전 매력의 소유자랍니다.</li>
                </ul>
              </div>
              <figure>
                <img src="/img/about-img-hamgu.svg" alt="또기상세">
              </figure>
            </div>
          </article>
        </div>
      </section>
      <section class="character-face sub-sec">
        <div class="sub-inner">
          <div class="character-face-header">
            <h5>또기랑 햄구의 매력발산</h5>
            <p>뒤뚱뒤뚱 사랑스러운 뒷태와 익살맞은 표정부자들의 매력발산 TIME</p>
          </div>
          <div class="swiper character-face-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide slide1"></div>
              <div class="swiper-slide slide2"></div>
              <div class="swiper-slide slide3"></div>
              <div class="swiper-slide slide4"></div>
            </div>
            <div class="swiper-button-next slide-nav"></div>
            <div class="swiper-button-prev slide-nav"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>


      <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".character-face-swiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>


<?php
include_once(G5_PATH.'/tail.php');