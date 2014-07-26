@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>가변 변수</h3>
    <p>
      안녕하세요.<br/><br/>

      오늘은 가변 변수(variable variables)에 대해서 설명해 드리겠습니다.<br/><br/>

      우리가 프로그래밍을 하다 보면, 예외적인 상황으로<br/>
      변수에 어떤 값이 있을 때, 그 값을 이름으로 가지는 변수를 사용하고 싶을 때가 있습니다.<br/><br/>

      예를 들어, $language 라는 변수에 "English" 라는 값이 있을 때 그 변수의 값 즉, "English" 라는 값을 이름으로 가지는 변수를 사용하고 싶을 때가 있습니다.<br/><br/> 

      PHP에서는 그렇게 할 수 있는 방법을 제공해주는데, 어떻게 할 수 있는지 다음의 코드를 보겠습니다.
    </p>
      
<pre class="prettyprint linenums">
&lt?
$language = 'English';    
$$language = 'difficult';

echo '$language is $English.';
?&gt</pre>

      <p>
        일단, 위 예제코드를 실행하면 아래와 같은 결과를 얻을 수 있습니다.
      </p>
        
      <div class="alert alert-info">
        English is difficult.
      </div>

      <p>
        그럼, 위 코드를 잠깐 살펴볼까요.<br/><br/>

        위에서 볼 수 있듯이, 변수의 값을 이름으로 가지는 변수를 만들어주기 위해서 변수 앞에 "$$"와 같이 표기한 것을 볼 수 있습니다.<br/>
        따라서, $language 변수의 값, 즉 "English" 라는 값을 이름으로 갖는 $English 변수에 "difficult" 라는 값이 들어가게 됩니다.<br/><br/>

        위의 경우처럼 변수의 값을 이름으로 가지는 변수를 가변 변수라고 합니다.<br/><br/>

        또한, 위 예제 코드와 같이 가변 변수를 정의한 경우,<br/>
        "difficult" 라는 값을 얻기 위해 echo $English 와 동일한 또 다른 표현식으로 echo ${language} 와 같이 사용할 수도 있습니다.<br/><br/>

        오늘 내용은 여기까지입니다~
      </p> 
  </div>
@stop젹