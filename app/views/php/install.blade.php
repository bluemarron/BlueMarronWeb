@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>설치</h3>
    <p>
      안녕하세요.<br/>
      오늘은 PHP 공부하기에 앞서 사전에 준비해야 할 사항에 대해 말씀드리겠습니다.<br/><br/>
      PHP를 공부하시기 위해서는 자신의 PC에 직접 APM(Apache + PHP + MySQL)을 설치하시거나 PHP 개발 환경을 제공해주는 호스팅 서비스(예: Cafe24 등)를 이용하시면 됩니다.<br/><br/>
      만일 자신의 PC에 직접 APM을 설치하실 경우, 설치에 필요한 소스나 프로그램을 해당 웹사이트에서 다운로드 및 설치를 해야 되는데, 
      이 부분은 다소 내용이 길기 때문에 아래 링크된 웹사이트를 참고하시기 바랍니다.
    </p>

    <div class="alert alert-info">
      * Mac OS X 설치 : <a href="http://www.php.net/manual/kr/install.macos.php" target="_blank">http://www.php.net/manual/kr/install.macos.php</a><br/>
      * Windows 설치 : <a href="http://www.php.net/manual/kr/install.windows.php" target="_blank">http://www.php.net/manual/kr/install.windows.php</a><br/>
      <br/>
      만일, Windows 사용자라면 <a href="http://www.apmsetup.com/apminfo.php" target="_blank">http://www.apmsetup.com/apminfo.php</a> 에서 제공하는 패키지 설치파일을 이용하시면 비교적 쉽게 설치하실 수 있습니다.
    </div>

    <p>
      그럼, 다음 강좌부터 PHP의 기초적인 내용을 시작으로 하나씩 배워보도록 하겠습니다.
    </p>  
  </div>
@stop