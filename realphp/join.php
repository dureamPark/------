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
  <!--1-->
  <div style="width: 100vw; height: 1405px; position: relative; background: white">
    <!--1-->
    <div style="height: 96px; left: 0px; top: 3367px; position: absolute; opacity: 0.30; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
        <div style="align-self: stretch; height: 32px; background: #EDF1F5; justify-content: center; align-items: center; gap: 8px; display: inline-flex">
          <div style="flex: 1 1 0; height: 16px; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
            
            
          </div>
        </div>
      </div>
      <div style="align-self: stretch; height: 64px; background: white; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div>
    </div>
    <!--여기까지1-->



    <!--헤더-->
    <div style="height: 204px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
      <div style="align-self: stretch; height: 204px; background: white; flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
        <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div>
        <div style="height: 108px; padding-bottom: 16px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
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
    <!--헤더-->

    <!--메인로고-->
    <!--여기 메인버튼 있어요!!!!-->
    <!--여기 메인버튼 있어요!!!!-->
    <!--여기 메인버튼 있어요!!!!-->
    <div onClick="javascript:move( './main.php' );" style="width: 172px; height: 75px; left: 1vw; top: 39px; position: absolute">
      <div style="left: 45px; top: 0px; position: absolute; color: #65A2FC; font-size: 50px; font-family: Notable; font-weight: 400; line-height: 75px; word-wrap: break-word; font-family : fantasy;">⩸SEM</div>
    </div>
    <!--여기까지 메인로고-->

    <!--로그인-->
    <div style="padding-bottom: 80px; top: 292px; position: relative; flex-direction: column; justify-content: center; align-items: center; gap: 80px; display: flex;">
      <div style="flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: flex; text-align:center;">
        <div style="color: #1D1D1D; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word; text-align: center;">SEM 회원가입</div>
        <div style="color: #1D1D1D; font-size: 40px; font-family: NanumGothic; font-weight: 700; line-height: 60px; letter-spacing: 1px; word-wrap: break-word">아이디/비밀번호 설정</div>
      </div>
      <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: flex">
        <div style="width: 700px; padding: 40px; border-top: 1px #D8D8D8 solid; border-bottom: 1px #D8D8D8 solid; justify-content: center; align-items: flex-start; gap: 40px; display: inline-flex">
          <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
            <div style="align-self: stretch; height: 79px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">

              <div style="color: black; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">아이디</div>
              <div style="align-self: stretch; height: 56px; padding-left: 16px; padding-right: 16px; background: white; border-radius: 8px; border: 1px #717171 solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                <div style="flex: 1 1 0; color: #8E8E8E; font-size: 19px; font-family: NanumGothic; font-weight: 400; line-height: 28.50px; word-wrap: break-word"><input type="text" placeholder="영문 소문자" style="font-size: 19px; width: 650px; height:42.5px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
              </div>
            </div>

            <div style="align-self: stretch; height: 79px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
              <div style="color: black; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">비밀번호</div>
              <div style="align-self: stretch; height: 56px; padding-left: 16px; padding-right: 16px; background: white; border-radius: 8px; border: 1px #717171 solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                <div style="flex: 1 1 0; color: #8E8E8E; font-size: 19px; font-family: NanumGothic; font-weight: 400; line-height: 28.50px; word-wrap: break-word"><input type="text" placeholder="8-12자의 영문자, 숫자, 특수문자 조합" style="font-size: 19px; width: 650px; height:42.5px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
              </div>
            </div>

            <div style="align-self: stretch; height: 79px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
              <div style="color: black; font-size: 15px; font-family: NanumGothic; font-weight: 700; line-height: 22.50px; word-wrap: break-word">비밀번호 확인</div>
              <div style="align-self: stretch; height: 56px; padding-left: 16px; padding-right: 16px; background: white; border-radius: 8px; border: 1px #717171 solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                <div style="flex: 1 1 0; color: #8E8E8E; font-size: 19px; font-family: NanumGothic; font-weight: 400; line-height: 28.50px; word-wrap: break-word"><input type="text" placeholder="비밀번호 확인" style="font-size: 19px; width: 650px; height:42.5px; border: 1px solid white; outline: none; background-color: transparent; value="";"></div>
              </div>
            </div>



            <div onClick="javascript:move( './!!!!!!로그인 판단해주세요!!.php');" style="align-self: stretch; height: 56px; padding-left: 20px; padding-right: 20px; background: #246BEB; border-radius: 8px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
              <!--여기 로그인 버튼 있어요!!!!!!!!!!-->
              <!--여기 로그인 버튼 있어요!!!!!!!!!!-->
              <!--여기 로그인 버튼 있어요!!!!!!!!!!-->
              <!--여기 로그인 버튼 있어요!!!!!!!!!!-->
              <!--여기 로그인 버튼 있어요!!!!!!!!!!-->
              <div onClick="javascript:move( './!!!!!!!!로그인 판단해주세요!!.php');" style="color: white; font-size: 19px; font-family: NanumGothic; font-weight: 400; line-height: 28.50px; word-wrap: break-word">로그인</div>
            </div>
            <div style="align-self: stretch; justify-content: center; align-items: center; gap: 8px; display: inline-flex">
              <div style="width: 68px; padding: 2px; border-radius: 6px; justify-content: center; align-items: center; gap: 4px; display: flex">
                <div onClick="javascript:move( './!!!!!!!!회원가입 페이지!!.php');" style="color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 400; line-height: 25.50px; word-wrap: break-word">회원가입</div>
              </div>
            </div>
          </div>
          
          
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
</body>