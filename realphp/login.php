<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <style type="text/css">
    .hEvent:hover{
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
                  <!--검색학생!!!-->
                  <div onClick="location.href='./plzLogin.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--검색교수!!!!-->
                  <div onClick="location.href='./plzLogin.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--검색담당자!!!!!-->
                  <div onClick="location.href='./plzLogin.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                  </div>
                </a>
              </div></div>
              
            </div>
            <div style="width: 160px; align-self: stretch; padding-left: 16px; padding-right: 16px; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
              <div class="dropdown" style="color: #555555; font-size: 19px; font-family: NanumGothic; font-weight: 700; line-height: 28.50px; word-wrap: break-word">명단 추가<div class="dropdown-content">
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px;  justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입학생!!!-->
                  <div onClick="location.href='./plzLogin.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>학생 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입교수!!!!-->
                  <div onClick="location.href='./plzLogin.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>교수 명단</hEvent></div>
                  </div>
                </a>
                <a href="#"><div style="width: 260px; height: 56px; padding-left: 24px; padding-right: 24px; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                  <!--삽입담당자!!!!-->
                  <div onClick="location.href='./plzLogin.php'" style="flex: 1 1 0; color: #1D1D1D; font-size: 17px; font-family: NanumGothic; font-weight: 700; line-height: 25.50px; word-wrap: break-word"><hEvent>담당자 명단</hEvent></div>
                  </div>
                </a>
              </div></div>
              
            </div>
          </div>
        </div>
        <div style="align-self: stretch; height: 32px; flex-direction: column; justify-content: flex-start; align-items: center; display: flex"></div>
      </div>
    </div>
    <!--여기까지 헤더-->


    <!--로그인화면-->
    <div style="height: 60vh; left: 0px; top: 204px; position: absolute; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 40px; display: flex">
      <div style="width: 312px; height: 208px; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
        <form action="loginSQL.php" method="post" style="width: 100%; display: flex; flex-direction: column; gap: 16px;">
          <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <label for="id" style="color: #333333; font-size: 16px; font-family: NanumGothic; font-weight: 700; line-height: 24px;">아이디</label>
            <input type="text" id="userid" name="userid" style="width: 100%; height: 40px; padding: 8px; border: 1px solid #D1D1D1; border-radius: 4px;" required>
          </div>
          <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <label for="password" style="color: #333333; font-size: 16px; font-family: NanumGothic; font-weight: 700; line-height: 24px;">비밀번호</label>
            <input type="password" id="password" name="password" style="width: 100%; height: 40px; padding: 8px; border: 1px solid #D1D1D1; border-radius: 4px;" required>
          </div>
          <button type="submit" style="width: 100%; height: 48px; background: #003675; color: white; font-size: 16px; font-family: NanumGothic; font-weight: 700; border: none; border-radius: 4px; cursor: pointer;">로그인</button>
        </form>
      </div>
    </div>
    <!--여기까지 로그인화면-->



  </div>
</body>
</html>
