
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" sizes="192x192" href="./img/longestgolf_ico.png">
    <link rel="shortcut icon" href="./img/longestgolf_shortcut_icon.png" type="image/png"/>
    <link rel="apple-touch-icon" href="./img/longestgolf_apple_touch_icon.png" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href = "./css/main.css" media = "screen and (min-width:991px)" rel = "stylesheet" />
    <link href = "./css/main_mobile.css" media = "screen and (min-width:280px) and  (max-width:990px)" rel = "stylesheet" />
    <link rel='stylesheet' type='text/css' media='screen' href='./css/font.css'>

    <title>싱글의 비결, 롱기스트 | 연습장 타석 및 레슨예약, 멤버십</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="롱기스트" /> 
    <meta name="description" content="하루 100원으로 1년간 든든하게 보장받자! 필드 300만원 스크린 30만원 무.제.한 상금 지급! 가입 당일 홀인원도 인정하는 홀인원 멤버십은 오직 롱기스트에서"/>
    <meta name="keywords" content="롱기스트, 롱기스트 홀인원, 롱기스트 홀인원 멤버십, 롱기스트 멤버십, 롱기스트 골프, 롱기스트 어플, 롱기스트 보험, 롱기스트 홀인원보험, 골프롱기스트, 엔픽플홀인원, 조건없는 골프보험, LONGEST, Longest, 홀인원스크린, 홀인원보험가격,홀인원 보험 추천, 스크린홀인원보험, 스크린홀인원, 스크린홀인원상금, 스크린골프보험, 스크린골프홀인원, 스크린홀인원상금"/>
    <meta property="og:title" content="싱글의 비결, 롱기스트 | 연습장 타석 및 레슨예약, 멤버십">
    <meta property="og:type" content="website"> 
    <meta property="og:description" content="하루 100원으로 1년간 든든하게 보장받자! 필드 300만원 스크린 30만원 무.제.한 상금 지급! 가입 당일 홀인원도 인정하는 홀인원 멤버십은 오직 롱기스트에서">
    <meta property="og:image" content="https://hole1.co.kr/img/longestgolf_ico.png">
    <meta property="og:url" content="https://hole1.co.kr/">
    <meta property="og:site_name" content="싱글의 비결, 롱기스트 | 연습장 타석 및 레슨예약, 멤버십">
    <meta property="og:locale" content="ko_KR">

  
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <!-- iamport.payment.js -->
    <script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.2.0.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
    <script>

        //사람 애니메이션과 타이밍 맞춰주기 위한 깃발 애니메이션 딜레이
        $(document).ready(function(){
            LottieInteractivity.create({
            mode: 'chain',
            player: '.flag',
            actions: [
            {
                delay: 2300,
                state: 'autoplay'
            },
            ],
            })

        //화면 넓이 변화에 따른 카트 애니메이션 속도 조절
        var windowWidth = $( window ).width();
        var second = windowWidth/60 + "s";
        var animation = "cartMove " + second + " linear infinite"
        $('.cart').css({"animation": animation});

        $( window ).resize(function() {
            $('.cart').css({"display":"none"})

            if(this.resizeTO) {
                clearTimeout(this.resizeTO);
            }
            this.resizeTO = setTimeout(function() {
                $(this).trigger('resizeEnd');
            }, 0);
        });

        $( window ).on("resizeEnd",function() {
            var windowWidth = $( window ).width();
            $('.cart').css({"display":"block"})
            
            var second = windowWidth/60 + "s";
            var animation = "cartMove " + second + " linear infinite"
            $('.cart').css({"animation": animation});
        });

        //가입하기 섹션으로 이동 버튼
        $('.floating_btn').click(function(){

            var offset = $('.main_content5').offset();

            $('html').stop().animate({scrollTop : offset.top-90}, 1500, 'easeOutCubic');

        });

        //멤버십 안내 애니메이션 구현
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                $('.icon1-1').css({"animation": "flyIn1 1.3s ease-out", "animation-fill-mode":"forwards"});
                $('.icon1-2').css({"animation": "flyIn 1.3s ease-out", "animation-fill-mode":"forwards", "animation-delay": "0.15s"});
                $('.icon2-1').css({"animation": "flyIn2 1.3s ease-out", "animation-fill-mode":"forwards", "animation-delay": "0.3s"});
                $('.icon2-2').css({"animation": "flyIn 1.3s ease-out", "animation-fill-mode":"forwards", "animation-delay": "0.45s"});
                $('.icon3-1').css({"animation": "flyIn3 1.3s ease-out", "animation-fill-mode":"forwards", "animation-delay": "0.6s"});
                $('.icon3-2').css({"animation": "flyIn 1.3s ease-out", "animation-fill-mode":"forwards", "animation-delay": "0.75s"});
            }
            else {
                $('.icon1-1').css({"animation": "", "animation-fill-mode":""});
                $('.icon1-2').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
                $('.icon2-1').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
                $('.icon2-2').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
                $('.icon3-1').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
                $('.icon3-2').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
            }
        })

        //추천 말풍선 애니메이션 구현
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 1200) {
                $('.bubble_container1').css({"animation": "fadeSlideIn 0.8s ease-out", "animation-fill-mode":"forwards", "animation-delay": "0.3s"});
                $('.bubble_container2').css({"animation": "fadeSlideIn2 0.8s ease-out", "animation-fill-mode":"forwards", "animation-delay": "1.1s"});
                $('.bubble_container3').css({"animation": "fadeSlideIn 0.8s ease-out", "animation-fill-mode":"forwards", "animation-delay": "1.9s"});
            }
            else {
                $('.bubble_container1').css({"animation": "", "animation-fill-mode":""});
                $('.bubble_container2').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
                $('.bubble_container3').css({"animation": "", "animation-fill-mode":"", "animation-delay": ""});
            }
        })

        //상단 이동 버튼
        $('.top_btn').click(function() {
            $('html').stop().animate({scrollTop : 0}, 1500, 'easeOutCubic');
        })

        //본인 인증 버튼 css 변환
        $('.certification').click(function() {
            //$('.certification').val('본인 인증 완료')
            //$('.certification').css({"background-color":"#919BA1"})
            //$('.circle1').css({"background-image":"url('./image/check_circle_b.png')"})
        })

        //팝업 열기
        $('.agreement_btn').click(function() {
            $('.popup_background, .popup').addClass('active');
            $('.popup_background').addClass('active2');
            $('body').addClass('noscroll');
        })
        
        //팝업 외 영역 클릭시 팝업 닫기
        $('.popup_background').click(function(e) {
            if(!$(e.target).is('.popup, .popup_sub, .popup_T1, .popup_T2, .popup_T2>div ,.agree_detail, .detail_scrollbox, .scrollbox, .agreement_btn2')){
                setTimeout(function(){
                    $('.popup_background').removeClass('active');
                },980);
                $('.popup').removeClass('active');
                $('.popup_background').removeClass('active2');
                $('body').removeClass('noscroll');
            }
        })

        //팝업 내 약관 동의 버튼 기능
        $('.agreement_btn2').click(function() {
            //첫번째 클릭 시 약관 아래로 스크롤
            if ($('.agreement_btn2').hasClass('active')=== false && $('.agreement_btn2').hasClass('check')=== false) {
                var scrollheight = $('.scrollbox').height();
                $('.detail_scrollbox').stop().animate({scrollTop : scrollheight}, 1500, 'easeOutCubic');
                $('.agreement_btn2').addClass('check');
            }
            //두번째 클릭 시 버튼 색상 변경 및 팝업창 닫기
            else if ($('.agreement_btn2').hasClass('check')=== true) {
                setTimeout(function(){
                    setTimeout(function(){
                        $('.popup_background').removeClass('active');
                    },980);
                    $('.popup').removeClass('active');
                    $('.popup_background').removeClass('active2');
                    },300)
                $('.agreement_btn2').addClass('active');
                $('.popup_T2').addClass('active');
                $('.agreement_btn').addClass('active');
                $('body').removeClass('noscroll');
            $('.circle2').css({"background-image":"url('./image/check_circle_b.png')"})
            $('.circle3').css({"background-image":"url('./image/check_circle_b.png')"})
            }
        })

    });
    </script>


    <script>
        function createData() {
            sendData = "";
            return sendData;
        }

        function createappData() {
            sendData = "";
            return sendData;
        }

        function openPop() {
            var IMP = window.IMP;      // 생략 가능
            IMP.init('<?=$imp_store_key ?>'); // 예: imp00000000
            IMP.certification({ // param
                popup : false 
            }, function (rsp) { // callback
                if (rsp.success) { // 인증 성공 시
                // jQuery로 HTTP 요청
                var sub_imp = rsp.imp_uid;
                jQuery.ajax({
                    type: "GET",
                    url : "./auth.php?imp_uid=" + sub_imp,
                    data: createData(),
                    dataType:"json",
                    success : function(data, status, xhr) {
                        $('#sub_name').val(data.name);
                        $('#sub_phone').val(data.phone);
                        $('#sub_birth').val(data.birth);
                        $('#sub_total_count').val(data.total_count);
                        $('#certification').val('본인인증 완료');     
                        $('.agreement_btn').removeAttr('disabled');
                        $('.circle1').css({"background-image":"url('./image/check_circle_b.png')"})
                        var offset = $('.main_content5').offset();                   
                        $('html').stop().animate({scrollTop : offset.top-90}, 1500, 'easeOutCubic');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.responseText);
                    }
                });
        
                } else {
                alert("인증에 실패하였습니다. 에러 내용: " +  rsp.error_msg);
                }
            });
        }

        //danal_tpay
        function requestPay(req_kind) {
            var subForm = document.subForm;
            var subname = subForm.sub_name.value;
            var subphone = subForm.sub_phone.value;
            var subbirth = subForm.sub_birth.value;
            var subtotalcount = Number(subForm.sub_total_count.value);
            var userphone = subForm.sub_phone.value.slice(-4);
            var sub_merchant_uid = "muid_"+userphone+"_"+<?=$sub_time  ?>;    

            console.log(subtotalcount);
            var sub_pg = "";
            var sub_pay_method = "";
            if(req_kind == 1){
                sub_pg = "danal_tpay"
                sub_pay_method = "card"
            }else if(req_kind == 2){
                sub_pg = "kcp.IP25N"
                sub_pay_method = "naverpay"
            }else{
                sub_pg = "kcp.IP25L";
                sub_pay_method = "kakaopay";
            }

            //if (subphone == "") {
            //    alert("본인인증을 먼저 진행해주세요.");
            //    return false;
            //}

            
            //if(subtotalcount != 0){
            //    alert("이미 멤버십 가입된 사용자 입니다.");
            //    return false;
            //}
            

            
            //if (!subForm.agree.checked) {
            //    alert("약관에 동의하셔야 진행할수 있습니다.");
            //    f.agree.focus();
            //    return false;
            //}
            
            var IMP = window.IMP;      
            IMP.init('<?=$imp_store_key ?>'); 

                IMP.request_pay({
                    pg : sub_pg,
                    pay_method : sub_pay_method,
                    merchant_uid: sub_merchant_uid, 
                    name : '홀인원 멤버십',
                    amount : 1000,
                    buyer_email : '',
                    buyer_name : subname,
                    buyer_tel : subphone,
                    buyer_addr : '',
                    buyer_postcode : '',
                    m_redirect_url: 'https://hole1.co.kr/mo_app_curl.php?phone=' + subphone + '&birth=' + subbirth
                }, function (rsp) { // callback
                    if (rsp.success) {
                        // jQuery로 HTTP 요청
                        var sub_imp = rsp.imp_uid;
                        jQuery.ajax({
                            type: "GET",
                            url : "./app_curl.php?imp_uid=" + sub_imp + "&phone=" + subphone + "&birth=" + subbirth ,
                            data: createappData(),
                            dataType:"json",
                            success : function(data, status, xhr) {
                                //document.location.reload();
                                location.href= "https://hole1.co.kr/join-finished-page.php";
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR.responseText);
                                location.href= "https://hole1.co.kr/join-finished-page.php";
                                //document.location.reload();
                            }
                        });
                    

                    } else {
                        console.log(rsp);
                    }
                });
            }

    </script>





    
