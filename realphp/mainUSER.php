<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<head>
  <style type="text/css">
    hEvent:hover{
      color: #003675;
    }

    .dropdown-content{
      display : none;
      position : absolute;
      z-index : 1; /*다른 요소들보다 앞에 배치*/
      font-weight: 400;
      background-color: #f9f9f9;
      min-width : 200px;
    }

    .dropdown-content a{
      display : block;
      text-decoration : none;
      color : rgb(37, 37, 37);
      font-size: 12px;
      padding : 12px 20px;
    }

    .dropdown-content a:hover{
      background-color : #ececec
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>
<body>
<!--헤더-->
<div style="width: 1920px; height: 204px; position: relative; background: white">
  <div style="height: 204px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
    <div style="align-self: stretch; height: 204px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
      <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div>
      <div style="height: 108px; padding-bottom: 16px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
        <div style="align-self: stretch; padding-top: 10px; padding-bottom: 10px; justify-content: flex-end; align-items: center; gap: 12px; display: inline-flex"></div>
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
          <div style="justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
            <div style="justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex"></div>
          </div>
          <div style="flex: 1 1 0; height: 40px; justify-content: flex-end; align-items: flex-start; gap: 8px; display: flex">
            <div style="padding-left: 80vw; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                  <div style="width: 8px; height: 16px; left: 8px; top: 0px; position: absolute; border-top-left-radius: 1px; border-top-right-radius: 1px; border-top: 1.40px white; solid; border-right: 1.40px white solid; border-bottom: 1.40px white solid"></div>
                  <div style="width: 12px; height: 0px; left: 0px; top: 8px; position: absolute; border: 1.40px white solid"></div>
                  <div style="width: 3.50px; height: 7px; left: 8.50px; top: 4.50px; position: absolute; border: 1.20px white solid"></div>
                </div>
              </div>
            </div>
            <!--사용자 여기있어요!!!-->
            <!--사용자 여기있어요!!!-->
            <!--사용자 여기있어요!!!-->
            <div onClick="javascript:move( './user.php' );" style="padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 18px; height: 14px; left: 1px; top: 3px; position: absolute">
                  <div style="width: 6px; height: 6px; left: 4px; top: 0px; position: absolute; border-radius: 9999px; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 14px; height: 6px; left: 0px; top: 8px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
              
              <div style="color: #1D1D1D; font-size: 22px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">user</div>
            </div>
            <!--로그아웃 여기있어요!!!!--->
            <!--로그아웃 여기있어요!!!!--->
            <!--로그아웃 여기있어요!!!!--->
            <!-- 바로 밑에 줄에 원래 onClick이 있었는데 그냥 보기 편하게 log_out쪽으로 붙였습니다.
            또한 onClick="location.href='./logoutSQL.php'"로 log_out을 클릭했을 때 페이지가 이동하도록 설정했습니다. -->
            <div style="padding-left: 12px; padding-right: 12px; padding-top: 10px; padding-bottom: 10px; border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 18px; height: 14px; left: 1px; top: 3px; position: absolute">
                  <div style="width: 6px; height: 6px; left: 4px; top: 0px; position: absolute; border-radius: 9999px; border: 1.40px #2D2D2D solid"></div>
                  <div style="width: 14px; height: 6px; left: 0px; top: 8px; position: absolute; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
              <!-- 여기에서 이동 -->
              <div onClick="location.href='./logoutSQL.php'" style="color: #1D1D1D; font-size: 22px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">log-out</div>
            </div>
            <!--여기까지 로그아웃 버튼-->
          </div>
        </div>
      </div>

      <!--퀵메뉴-->
      <div style="align-self: stretch; height: 204px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
        <!-- <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div> -->
        <div style="height: 30px; padding-bottom: 16px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
          <div style="align-self: stretch; padding-top: 10px; padding-bottom: 10px; justify-content: flex-end; align-items: center; gap: 12px; display: inline-flex"></div>
          <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
            <div style="justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
              <div style="justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex"></div>
            </div>
          </div>
        </div>
        <div style="align-self: stretch; height: 64px; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
          <div style="width: 98vw; height: 64px; padding-top: 1px; padding-bottom: 1px; padding-left: 2vw; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
            <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
              <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 검색<div class="dropdown-content">
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--검색!!!-->
                  <div onClick="javascript:move( './search.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입!!!!-->
                  <div onClick="javascript:move( './insert.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삭제!!!!!-->
                  <div onClick="javascript:move( './delete.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                  </div>
                </a>
              </div></div>
              
            </div>
            <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
              <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 추가<div class="dropdown-content">
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--검색!!!-->
                  <div onClick="javascript:move( './search.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입!!!!-->
                  <div onClick="javascript:move( './insert.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삭제!!!!!-->
                  <div onClick="javascript:move( './delete.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                  </div>
                </a>
              </div></div>
              
            </div>
            <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
              <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 삭제<div class="dropdown-content">
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--검색!!!-->
                  <div onClick="javascript:move( './search.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입!!!!-->
                  <div onClick="javascript:move( './insert.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삭제!!!!!-->
                  <div onClick="javascript:move( './delete.php' );" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                  </div>
                </a>
              </div></div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--여기 메인버튼 있어요!!!!-->
  <!--여기 메인버튼 있어요!!!!-->
  <!--여기 메인버튼 있어요!!!!-->
</div>
<!--여기까지 헤더-->


<!--로고-->
<div onClick="javascript:move( './main.php' );" style="width: 172px; height: 75px; left: 1vw; top: 39px; position: absolute">
      <div style="left: 45px; top: 0px; position: absolute; color: #65A2FC; font-size: 50px; font-family: Notable; font-weight: 400; line-height: 75px; word-wrap: break-word; font-family : fantasy;">⩸SEM</div>
</div>
<!--여기까지 로고-->


<!--날씨-->
<div style="width: 1920px; height: 8vh; padding-top: 24px; padding-bottom: 24px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
  <div style="width: 846px; height: 80px; padding: 16px; background: white; border-radius: 12px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
    <div style="width: 81px; padding-left: 12px; padding-right: 12px; padding-top: 8px; padding-bottom: 8px; background: orange; border-radius: 100px; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
      
      <div style="padding-bottom: 7px; padding-left: 6px; padding-right: 3px; color: white; font-size: 35px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">⩍</div>
      <div style="color: white; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">주의</div>
    </div>
    <div style="flex: 1 1 0; align-self: stretch; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 50px; word-wrap: break-word">행사당일의 날씨와 미세먼지 농도를 확인해보세요!</div>
    <div onclick="location.href='https://weather.naver.com/today/09380551'" style="width: 120px; padding: 2px; border-radius: 6px; justify-content: flex-start; align-items: center; gap: 4px; display: flex; cursor: pointer;">
      <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 400; line-height: 25.50px; word-wrap: break-word">자세히보기⇾</div>
      
    </div>
  </div>
</div>
<!--여기까지 날씨-->




<!--배너-->
<div style="width: 100vw; height: 560px; position: relative; display: flex; justify-content: center; align-items: center; background: #D8E4F2;">
  <div style="width: 1099.50px; height: 347px; display: flex; justify-content: center; align-items: center; text-align:center;">
    <div style="width: 700px; height: 246px; flex-direction: column; justify-content: center; align-items: center; gap: 40px; display: flex;">
      <div style="width: 700px; color: #1D1D1D; font-size: 38px; font-family: NanumGothic; font-weight: 700; line-height: 60px; letter-spacing: 1px; word-wrap: break-word">
        다채로운 음악이 가득한 대학 축제!<br/>함께 즐기며 특별한 순간을 만들어요.
      </div>
      <div style="width: 700px; text-align: center; color: #1D1D1D; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">
        당신의 대학 생활을 더욱 특별하게 만들어 드릴 대학 축제에 여러분을 초대합니다!
      </div>
      <div style="height: 64px; padding-left: 24px; padding-right: 24px; background: #246BEB; border-radius: 8px; justify-content: center; align-items: center; gap: 4px; display: flex;">
        <a href="https://music.smu.ac.kr/clothing2/community/sm_notice.do?mode=view&articleNo=746835&article.offset=0&articleLimit=10" style="color: white; font-size: 19px; font-family: NanumGothic; font-weight: 400; line-height: 28.50px; word-wrap: break-word; cursor: pointer; text-decoration: none;">
          자세히 보러가기
        </a>
      </div>
    </div>
  </div>
</div>

<!--여기까지 배너-->





<!--캘린더-->
<div style="width: 100vw; height: 1526px; padding-bottom: 80px; flex-direction: column; justify-content: center; align-items: center; gap: 40px; display: flex">
  <div style="width: 1782px; height: 1200px; padding-top: 100px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: flex">
    <div style="align-self: stretch; justify-content: center; align-items: center; gap: 16px; display: flex">
      <div style="flex: 1 1 0; padding-bottom:50px; text-align: center; color: #1D1D1D; font-size: 50px; font-family: NanumGothic; font-weight: 700; line-height: 75px; word-wrap: break-word">MAY</div>
    </div>
    <div style="width: 1306px; justify-content: center; align-items: center; gap: 10px; display: flex">
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 46px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">SUN</div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 54px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">MON</div>
          </div>
        </div>
      </div>
      
      <div style="width: 172px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 44px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">TUE</div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 51px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">WED</div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 46px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">THU</div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 37px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">FRI</div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 39px; padding-right: 24px; padding-left: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 44px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">SAT</div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">29</div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">30</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 172px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">31</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">1</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">2</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">3</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">4</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">5</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">6</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">7</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">8</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">9</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">10</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">11</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">12</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">13</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">14</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">15</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
        <div style="background-color: #65A2FC; padding-top:5px; padding-bottom:5px; color: white; font-size: 20px; font-family: NanumGothic; font-weight: 700; width: 130px; text-align:center;">스승의 날</div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">16</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">17</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">18</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">19</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">20</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
        <div style="background-color: #65A2FC; padding-top:5px; padding-bottom:5px; color: white; font-size: 20px; font-family: NanumGothic; font-weight: 700; width: 130px; text-align:center;">성년의 날</div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">21</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">22</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">23</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
        <div style="background-color: #65A2FC; padding-top:5px; padding-bottom:5px; color: white; font-size: 20px; font-family: NanumGothic; font-weight: 700; width: 130px; text-align:center;">축제</div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">24</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #717171; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">25</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="width: 1306px; flex: 1 1 0; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #D13535; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">26</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">27</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">28</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">29</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 35px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #1D56BC; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">30</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 174px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">1</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
      <div style="width: 175px; height: 180px; padding: 24px; border-radius: 12px; border: 1px #C6C6C6 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
          <div style="width: 26px; padding-left: 8px; padding-right: 8px; background: #EFF5FF; border-radius: 4px; justify-content: center; align-items: center; gap: 10px; display: flex">
            <div style="text-align: center; color: #C6C6C6; font-size: 15px; font-family: NanumGothic; font-weight: 400; line-height: 22.50px; word-wrap: break-word">2</div>
          </div>
          <div style="flex: 1 1 0; height: 24px; justify-content: flex-end; align-items: center; gap: 16px; display: flex">
            <div style="width: 34px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--여기까지 캘린더-->


<!--푸터-->
<div style="height: 304px; padding-left: 5vw; background: #F0F0F0; border: 1px #D8D8D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
  <div style="height: 304px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: flex">
      <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
        <div style="width: 954px; height: 80px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
          <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">(03016) 서울특별시 종로구 홍지문2길 20</div>
            </div>
          </div>
          <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">대표전화 1234</div>
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">(평일 09시~18시)</div>
            </div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">팩스 02-123-5678</div>
            </div>
          </div>
        </div>
        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex;">
          <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex;">
            <div style="height: 24px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">이용안내</div>
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                  <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                  <div style="width: 10px; height: 5.50px; left: 5.50px; top: 13px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
            </div>
            <div style="height: 24px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
              <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">찾아오시는 길</div>
              <div style="width: 20px; height: 20px; position: relative">
                <div style="width: 20px; height: 20px; left: 0px; top: 0px; position: absolute; opacity: 0.10"></div>
                <div style="width: 16px; height: 16px; left: 2px; top: 2px; position: absolute">
                  <div style="width: 16px; height: 16px; left: 0px; top: 0px; position: absolute"></div>
                  <div style="width: 10px; height: 5.50px; left: 5.50px; top: 13px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1.40px #2D2D2D solid"></div>
                </div>
              </div>
            </div>
          </div>
          <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
            <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
              <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                <div style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute; background: black"></div>
              </div>
            </div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
              <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                <img style="width: 20px; height: 15px; left: 10px; top: 13px; position: absolute" src="https://via.placeholder.com/20x15" />
              </div>
            </div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
              <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                <div style="width: 19px; height: 20px; left: 11px; top: 10px; position: absolute; background: black"></div>
              </div>
            </div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
              <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                <div style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute; background: white; border-radius: 9999px"></div>
                <div style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute; background: black"></div>
              </div>
            </div>
            <div style="justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
              <div style="width: 40px; height: 40px; position: relative; background: white; border-radius: 120px; overflow: hidden; border: 1px #E4E4E4 solid">
                <div style="width: 20px; height: 18px; left: 10px; top: 12px; position: absolute; background: black"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="width: 70vw; padding-top: 16px; border-top: 1px #D8D8D8 solid; justify-content: flex-start; align-items: center; gap: 40px; display: inline-flex">
        <div style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
          <div style="width: 68px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
            <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">이용안내</div>
          </div>
          <div style="width: 142px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
            <div style="color: #003675; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">개인정보처리방침</div>
          </div>
          <div style="width: 94px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
            <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">저작권정책</div>
          </div>
          <div style="width: 235px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
            <div style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word">웹 접근성 품질인증 마크 획득</div>
          </div>
        </div>
        <div style="justify-content: flex-start; align-items: center; display: flex">
          <div style="color: #555555; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">© The School Event Management. All rights reserved.</div>
        </div>
      </div>
  </div>
</div>
  <!--푸터 여기까지-->
</body>