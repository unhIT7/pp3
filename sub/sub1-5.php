<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head1.php');
?>

      <section class="page-header sub-sec">
        <h2 class="sub-tit">오시는 길</h2>
      </section>
      <section class="sub-loca">
        <div class="sub-inner">
          <div class="sub-map">
            <!-- * 카카오맵 - 지도퍼가기 -->
            <!-- 1. 지도 노드 -->
            <div id="daumRoughmapContainer1694478994139" class="root_daum_roughmap root_daum_roughmap_landing"></div>
            <!--
              2. 설치 스크립트
              * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
            <!-- 3. 실행 스크립트 -->
            <script>
              new daum.roughmap.Lander({
                "timestamp" : "1694478994139",
                "key" : "2g68e",
                "mapWidth" : "630",
                "mapHeight" : "360"
              }).render();
            </script>
          </div>
          <ul class="sub-addr">
            <li>
              <i class="xi-maker"></i>
              <h4>LOCATION</h4>
              <p>경기도 광명시 가학로 93, 1층 (가학동)</p>
            </li>
            <li>
              <i class="xi-call"></i>
              <h4>CALL</h4>
              <p>1811-8599</p>
            </li>
            <li>
              <i class="xi-fax"></i>
              <h4>FAX</h4>
              <p>02-899-6284</p>
            </li>
            <li>
              <i class="xi-mail"></i>
              <h4>MAIL</h4>
              <a href="mailto:tsfood@tsfoods.co.kr">tsfood@tsfoods.co.kr</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sub-transport sub-inner">
        <article>
          <h4><i class="xi-car"></i>자동차</h4>
          <em>광명역에서 가학삼거리 방면 2km 직진</em>
        </article>
        <article>
          <h4><i class="xi-bus"></i>버스</h4>
          <div class="sub-transport-route">
            <div>
              <em>도고내마을 방면 , 뒷골사거리 방면</em>
              <p><span class="gray">마을</span>11 , 17 , 88</p>
            </div>
            <div>
              <em>원가학방면 , 양지마을 방면</em>
              <p><span class="gray">마을</span> 11-3 , 17 , 88 , 77</p>
              <p><span class="green">지선</span>5627 , 5633</p>
              <p><span class="blue">간선</span>505</p>
            </div>
          </div>
        </article>
      </section>

<?php
include_once(G5_PATH.'/tail1.php');