<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head3.php');
?>

      <section class="page-header sub-sec">
        <h2 class="sub-tit">e-금액권 사용법</h2>
      </section>
      <section class="e-intro sub-sec">
        <div class="sub-inner">
          <div class="e-intro-txt">
            <h3><span>집에서</span> 먹는 <em><em>맛있는</em> 한끼</em></h3>
            <ul>
              <li>
                <em>부담없이</em>
                <p><span>9,900원</span>의 부담없는 가격으로 즐겨보세요</p>
              </li>
              <li>
                <em>푸짐하게</em>
                <p>1인분의 가격으로 <br><span>3인분의 푸짐함</span>을 경험하세요</p>
              </li>
              <li>
                <em>간편하게</em>
                <p><span>재료 손질없이</span><br> 그대로 넣고 끓여드세요</p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="e-img sub-sec">
        <h3>e-금액권 이미지</h3>
        <figure><img src="/img/e-img-cupon.png" alt=""></figure>
      </section>
      <section class="e-caution">
        <div class="sub-inner">
          <p>e-금액권 사용 유의사항</p>
          <ul>
            <li>홀, 전화 (픽업) 주문시 사용 가능합니다.</li>
            <li>배달 주문 시 (배달어플 포함) 사용이 불가합니다.</li>
            <li>전국 사용 가능 매장에서 기재된 금액과 맞는 제품으로 교환 가능합니다.</li>
            <li>땅스부대찌개, 땅스떡볶이 브랜드 제품 모두 사용 가능합니다.</li>
            <li>보유하고 계신 e-금액권 초과금액은 차액이 발생할 수 있습니다.</li>
            <li>현금으로 교환되지 않으며, 전액 환불이 불가능합니다.</li>
            <li>유효기간은 발행일로부터 1년 입니다.</li>
            <li>특수매장 (구리 엘마트점, 천안 롯데마트 성정점) 은 사용이 제외됩니다.</li>
          </div>
        </ul>
      </section>

<?php
include_once(G5_PATH.'/tail.php');