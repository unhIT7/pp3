<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head3.php');
?>

      <section class="page-header sub-sec">
        <h2 class="sub-tit">땅스오더 APP 소개</h2>
      </section>
      <section class="app-intro sub-sec">
        <div class="sub-inner">
          <div class="app-intro-txt">
            <h3>이젠 배달도 저렴하게 <em><span>땅스오더</span>에서 바로 주문</em></h3>
            <p>배달 가격이 부담됐다면 <span>땅스오더</span> 다운받고 <span>동행축제 기간엔 매일매일 3천원 할인!!</span></p>
            <span>*동행축제 기간: 2023년 8월 30일부터 ~ 9월 27일까지</span>
          </div>
        </div>
      </section>
      <section class="app-dwn sub-sec">
        <div class="sub-inner">
          <h3>땅스오더<em>다운받기</em>클릭</h3>
          <div class="app-dwn-link">
            <a href="#"><img src="/img/app-apple.png" alt=""></a>
            <a href="#"><img src="/img/app-android.png" alt=""></a>
          </div>
          <figure class="app-poster"><img src="/img/app-poster.jpg" alt=""></figure>
        </div>
      </section>
      <section class="app-sale sub-sec">
        <div class="sub-inner">
          <div class="app-sale-header">
            <h3>매일매일 할인쿠폰 받고<br><em><span>SAVE</span> MONEY</em></h3>
            <p><span>땅스오더에서는 매일매일이 <em>할인데이</em>!!</span></p>
          </div>
          <div class="app-sale-oder">
            <em><span>땅스오더</span> 이용방법</em>
            <ul>
              <li>앱스토어 or 플레이스토어 접속</li>
              <li>땅스오더 검색</li>
              <li>회원가입 후 할인쿠폰 다운로드</li>
              <li>장바구니에<br>메뉴 담기</li>
              <li>쿠폰적용하고 주문하기</li>
            </ul>
          </div>
        </div>
      </section>

<?php
include_once(G5_PATH.'/tail.php');