@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>산술 및 대입 연산자</h3>
    <p>
      안녕하세요.<br/><br/>

      오늘은 연산자 가운데 산술 연산자와 대입 연산자에 관해 알아보겠습니다.<br/><br/>

      먼저, PHP에서 제공하는 산술연산자에는 '+', '-', '*', '/', '%' 가 있습니다.<br/>
      다음의 예제를 통해서 각각의 산술 연산자가 어떻게 쓰이는지 보겠습니다.
    </p>
      
<pre class="prettyprint linenums">
&lt?
$first = 8;
$second = 3;

$addition = $first + $second;
$subtraction = $first - $second;
$multiplication = $first * $second;
$division = $first / $second;
$modulo = $first % $second;

echo '덧셈 : ' . $addition . '&ltbr>';
echo '뺄셈 : ' . $subtraction . '&lt?r>';
echo '곱셈 : ' . $multiplication . '&ltbr>';
echo '나눗셈 : ' . $division . '&ltbr>';
echo '나머지 : ' . $modulo;
?&gt</pre>

      <p>
        일단, 위 예제코드를 실행하면 아래와 같은 결과를 얻을 수 있습니다.
      </p>
        
      <div class="alert alert-info">
        덧셈 : 11<br>
        뺄셈 : 5<br> 
        곱셈 : 24<br> 
        나눗셈 : 2.6666666666667<br> 
        나머지 : 2
      </div>

      <p>
        설명이 거의 필요없는 코드죠 ^^<br/><br/>

        이제 대입 연산자에 대해 알아보겠습니다.<br/><br/>

        기본적인 대입 연산자는 '=' 으로, 이것의 의미는 "같다" 가 아니라 '=' 을 기준으로 오른쪽 식의 값을 왼쪽의 변수에 할당하는 것을 의미합니다.<br/>
        예를 들어, $first = 15; 라는 코드는 15 라는 값을 $first 에 할당한다는 의미입니다.<br/><br/>

        그럼, 다음 코드의 출력 결과는 어떻게 될까요?
      </p>

<pre class="prettyprint linenums">
&lt?
$result = $temp = 5 + 3;
echo '결과값 : ' . $result . ', 중간값 : ' . $temp . '&ltbr>';

$result = ($temp = 5) + 3;
echo '결과값 : ' . $result . ', 중간값 : ' . $temp . '&ltbr>';
?&gt</pre>

      <p>
       위 예제코드를 실행하면 아래와 같은 결과를 얻을 수 있습니다.
      </p>
        
      <div class="alert alert-info">
        결과값 : 8, 중간값 : 8<br>
        결과값 : 8, 중간값 : 5
      </div>

      <p>
        위의 결과를 보면 표현식에서 괄호의 사용 여부에 따라 결과가 달라짐을 볼 수 있습니다.<br/><br/>

        즉, 위의 코드에서 $result = $temp = 5 + 3; 구문은 먼저 5 + 3 을 계산해서 얻어진 8 이라는 값을 $temp 변수에 할당하고, 
        다음으로 $temp 변수의 값을 $result 에 할당하게됩니다.<br/><br/>

        따라서, $result 와 $temp 두 변수의 값이 동일한 값 8 을 가지게 됩니다.<br/><br/>

        그런데, $result = ($temp = 5) + 3; 구문처럼 중간에 괄호가 들어가게 되면 괄호로 묶여진 부분이 첫번째로 처리되어 $temp 에 5 가 들어가며,
        다음으로 괄호로 묶여진 부분의 값인 5 와 3 이 더해져서 $result 에 할당되게 됩니다.<br/><br/>

        따라서, $result 와 $temp 두 변수는 각각 값이 다르게 저장되죠.<br/><br/>

        또한, PHP 에서 제공하는 대입 연산자로 '+=', '-=', '.=' 가 있는데 각각 어떤 의미인지 다음의 코드를 보겠습니다.
      </p>

<pre class="prettyprint linenums">
&lt?
$first = 10;
$first += 7;
echo '결과값 : ' . $first . '&ltbr>';

$first -= 4;
echo '결과값 : ' . $first . '&ltbr>';

$second = '미즐은 ';
$second .= '바보다 ~~';
echo '결과값 : ' . $second;
?&gt</pre>

      <p>
       위 예제코드를 실행하면 아래와 같은 결과를 얻을 수 있습니다.
      </p>
        
      <div class="alert alert-info">
        결과값 : 17<br>
        결과값 : 13<br>
        결과값 : 미즐은 바보다 ~~
      </div>

      <p>
      대략 의미를 아시겠죠 ^^<br/><br/>

      바로, $first += 7; 은 $first = $first + 7; 와 같은 의미로, 
      먼저 $first 에 10 이 할당되었기 때문에 이 코드는 $first = 10 + 7 과 같이 인식되어 $first 에는 17 가 저장됩니다.<br/><br/>

      $first -= 4; 역시 $first = $first - 4 와 같은 의미로 $first = 17 - 4 로 인식되어 13 이 $first 에 저장되겠죠.<br/><br/>

      마찬가지로 $second .= '바보다 ~~'; 은 $second = $second . '바보다 ~~'; 와 같은 의미이며,<br/>
      이 구문이 쓰이기 전에 $second 에 '미즐은' 문자열이 저장되었기 때문에,<br/>
      $second = '미즐은 ' . '바보다 ~~'; 와 같이 되어 $second 에는 '미즐은 바보다 ~~' 문자열이 저장되겠죠.<br/><br/>

      오늘 내용도 쉽죠 ^^
      </p>  

  </div>
@stop젹