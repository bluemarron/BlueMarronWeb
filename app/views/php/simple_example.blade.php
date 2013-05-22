@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>간단한 예제</h3>
    <p>
      안녕하세요.<br/>
      APM을 문제없이 설치하셨다면 이제 간단한 PHP 예제코드를 작성해보겠습니다.<br/><br/>

      먼저, PHP 코드를 입력할 수 있는 편집 프로그램이 필요한데 "Ultra Edit"나 "Edit Plus" 또는 최근에 인기를 얻고 있는 "Sublime Text" 등 취향에 맞는 프로그램을 이용하시면 됩니다.<br/><br/>

      그럼, 이제 편집 프로그램을 실행하신 후에 다음과 같이 입력해보세요.<br/>

<pre class="prettyprint linenums">
&lt?
echo 'Hello World';
?&gt</pre>

      코드입력을 마친 후 hello.php 파일명으로 저장하신 후 웹브라우저에서 확인해보겠습니다.<br/><br/>

      만일 아파치 웹서버의 기본적인 셋팅환경에서 테스트하고 신다면 hello.php 파일을 아파치가 설치된 경로 안의 htdocs 디렉토리에 저장해보세요.<br/> 
      그리고 아래와 같이 웹브라우저 주소창에 입력하신 후 확인해보세요.<br/><br/>

      <div class="alert alert-info">
        http://127.0.0.1/hello.php
      </div>

      웹브라우저에 아래와 같은 문자열이 보인다면 첫 번째로 작성된 PHP 프로그램이 정상적으로 실행된 것입니다.
      <br/><br/>

      <div class="alert alert-info">
        Hello World
      </div>

      그럼, 위에 작성하신 코드를 다시한번 살펴보겠습니다.<br/><br/>

<pre class="prettyprint linenums">
&lt?
echo 'Hello World';
?&gt</pre>

      보시는 바와 같이 PHP 코드 앞 뒤로 "&lt?" ... "?&gt" 와 같은 태그로 묶여야 합니다.<br/>
      참고로 ASP 에서는 <% ... %> 태그를 사용합니다.<br/><br/>

      그리고 echo "..." 명령어는 문자열을 출력하는 기능을 수행하며, 따라서 위 예제 코드에서는 쌍따옴표로 묶여진 문자열인 "Hello World" 가 화면에 보여지게 됩니다.<br/><br/>

      또한 위 예제 코드에서 작성된 것처럼 PHP 프로그래밍을 하실 때에는 코드 문장이 종료되는 부분에 세미콜론(;) 기호를 입력하셔야 됩니다.<br/><br/>

      그럼, 오늘 강좌를 마치고 다음에는 변수를 어떻게 사용하는지 배워보도록 하겠습니다.
  </div>
@stop      