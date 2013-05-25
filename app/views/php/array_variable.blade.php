@extends('layouts.master')

@section('content')
  <div class="well">
    <h3>배열 변수</h3>
    <p>

    오늘은 배열(array) 변수에 관해 알아보도록 하겠습니다.<br/>
    먼저 프로그램을 작성할 때 배열 변수라는 것이 왜 필요한지 설명드리겠습니다.<br/><br/>

    예를 들어, 학생 100명의 성적 합계를 구하는 프로그램을 작성할 때, 배열 변수를 사용하지 않고 작성한다면 다음과 같을 것입니다.<br/>

<pre class="prettyprint linenums">
&lt?
$score_1 = 50;
$score_2 = 70;
.
.
.
$score_99 = 80;
$score_100 = 60;

$sum = $score_1 + $score_2 + ... + $score_99 + $score_100;
?&gt</pre>

      위와 같이, 배열 변수를 사용하지 않으면 서로 다른 100개의 변수에 성적을 저장한 후,
      $sum 변수에 100명의 성적 합계를 계산하기 위해 서로 다른 변수명을 가진 100개의 변수들을 일일이 작성해야 할 것입니다.<br/><br/>

      이렇게 프로그램을 작성한다면 코드가 너무 길어질 수 있으며, 자칫 특정 변수가 누락되는 실수를 범할 수 있을 것이다.<br/><br/>

      하지만, 배열 변수를 사용하면 위 동일한 목적을 가진 프로그램을 아래와 같은 방법으로 작성할 수 있을 것입니다.<br/><br/>

<pre class="prettyprint linenums">
&lt?
$score[0] = 50;
$score[1] = 70;
.
.
.
$score[98] = 80;
$score[99] = 60;

for($count = 0; $count < 100; $count++)
{
  $sum = $sum + $score[$count];
}
?&gt</pre>

      위 예제코드에서 보실 수 있는 것처럼, 배열 변수를 사용하면 100명의 성적을 $score 라는 동일한 이름을 가진 변수에 저장한 후,
      성적 합계를 계산할 때 $sum 변수에 $score 라는 변수만 사용한 것을 볼 수 있습니다.<br/><br/>

      따라서, 위 예제코드처럼 배열 변수를 사용하면 합계를 계산하는 코드 구문이 배열을 사용하지 않은 프로그램에 비해 코드 길이를 크게 줄이는 등 
      효율적으로 프로그램을 작성할 수 있습니다.<br/><br/>

      그리고 배열 변수를 사용할 때 동일한 변수명에 저장되는 각각의 값들을 구별하기 위해 인덱스(index)라는 것을 사용합니다.<br/>
      위 예제코드에서 $score 변수명 옆에 표기한 [0], [1] ... 등이 $score 배열 변수의 인덱스가 됩니다.<br/><br/>

      참고로 인덱스 번호는 1 이 아니라 0 부터 시작합니다.<br/><br/>

      그러므로 위에 작성된 프로그램은 $score 배열 변수의 인덱스 값을 "for" 반복문을 사용하여 0부터 99까지 증가시키면서,
      $sum 변수에 순차적으로 100명의 성적을 계속 누적시키게 됩니다.<br/>
      ("for" 반복문에 대해서는 이후 강좌에서 설명해 드리겠습니다.)<br/><br/>

      배열 변수의 의미와 사용법을 다시 정리하자면, 배열 변수란 동일한 자료형을 가지는 데이터를 효율적으로 다루기 위해 사용되는 변수로,
      하나의 동일한 변수명을 가지며 각각의 값들은 인덱스로 구별됩니다.<br/><br/>

      혹시, 배열 변수가 당장 이해되지는 않더라도 지금 걱정하지 않으셔도 됩니다.<br/>
      프로그램을 점진적으로 작성하다보면 자연스럽게 배열의 필요성을 느끼게 되고 그 사용법에 대해서도 이해하실 수 있을 것입니다.<br/><br/>

      그럼, 다음 강좌에서는 "전역 변수"에 대해 배워보겠습니다.
  </div>
@stop      