<?
$count = 10;

function increase() 
{
  global $count;
  $count++;
}

increase();
increase();

echo 'count: ' . $count;
?>