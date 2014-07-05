@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>정적 변수</h3>
    <p>
      안녕하세요.<br/><br/>

      앞 강좌에 이어 오늘은 "정적 변수"에 대한 얘기를 해드리겠습니다.<br/>
      먼저 정적 변수라는 것 왜 필요한지 알아보기 위해, 변수의 값을 1씩 순차적으로 증가시키는 간단한 프로그램을 보시겠습니다.
    </p>
      
<pre class="prettyprint linenums">
&lt?
function increase() 
{
  $count = 0;
  echo 'count: ' . $count . '&ltbr&gt';
  $count++;
}

increase();
increase();
increase();
?&gt</pre>

      <p>
        위 예제코드는 $count 변수의 값을 1씩 증가시키는 increase() 함수를 세 번 호출하고 있습니다.<br/>
        (위 코드에 사용된 '&ltbr&gt' 태그는 다음 줄로 출력하라는 의미입니다.)<br/><br/>

        그런데 위 프로그램을 실행하면 우리가 기대하는 것과는 다르게 아래와 같은 결과를 얻게 될 것입니다.
      </p>
        
      <div class="alert alert-info">
        count: 0<br/>
        count: 0<br/>
        count: 0<br/>
      </div>

      <p>
        위와 같은 결과가 나오는 이유는 increase() 함수를 호출하였을 때, 그 함수 안에서는 $count 변수의 값을 1씩 증가시키지만,
        그 함수가 종료되면 $count 변수에 저장된 값이 사라지기 때문입니다.<br/><br/>

        이와 같이 함수가 종료되어도 함수 안에 정의된 변수의 저장된 값을 유지시키기 위해서는 static 이라는 선언자를 사용해야 합니다.<br/>
        그리고 이렇게 static 이라는 선언자가 붙은 변수를 정적 변수라고 부릅니다.<br/><br/>

        그럼 위 예제코드에 정적 변수를 사용해 수정하면 코드는 다음과 같을 것입니다.
      </p>  

<pre class="prettyprint linenums">
&lt?
function increase() 
{
  static $count = 0;
  echo 'count: ' . $count . '&lt;br/&gt';
  $count++;
}

increase();
increase();
increase();
?&gt</pre>

      <p>
        그리고 위 프로그램의 결과는 우리가 기대하는 것처럼 아래와 같을 것입니다.
      </p>
        
      <div class="alert alert-info">
        count: 0<br/>
        count: 1<br/>
        count: 2<br/>
      </div>

      <p>
        오늘 설명해드린 정적 변수가 조금 이해 되시나요?<br/>
        그럼, 다음 강좌에서도 또 다른 특성을 가진 변수에 대해 배워보겠습니다.
      </p>  
  </div>
@stop젹