<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/index_head.php');
?>

<ul id="comp_bn">
    <li>
        <button type="button" class="accordion-toggle bubn_btn">국내 사업<span>사업보기</span></button>
        <div class="accordion-content default bubn_img">
            <img src="<?php echo G5_THEME_IMG_URL ?>/bu01.jpg"  style="width:376px;height:321px"  alt="사업보기">
            <div class="bubn_img_ov">
                <h3>국내 사업</h3><br>
                <p>새만금 자동화 공장<br>
                  성남 노블레스 빌리지<br>
                  창원 자동화 단지<br>
                  안양 트윈타워 증축건설</p>
                <a href="#">상세보기</a>
            </div>
        </div>
    </li>
    <li>
        <button type="button" class="accordion-toggle bubn_btn">중국 사업<span>사업보기</span></button>
        <div class="accordion-content  bubn_img">
            <img src="<?php echo G5_THEME_IMG_URL ?>/bu02.jpg" style="width:376px;height:321px" alt="사업보기">
            <div class="bubn_img_ov">
                <h3>중국 사업</h3><br>
                <p>시진핑 1등로봇경호관<br>
                  중국-네팔 무인경계시스템<br>
                  텐진 소금 무인화공장<br>
                  당 고위급 호위용 특급로봇경호부대</p>
                <a href="#">상세보기</a>
            </div>
        </div>
    </li>
    <li>
        <button type="button" class="accordion-toggle bubn_btn">미주 사업<span>사업보기</span></button>
        <div class="accordion-content  bubn_img">
            <img src="<?php echo G5_THEME_IMG_URL ?>/bu03.jpg"  style="width:376px;height:321px" alt="사업보기">
            <div class="bubn_img_ov">
                <h3>미주 사업</h3><br>
                <p>애틀랜타 로봇 테니스단<br>
                  시애틀 아마존고 로봇직원<br>
                  뉴욕 검찰청 사무용로봇<br>
                  백악관 무인경비시스템</p>
                <a href="#">상세보기</a>
            </div>
        </div>
    </li>
</ul>
<script type="text/javascript">
  $(document).ready(function($) {
    $("#comp_bn").find(".accordion-toggle").click(function(){
        $(this).next().slideToggle('fast');
        $(".accordion-content").not($(this).next()).slideUp('fast');
    });
  });
</script>
<ul id="comp_if">
    <li  class="com_bg1">
        <h2>회사소개</h2>
        <p>두산의 믿음과 철학, 두산 Way.<br>
            오늘을 이끄는 원동력</p>
        <a href="#">회사소개 바로가기</a>
    </li>
    <li  class="com_bg2">
        <h2>제품소개</h2>
        <p>M Series<br>
          차별화된 기술력 <br>
          남다른 품질보증</p>
        <a href="#">제품소개 바로가기</a>
    </li>
    <li class="com_bg3">
        <h2>인재채용</h2>
        <p>머리 한 대 때려도<br>
        다시 그리운<br>
        가족같은 Doosan인</p>
        <a href="#">인재채용 바로가기</a>
    </li>
</ul>
<div id="comp_lt">
    <div class="li_notice">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'notice', 4, 18);
        ?>
    </div>
    <div class="li_gall">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수, 캐시타임, option);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        $options = array(
            'thumb_width'    => 143, // 썸네일 width
            'thumb_height'   => 89,  // 썸네일 height
            'content_length' => 40   // 간단내용 길이
        );
        echo latest('theme/gallery', 'gallery', 3, 25, 1, $options);
        ?>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
