<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

    </div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
    <footer id="footer" class="footer">
      <div class="inner">
        <div class="f-content">
          <div  class="f-content-box">
            <h2 class="f-content-logo"><a href="/index.php"><img src="/img/f_logo.png" alt="땅스부대찌개 로고"></a></h2>
            <ul class="f-content-addr">
              <li>
                <ul>
                  <li>회사명 (주)티에스푸드</li>
                  <li>대표 : 정경문</li>
                </ul>
              <li><address>주소 : 경기도 광명시 가학로 93, 1층(가학동)</address></li>
              <li>
                <ul>
                  <li>Tel : 1811-8599</li>
                  <li>Fax : 02-899-6284</li>
                </ul>
              </li>
              <li>사업자등록번호 496-86-01086</li>
            </ul>
          </div>
          <div class="f-content-txt">땅스 성공창업문의<span>1811-8599</span></div>
        </div>
        <div class="f-menu">
          <ul class="f-menu-util">
            <li class="f-menu-privacy">
              <a href="#">개인정보처리방침</a>
              <div>
                <p>개인정보 제공 받는자<br>- (주)티에스푸드 (1811-8599)</p>
                <p>개인정보 수집범위<br>- 고객명, 연락처, 이메일</p>
                <p>개인정보 수집 및 이용목적<br>- 홈페이지 문의에 활용 (전화, SMS)</p>
                <p>개인정보 보유 및 이용기간<br>- 개인정보는 수집 및 이용 목적 달성 시까지 보유하며, 이용목적 달성 후 파기하는 것을 원칙으로함</p>
                <i class="xi-close"><span class="hide">닫기</span></i>
              </div>
            </li>
            <li><a href="/sub/sub1-1.php">브랜드 소개</a></li>
            <li><a href="/sub/sub1-5.php">찾아오시는 길</a></li>
          </ul>
          <p class="f-menu-copy">COPYRIGHT@ 2023 땅스부대찌개. ALL RIGHT RESERVED.</p>
        </div>
      </div>
      <a href="#header" class="fixed-menu"><i class="xi-angle-up"></i><span>위로 가기</span></a>
    </footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");