</head>
<body>
    <div class="header_container">
        <img src="./image/logo.png" alt="로고" class="logo"/>
    </div>
    <div class="main_banner">
        <div class="banner_content">
            <div class="main_T1">하루 100원으로 챙기세요</div>
            <div class="main_T2">롱기스트<br>홀인원 멤버십</div>
        </div>
        <div class="flag_ani">
            <lottie-player class="flag" src="https://lottie.host/37bd5a13-68f2-40c0-9636-b99dd82db29f/04S7i1DkQ2.json" speed="1.3" loop autoplay></lottie-player>
        </div>
        <div class="golf_ani">
            <lottie-player class="golf" src="https://assets8.lottiefiles.com/packages/lf20_ayozpmpd.json" speed="1" loop autoplay></lottie-player>
        </div>
        <img src="./image/cart.png" class="cart" alt="카트" />
        <img src="./image/m_banner_left.png" class="m_background_left" />
        <img src="./image/m_banner_right.png" class="m_background_right" />
        <img src="./image/banner_left.png" class="background_left" />
        <img src="./image/banner_right.png" class="background_right" />
    </div>
    <div class="main_content">
        <img class="arrow-down" src="./image/arrow_down.png" alt="화살표" />
        <div class="main_T3">KPGA 공식파트너!</div>
        <div class="main_T4">홀인원 상금 무한 지급!</div>
        <div class="main_content2">
            <div class="content2_top_border"></div>
            <div class="main_T5">멤버십 안내</div>
            <div class="main_T6">더 저렴하고 간편한</div>
            <div class="main_T6">롱기스트 홀인원 멤버십</div>
                <div class="icon-boxes">
                    <div class="main_content3">
                        <div class="main_T7">하루 100원</div>
                        <div class="main_T7">저렴한 금액</div>
                        <div class="main_T8">(1년 36,500원)</div>
                        <div class="icon-box">
                            <img class="icon1-2" src="./image/icon1-2.png" alt="아이콘2" />
                            <img class="icon1-1" src="./image/icon1-1.png" alt="아이콘1" />
                        </div>
                    </div>
                    <div class="main_content3">
                        <div class="main_T7">골프 보험/타사 상금</div>
                        <div class="main_T7">지급여부와 상관 없이,</div>
                        <div class="main_T7">횟수 제한 없이 지급</div>
                        <div class="icon-box">
                            <img class="icon2-2" src="./image/icon2-2.png" alt="아이콘4" />
                            <img class="icon2-1" src="./image/icon2-1.png" alt="아이콘3" />
                        </div>
                    </div>
                    <div class="main_content3">
                        <div class="main_T7">필드 300만원</div>
                        <div class="main_T7">스크린 30만원</div>
                        <div class="main_T8">(앱 설치 후 신청)</div>
                        <div class="icon-box">
                            <img class="icon3-2" src="./image/icon3-2.png" alt="아이콘2" />
                            <img class="icon3-1" src="./image/icon3-1.png" alt="아이콘1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="content4_background">
                <img src="./image/m_section_left.png" class="m_section_left" />
                <img src="./image/m_section_right.png" class="m_section_right" />
                <img src="./image/section_left.png" class="section_left" />
                <img src="./image/section_right.png" class="section_right" />
                <div class="main_content4">
                    <div class="main_T9">롱기스트 홀인원 멤버십은 <div class="line_change" style="font-weight: 700;">이럴 때 추천합니다!</div></div>
                    <div class="bubble_container1">
                        <div class="text_bubble1"><div style="text-decoration: underline solid rgba(72, 201, 185, 0.4) 8px; text-underline-offset: -1px; display: inline-block;">스크린 홀인원 때도 상금</div>을 받고 싶어요</div>
                        <img src="./image/emoji1.png" class="emoji1" />
                    </div>
                    <div class="bubble_container2">
                        <img src="./image/emoji2.png" class="emoji2" />
                        <div class="text_bubble2">불필요한 보장성 내용은 빼고<br><div style="text-decoration: underline solid rgba(72, 201, 185, 0.4) 8px; text-underline-offset: -1px; display: inline-block;">저렴하게 홀인원 상금만</div> 받고싶어요</div>
                    </div>
                    <div class="bubble_container3">
                        <div class="text_bubble3"><div style="text-decoration: underline solid rgba(72, 201, 185, 0.4) 8px; text-underline-offset: -1px; display: inline-block">일회성이 아닌 무제한 보상</div>을 받고싶어요</div>
                        <img src="./image/emoji3.png" class="emoji3" />
                    </div>
                </div>
                <img class="divider" src="./image/divider.png" alt="디바이더" />
            </div>
            <img class="main_content_img" src="./image/content.jpg" src="상세페이지" />
            <div class="main_content5">
                <div class="main_T12">가입 안내</div>
                <div class="main_T13">3분이면</div>
                <div class="main_T13">멤버십 가입 완료!</div>
                <div class="completion_bar">
                    <div class="circle1"></div>
                    <div class="bar1"></div>
                    <div class="circle2"></div>
                    <div class="bar2"></div>
                    <div class="circle3"></div>
                </div>

                <form name="subForm" onsubmit="return false;">
                <input type="hidden" name="sub_name" value="" id="sub_name" required class="required frm_input" size="30" maxlength="20" readonly>
                <input type="hidden" name="sub_phone" value="" id="sub_phone" required class="required frm_input" size="30" maxlength="20" readonly>
                <input type="hidden" name="sub_birth" value="" id="sub_birth" required class="required frm_input" size="30" maxlength="20" readonly>
                <input type="hidden" name="sub_total_count" value="" id="sub_total_count" required class="required frm_input" size="30" maxlength="20" readonly>

                <div class="main_phone_auth">
                    <div class="main_T10">1단계 <strong>휴대폰번호 인증</strong></div>
                    <!--<a href="javascript:openPop();"><button id="certification" class="phone_auth_btn certification">본인 인증하기</button></a> -->
                    <a href="javascript:openPop();" class="btn btn_02"><input id="certification" class="certification" type="button" value="본인인증 하기" /></a>
                </div>
                <div class="main_payment">
                    <div class="main_T10">2단계 <strong>간편 결제</strong></div>
                    <div class="main_T11" >약관 동의</div>
                    <button class="agreement_btn">이용 약관 동의 <div style="color: #48C9B9; font-weight: 400; display: inline-block;">(필수)</div></button>
                    <div class="main_T11">결제 수단</div>
                    <input id="payment" class="payment" type="button" value="간편결제" />
                    <div class="button_container1">
                        <img class="card_icon" src="/image/card_icon.png"/>
                        <input type="button" id="card_pay" class="card_btn" onclick="requestPay('1')" value="신용/체크카드">
                    </div>
                    <div class="button_container2">
                        <img class="naver_icon" src="/image/naver_icon.png"/>
                        <input type="button" class="naver_btn" onclick="requestPay('2')" value="네이버페이">
                    </div>
                    <div class="button_container3">
                        <img class="kakao_icon" src="/image/kakao_icon.png"/>
                        <input type="button"class="kakao_btn" onclick="requestPay('3')" value="카카오페이">
                    </div>
                    <!--<button class="card_btn">신용/체크카드</button>
                    <button class="naver_btn">네이버페이</button>
                    <button class="kakao_btn">카카오페이</button>-->
                </div>

                </form>


                <div class="main_T10"><strong>멤버십 가입 완료</strong></div>
            </div>
        </div>
        <button class="top_btn"></button>
        <div class="floating_container">
            <button class="floating_btn">가입하기</button>
        </div>
        <div class="popup_background">
            <div class="popup">
                <img src="./image/popup_bar.png" class="popup_bar" />
                <img src="/image/close_btn.png" class="close_btn" alt="닫기버튼" />
                <div class="popup_sub">
                    <div class="popup_T1">약관 내용을</div>
                    <div class="popup_T1">반드시 확인해주세요.</div>
                    <div class="popup_T2">이용 약관 <div style="color: #48C9B9; font-weight: 600; display: inline-block;">(필수)</div></div>
                    <div class="agree_detail">
                        <div class="detail_scrollbox">
                            <pre class="scrollbox">
    제1조(목적)

    본 약관은 주식회사 롱기스트(이하 “회사”이라한다)와 홀인원 멤버십 서비스 (이하 “서비스”한다)를 이용하려는 모든 참가자 간의 권리와 의무 및 이에 따르는 책임에 관한 사항을 규정함을 목적으로 한다.

    제2조(참가 등록 및 해지)

    1. 참가 등록은 회사가 제공하는 롱기스트 애플리케이션 및 홈페이지를 통하여 정해진 절차에 따라 ‘본 약관에 동의한다’라는 의사표시 (동의 버튼을 클릭하는 것을 통해 동의의 의사표현을 한 것으로 간주한다.)와 함께 서비스를 신청했을 때에 성립한 것으로 본다. 또한, 참가자가 서비스 이용요금에 대한 결제가 완료된 경우, 회사는 참가자에 대해 서비스를 개시한다.

    2. 회사는 참가자가 신청 내용을 허위로 기재하거나 참가자에 의해 제공되는 정보에 관계 법령에 위반되는 내용이 포함되어 있거나 참가자의 귀책사유에 의해 회사가 제공하는 서비스의 이용이 곤란한 사유가 발생하였을 때 이를 승인하지 아니할 수 있으며, 이와 같은 참가자의 허위 정보 사실을 서비스 개시 이후 인지한 경우에도 서비스를 중지할 수 있다.

    제3조 (서비스 비용)

    1. 참가자는 회사가 운영하는 어플리케이션을 통해 유료 사용권을 구매하여 서비스를 이용할 수 있으며, 이는 회사가 계약하여 사용하는 어떠한 종류의 결제 서비스를 이용하는지와 관계없이 서비스 이용이 가능하다.

    2. 홀인원 멤버십 서비스는 일정 기간 특정 조건이 달성되었을 때 상금을 지급하기로 하는 이벤트의 참가권으로서, 결제 시 환불이 불가하다. 다만, 회사가 참가자의 자격을 박탈하는 경우, 환불이 가능하다.

    제4조 (당첨금 규정)

    1. 참가자가 서비스에 참가하는 것이 확정되어 개시된 이후 대한민국 내 정규 홀 골프장에서 티오프 된 골프경기에서 홀인원을 하고, 회사가 요구하는 구비서류를 모두 제출하여 진위가 확인된 경우 회사는 참가자에게 홀인원 달성 상금 일금 삼백만 원 (3,000,000원)을 지급한다. (상금 수령 시 기타소득세 22% 제외 후 지급)

    2. 참가자가 서비스에 참가하는 것이 확정되어 개시된 이후 대한민국 내 스크린 골프장 (골프존 스크린골프만을 의미합니다.) 에서 티오프 된 골프 경기에서 홀인원을 하고, 회사가 요구하는 구비서류를 모두 제출하여 진위가 확인된 경우 회사는 2022년 9월 24일 00시 이전 가입한 참가자에게는 홀인원 달성 상금 일금 오십만 원 (500,000원)을 지급하며, 2022년 9월 24일 00시 이후 가입한 참가자 에게는 홀인원 달성 상금 일금 삼십만원 (300,000원) 을 지급 한다. (상금 수령 시 기타소득세 22% 제외 후 지급)

    3. 홀인원 달성 상금 지급 기한는 회사가 요구하는 모든 서류가 정상적으로 접수 완료된 시점에 상금을 신청한 참가자에게 고지 한다. 다만, 고지 이후라도 접수된 서류에서 문제점이 발생하거나 추가 심사가 필요한 경우 달성 상금 지급 기한이 연장될 수 있다.

    4. 홀인원 달성 상금은 서비스에 참가 개인에게 직접 지급한다.

    5. 허위 홀인원으로 의심되는 경우 달성 상금 지급이 지연될 수 있다.

    6. 허위 홀인원 판단 조사는 회사의 규정에 따르며, 그에 관한 최종 판단은 회사의 판단에 따른다. 만일 허위 홀인원으로 판단되는 경우 달성 상금 지급은 취소된다.

    7. 아래의 규정에 따라 일반적인 홀인원 참가자로 보기 어려운 경우, 회사는 홀인원을 성공한 참가자에 대하여 1회에 한하여 상금을 지급 후, 홀인원 멤버십 참가를 제한 할 수 있다. 이때에 회사는 참가자의 홀인원 멤버십 결제 금액을 전액 환불한다. 또한 멤버십 참가가 제한된 사용자는 재 가입이 불가 하다.
        - 가입일 직전 1년간 아래의 내용에 한가지라도 해당하는 경우
            1. 홀인원 횟수가 3회를 초과 하는 회원
            2. 동일 골프장 혹은 스크린골프 매장에서의 홀인원이 2회를 초과 하는 회원
            3. 한달 새 2회 이상의 홀인원 기록을 보유한 회원

    제5조 ( 청구 시 구비서류 등)

    1. 홀인원에 성공한 참가자는 홀인원 성공시점으로 부터 30일 내에 다음의 2항의 필수 서류를 회사에 제출하여 당첨금을 청구하되, 회사는 참가자가 서비스 참가 의향 제출 시, 제출한 서류와 전산에 등록된 개인정보를 확인한 후 동일인 여부를 확인하여 당첨금을 지급한다.

        A. 필수 서류
            <필드 홀인원>
                - 골프장 발급 홀인원 증명서 : 골프장명, 실명, 캐디명, 티오프 일자 및 시간, 홀인원 달성 홀 명기 필수
                - 예약 확정 문자 (티오프 시간 확인 필수)
                - 홀인원 기념사진
                - 주민등록번호 (외국인등록번호)
                - 상금 수령을 위한 계좌 정보

            <스크린 홀인원>
                - 스크린골프 업체 발급 증명서 : 골프존 홈페이지
                - 스크린골프 어플리케이션의 스코어카드 캡쳐
                - 홀인원 일자가 멤버십 가입일자와 일치하는경우, 추가 서류 제출 필요
                - 홀인원 기념 사진
                - 주민등록번호 (외국인등록번호)
                - 상금 수령을 위한 계좌 정보
            [상기 내역은 스크린골프 업체 제공 홀인원 기록과 일치해야 합니다.]

        B. 선택 서류
            <필드 홀인원>
                - 축하 회식 영수증 등 홀인원을 기념하기 위하여 지출된 영수증
            [영수증 첨부 시, 심사 기간이 단축 됩니다]

    2. 홀인원 멤버십 서비스 가입일과 홀인원 달성일이 일치할 경우 회사는 참가자에게 홀인원 달성 시간 등의 추가 서류를 요구할 수 있다.

    3. 회사는 홀인원 달성 상금 지급을 위하여 필요한 경우, 참가자에게 추가 서류를 요청할 수 있고, 요청을 받은 참가자는 30일 이내에 요청받은 서류를 제출해야 하며 제출기한이 지나 제출된 경우 지급이 거절될 수 있다.

    제6조(불인정 홀인원)

    1. 아래의 조건에 해당하는 홀인원의 경우, 상금지급 대상에서 제외한다.
    공통
            - 멤버십 가입 시점 대비 이른 시각 티오프한 라운딩에서 달성한 홀인원
            - 18홀 기준 파 3홀이 4개를 초과하는 코스에서 달성한 홀인원
            - 이벤트 홀 (규정대비 큰 홀컵)에서 달성한 홀인원
            - 해외에 위치한 골프 코스에서 달성한 홀인원

    필드
            - 15:00 이후 티오프한 라운딩에서의 홀인원
            - 군부대, 경찰 운영 체육 시설 등에서의 홀인원
            - 노캐디 라운딩에서의 홀인원
            - 담당 캐디의 확인과 골프장에서 발급한 인증서가 없는 홀인원

    스크린
            - 골프존 스크린골프가 아닌 타 스크린골프에서의 홀인원
            - 로그인하지 않고 진행한 라운딩의 홀인원
            - 동반자 (로그인 필수) 없이 진행한 라운딩에서의 홀인원
            - 홀인원 증명서가 첨부되지 않은 홀인원
            - 가상코스, 포섬모드, 훈련모드에서의 홀인원
            - 깔때기홀에서의 홀인원
            - 남성 회원이 레디이티에서 성공한 홀인원
            - 멀리건 사용 후 달성한 홀인원
            - 홀인원 멤버십 기간 외에 성공한 홀인원
            - '비기너', '루키', '아마추어' 모드에서의 홀인원
            - 아파트, 회사, 피트니스 등 업장이 아닌곳에서 달성한 홀인원

    중복 달성시
    (홀인원 달성으로 상금을 1회 이상 수령한 참가자가 홀인원을 재 달성 하여 상금을 신청했을 때 아래의 조건에 해당 하는 경우, 상금 지급이 불가함)
    스크린
    - 동일 스크린골프 업장 에서 달성한 홀인원
    - 동일 코스의 동일 홀 에서 달성한 홀인원
    필드
    - 동일 코스의 동일 홀 에서 달성한 홀인원
    - 동일 캐디 와 함께한 라운딩에서 달성한 홀인원

    2. 회사는 비 정상적으로 홀인원이 많이 발생하는 골프장, 스크린골프 업장, 스크린골프 코스 등 을 지정하여, 홀인원 멤버십 이벤트에서 제외 할 수 있다. 이때 회사는 약관에 이를 명시 하고 회원에 최소 한달 전 고지 하도록 한다.
        A. 이벤트 제외 골프장 :
        B. 이벤트 제외 스크린 골프 업장 :
        C. 이벤트 제외 스크린 골프 코스 :

    제7조 (약관의 적용 및 개정)

    1. 본 약관은 참가자가 서비스 이용료 결제 시에 본 약관에 동의하는 것으로 양 당사자 간에 효력이 발생한다.
    2. 회사는 서비스의 원활한 운영을 위하여 본 약관을 개정할 수 있으며 개정내용, 시행시기 등을 시행 최소 7일 전에 참가자에게 고지 하여야 한다. 이 경우 참가자가 그 기간 안에 이의제기가 없거나 서비스를 이용할 시에는 이를 승인한 것으로 본다, 단, 참가자에게 불리한 경우에는 시행 최소 30일 이전에 고지한다.

    제8조 (참가권한 등)
    1. 회사는 참가자의 개인정보(성명, 생년월일, 이동전화번호 등) 수집/이용에 관한 제공 절차를 거친 후에 콘텐츠 참가권한을 부여할 수 있다.
    2. 참가자는 참가 등록 시 반드시 실명을 사용하여 실제 정보를 입력하여야 하며, 실제와 다른 입력으로 인하여 본인확인이 불가한 경우, 달성 상금 수령에 제한이 있을 수 있다.

    제9조 (개인정보보호 의무)
    1. 회사는 “정보통신망 이용촉진 및 정보보호 등에 관한 법률” 등 관계 법령이 정하는 바에 따라 참가자의 개인정보를 보호하기 위해 노력하여야 한다. 개인정보의 보호 및 사용에 대해서는 관련법 및 회사의 개인정보취급방침이 적용된다.

    제10조 (회사의 의무)
    1. 회사는 참가자로부터 제기되는 의견이나 불만이 정당하다고 인정할 때는 즉시 처리하여야 한다. 이 경우 즉시 처리가 곤란한 사유가 발생한 경우에는 이메일 또는 문자, 모바일 공지 등으로 통보하여야 한다.

    제11조 (참가자의 의무)
    1. 참가자는 자신의 결제정보를 포함한 개인정보를 허위로 기재하여서는 아니 된다.
    2. 참가자는 다른 참가자의 비밀번호 기타 개인정보를 부정하게 사용해서는 아니 된다.
    3.참가자는 다음 각 호 사항에 대하여 공공의 안녕질서 또는 미풍양속을 해하는 행위를 하여서는 아니 된다.
    A. 범죄행위를 목적으로 하거나 범죄행위를 교사하는 행위
    B. 선량한 풍속, 기타 사회질서를 해하는 내용
    C. 기타 타인의 명예를 손상하거나 권리를 침해하는 내용
    4. 홀인원 당첨금 허위 청구 시 당첨이 취소되어 참가자는 이미 수령한 당첨금을 반환해야 한다. 또한, 회사는 해당 참가자에게 민사 또는 형사소송 등을 통해 책임을 물을 수 있다.
    5. 참가자는 타인을 대리하여 참가할 수 없다.
    6. 참가자는 본 약관 및 관련 법령 등을 준수하여야 하며, 기타 회사의 명예를 훼손하거나 업무수행에 현저한 지장을 초래하는 행위를 해서는 아니 된다.
    7. 참가자는 회사의 사전 서면 동의 없이 서비스를 이용하여 영리적인 목적의 영업행위를 하여서는 아니 된다. 이를 위반한 영업행위 결과에 대하여 회사는 책임을 지지 않으며, 이와 같은 영업행위의 결과로 회사에 손해가 발생한 경우 참가자는 회사에 대하여 손해배상의 의무를 진다.

    제12조 (거래의 책임 및 면책)

    1. 참가자의 부주의로 인하여 거래 수신한 휴대폰번호, 결제정보 기타 개인정보가 도용, 변경, 삭제되는 등으로써 발생한 참가자의 손해에 대해서는 회사가 책임지지 아니한다.
    2. 회사는 천재지변, 정전, 화재, 전산 및 통신장에 등 불가항력, 참가자의 고의 또는 과실 등 회사의 귀책사유 없이 발생한 손해에 대해서는 책임지지 아니한다.

    제13조 (분쟁해결 등)

    본 약관과 관련하여 분쟁이 발생하는 경우 양 당사자의 상호 협의에 따른 해결을 우선으로 하며, 미해결 시 소송에 의하여 해결하되, 그 관할 법원은 민사소송법에 따라 정한다.


    부 칙
    2022/4/17 약관 시행
    2022/7/13 개정
    2022/9/20 개정 공고 2022/10/19 시행
                            </pre>
                        </div>
                    </div>
                    <button class="agreement_btn2">네, 약관에 모두 동의합니다.</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>