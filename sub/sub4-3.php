<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head4.php');
?>

      <section class="page-header sub-sec">
        <h3 class="sub-tit">특별이벤트</h3>
      </section>
      <section class="sub-specialevent sub-sec">
        <div class="sub-inner">
          <figure>
            <img src="/img/sub4-special1.jpg" alt="">
            <img src="/img/sub4-special2.jpg" alt="">
          </figure>
        </div>
      </section>

<?php
include_once(G5_PATH.'/tail1.php');