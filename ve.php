<?php
class dog {
    public $leg = 4;

    public $price = 100;
    public $food = ["meat","bread"];

}
class Person {
    public $name = 'Alex Super Tramp';

    public $age = 100;

    private $property = 'property';
	public $dogSpec;

}


$Jim=new Person();
$Jim->dogSpec=new dog();
$Jim->dogSpec->dogSpec=new dog();
$Jim->dogSpec->dogSpec->dogSpec=new dog();
$Jim->dogSpec->dogSpec->dogSpec->dogSpec=new dog();
// or
// echo "<pre>";
// echo print_r($Jim);
function pri($arr,$step){
	$pos=0;
  foreach($arr as $key=>$val){$pos++;
	if ($pos<10)
	{
		if ((gettype($val)!='object')&&(gettype($val)!='array')){
      echo "<div><span class='key'>".$key."</span><span> : ".$val."</span></div>";
		}
		else
			{
      if (gettype($val)=='object')
      {echo "<div><span class='obj-main'>" ."Obj-" .$key." :</span>";
        echo "<div class='obj'>";
        pri($val,$step+1);
          echo "</div>";
          echo "</div>";
      }
      if (gettype($val)=='array')
      {echo "<div class='arr'><span class='obj-main'>" ."Arr-" .$key." :</span>";
        
        pri($val,$step+1);
          echo "</div>";
      }
				}
  }
	}

}
function Print_obj($Jim){
	$step=1;
	pri($Jim,$step);

}

Print_obj($Jim);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Document</title>

</head>
<script>
$(document).ready(function(){
  $('div').on('click',function(e){
    e.stopPropagation();
    $(this).children().toggle("slow");
  })
});
</script>
<body>

</body>
</html>
