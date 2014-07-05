@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>전역 변수</h3>
    <p>
      안녕하세요.<br/><br/>

      오늘은 변수가 사용되는 범위(scope)와 관련된 내용으로 "전역 변수"에 대해 설명 드리겠습니다.<br/>
      PHP에서 변수가 사용될 수 있는 범위는 기본적으로 그 변수가 선언된 영역에 한정됩니다.<br/><br/>

      먼저 아래 예제코드를 보시겠습니다.
    </p>  

<pre class="prettyprint linenums">
&lt?
$color = 'blue';

function getColor() 
{
  echo 'color: ' . $color;
}

getColor();
?&gt</pre>

      <p>
        위 예제코드는 getColor() 함수 밖에서 $color 변수에 'blue' 라는 문자열을 저장하고 
        getColor() 함수를 호출하여 $color 값을 출력하는 코드입니다.<br/>
        (함수에 대해서는 추후 강좌에서 설명드리습니다.)<br/><br/>

        아마 어떤 분들은 getColor() 함수를 호출할 때, "color: blue" 와 같은 결과가 출력될 것이라고 생각하실지 모릅니다.<br/>
        하지만, 위 예제코드의 결과를 확인하면 아래와 같습니다.
      </p>
        
      <div class="alert alert-info">
        color:
      </div>

      <p>  
        위와 같은 결과가 나오는 이유는, 함수 밖에서 선언된 $color 변수가 함수 내에서는 사용될 수 없기 때문입니다.<br/>
        따라서, 함수 안에서 $color 변수를 출력하면 공백 즉, 어떤 값도 출력되지 않습니다.<br/><br/>

        그럼, 함수 밖에서 선언된 변수를 함수 내에서 사용하려면 어떻게 해야 할까요?<br/>
        해당 변수 앞에 global 이라는 선언자를 붙여주면 함수 안에서도 사용이 가능합니다.<br/><br/>

        따라서, 위 예제코드를 다음과 같이 수정하시면 됩니다.
      </p>  

<pre class="prettyprint linenums">
&lt?
$color = 'blue';

function get_color() 
{
  global $color;
  echo 'color: ' . $color;
}

get_color();
?&gt</pre>

      <p>  
        이제, 위 예제코드를 웹브라우저에서 다시 확인하면 아래와 같은 결과를 확인하실 수 있습니다.
      </p>
        
      <div class="alert alert-info">
        color: blue
      </div>      

      <p>  
        이와 같이 global 이라고 선언된 변수를 "전역 변수"라고 부릅니다.<br/><br/>
        전역 변수가 사용된 또 다른 예제코드를 보시겠습니다.
      </p>
        
<pre class="prettyprint linenums">
&lt?
$count = 10;

function increase() 
{
  global $count;
  $count++;
}

increase();
increase();

echo 'count: ' . $count;
?&gt</pre>

      <p>  
        위 예제코드를 실행하면 최종적으로 $count 변수에는 어떤 값이 저장될까요?<br/><br/>

        네, increase() 함수 안에서 $count 변수가 전역 변수로 선언되었기 때문에
        함수 밖에서 선언된 $count 변수의 값을 함수 안에서도 유지하면서 사용할 수 있습니다.<br/><br/>

        따라서, 위 예제코드를 실행하면 increase() 함수를 두 번 호출하였기 때문에 
        최초 10이라는 값을 가진 $count 변수에 1을 두 번 더하게 되어 아래와 같이 12라는 값이 출력됩니다.
      </p>    

      <div class="alert alert-info">
        count: 12
      </div> 

      <p>  
        오늘 강좌는 조금 어려웠나요? (^^;)
      </p>  
  </div>
@stop      