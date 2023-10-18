<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<link rel="stylesheet" href="/css/sub-common.css">
<link rel="stylesheet" href="/css/sub1.css">


<!-- 상단 시작 { -->
<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

<header id="header" class="header">
    <div class="inner">
      <h1 class="logo"><a href="/index.php"><img src="/img/f_logo.png" alt="땅스부대찌개"></a></h1>
      <nav class="gnb">
        <ul>
          <li class="depth1">
            <a href="/sub/sub1-1.php">브랜드</a>
            <ul class="depth2">
              <li><a href="/sub/sub1-1.php">브랜드 스토리</a></li>
              <li><a href="/sub/sub1-2.php">연혁</a></li>
              <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=map">매장</a></li>
              <li><a href="/sub/sub1-4.php">캐릭터</a></li>
              <li><a href="/sub/sub1-5.php">오시는 길</a></li>
            </ul>
          </li>
          <li class="depth1">
              <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu1">메뉴</a>
              <ul class="depth2">
                <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu1">부대찌개</a></li>
                <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu2">떡볶이</a></li>
              </ul>
          </li>
          <li class="depth1">
            <a href="/sub/sub3-1.php">멤버십</a>
            <ul class="depth2">
              <li><a href="/sub/sub3-1.php">땅스오더 APP 소개</a></li>
              <li><a href="/sub/sub3-2.php">E-금액권 사용법</a></li>
            </ul>
          </li>
          <li class="depth1">
            <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=notice">땅스소식</a>
            <ul class="depth2">
              <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=notice">소식</a></li>
              <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=event">이벤트</a></li>
              <li><a href="/sub/sub4-3.php">특별이벤트</a></li>
              <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=gallery">SNS</a></li>
            </ul>
          </li>
          <li class="depth1">
            <a href="/sub/sub5-1.php">창업</a>
            <ul class="depth2">
              <li><a href="/sub/sub5-1.php">창업 조건 · 절차</a></li>
              <li><a href="/sub/sub5-2.php">개설 비용 안내</a></li>
              <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=qa">개설 Q&A</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="tnb">
        <ul class="hd_login">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>
        </ul>
      </div>
      <div class="mobile">
        <button type="button" class="mobile-btn">
          <span></span><span></span><span></span><span></span>
        </button>
        <div class="mobile-wrap">
          <div class="mobile-tnb">
            <ul class="hd_login">        
              <?php if ($is_member) {  ?>
              <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
              <?php if ($is_admin) {  ?>
              <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
              <?php }  ?>
              <?php } else {  ?>
              <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
              <?php }  ?>
            </ul>
          </div>
          <div class="mobile-gnb">
            <ul>
              <li class="mobile-depth1">
                <a href="/sub/sub1-1.php">브랜드<i class="xi-angle-down-min"></i></a>
                <ul class="mobile-depth2">
                  <li><a href="/sub/sub1-1.php">브랜드 스토리</a></li>
                  <li><a href="/sub/sub1-2.php">연혁</a></li>
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=map">매장</a></li>
                  <li><a href="/sub/sub1-4.php">캐릭터</a></li>
                  <li><a href="/sub/sub1-5.php">오시는 길</a></li>
                </ul>
              </li>
              <li class="mobile-depth1">
                <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu1">메뉴<i class="xi-angle-down-min"></i></a>
                <ul class="mobile-depth2">
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu1">부대찌개</a></li>
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=menu2">떡볶이</a></li>
                </ul>
              </li>
              <li class="mobile-depth1">
                <a href="/sub/sub3-1.php">멤버십<i class="xi-angle-down-min"></i></a>
                <ul class="mobile-depth2">
                  <li><a href="/sub/sub3-1.php">땅스오더 APP 소개</a></li>
                  <li><a href="/sub/sub3-2.php">E-금액권 사용법</a></li>
                </ul>
              </li>
              <li class="mobile-depth1">
                <a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=notice">땅스소식<i class="xi-angle-down-min"></i></a>
                <ul class="mobile-depth2">
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=notice">소식</a></li>
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=event">이벤트</a></li>
                  <li><a href="/sub/sub4-3.php">특별이벤트</a></li>
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=gallery">SNS</a></li>
                </ul>
              </li>
              <li class="mobile-depth1">
                <a href="/sub/sub5-1.php">창업<i class="xi-angle-down-min"></i></a>
                <ul class="mobile-depth2">
                  <li><a href="/sub/sub5-1.php">창업 조건 · 절차</a></li>
                  <li><a href="/sub/sub5-2.php">개설 비용 안내</a></li>
                  <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=qa">개설 Q&A</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- } 상단 끝 -->

<hr>

<!-- 콘텐츠 시작 { -->
<div class="main">
      <h2 class="hide">메인콘텐츠</h2>
      <section class="visual">
        <p>브랜드</p>
      </section>
      <div class="lnb">
        <div class="sub-inner">
          <a href="/sub/index.php" class="lnb-home"><i class="xi-home"></i></a>
          <a href="/sub/sub1-1.php" class="lnb-depth1">브랜드</a>
          <div class="lnb-depth2">
            <a href="/sub/sub1-1.php">브랜드 스토리<i class="xi-angle-down-min"></i></a>
            <ul class="lnb-depth2-list">
              <li><a href="/sub/sub1-1.php">브랜드 스토리</a></li>
              <li><a href="/sub/sub1-2.php">연혁</a></li>
              <li><a href="http://unh17b.dothome.co.kr/bbs/board.php?bo_table=map">매장</a></li>
              <li><a href="/sub/sub1-4.php">캐릭터</a></li>
              <li><a href="/sub/sub1-5.php">오시는 길</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="main-wrap">