@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>폼(Form)을 통한 변수 처리</h3>
    <p>
      안녕하세요.<br/><br/>

      오늘은 폼(Form)을 통해 사용자가 입력한 값을 PHP에서 처리하는 방법에 대해 알아보겠습니다.<br/><br/>

      여러분들이 웹서핑을 하다보면 사용자로부터 숫자나 문자열을 입력받을 수 있도록 하는 입력박스를 자주 보게 될 것입니다.<br/>
      그와같이 사용자가 입력한 값은 변수형태로 저장되어 지정된 페이지로 전달되는데, PHP에서는 그러한 과정이 어떻게 이루어지는지 알아봅시다.<br/><br/>

      먼저, 다음과 같이 텍스트 입력박스가 들어간 코드를 작성 후, test.html 파일명으로 저장해주세요.
    </p>
      
<pre class="prettyprint linenums">
&ltform method = "post" action = "result.php"&gt
  좋아하는 동물은? &ltinput type = "text" name = "animal"&gt
  &ltinput type = "submit" value = "확인"&gt
&lt/form&gt</pre>

      <p>
        위의 코드를 웹브라우저로 확인하면 입력 박스 한개와 확인 버튼이 보이는 것을 확인하실 수 있을 것입니다.<br/><br/>
        그리고 그 입력박스에 "호랑이" 라고 입력하고나서 "확인" 버튼을 누르게 되면, 
        입력된 문자열은 위 코드에 기술되어 있듯이 text 양식의 name 속성으로 지정된 "animal" 이라는 변수에 셋팅되어지며, 이어서 action 속성값인 "result.php" 페이지로 전달되어집니다.<br/><br/>

        그럼, test.html 페이지에서 넘겨받은 입력 값, 즉 "animal" 이라는 변수에 저장된 값을 출력하기 위해 아래와 같이 result.php 코드를 작성해보겠습니다.
      </p>
        
<pre class="prettyprint linenums">
&lt?
$animal = $_REQUEST['animal'];
echo '당신이 좋아하는 동물은 ' . $animal . '입니다.';
?&gt</pre>

      <p>
        위 코드에서 볼 수 있듯이, PHP 파일내에서 "$_REQUEST" 라는 구문을 사용하여 사용자가 입력한 값을 전달받을 수 있습니다.<br/>
        그럼 결과는 아래와 같이 나오겠죠?
      </p> 
      <div class="alert alert-info">
        당신이 좋아하는 동물은 호랑이입니다.
      </div> 
      <p>
        오늘 내용은 여기까지입니다~
      </p> 
  </div>
@stop젹