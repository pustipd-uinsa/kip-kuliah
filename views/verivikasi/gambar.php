<?php 

use yii\helpers\Html;
use yii\helpers\Url;
$ext = explode('.',$gambar);
if (count($ext) >=2 ) {
  if ($ext[1] == 'pdf') {
  ?>
 <object width="800" height="600" data=<?=Url::to(["/document/". $gambar]) ?>>
  
<?php
  } else {
  ?>
 <img width="800" height="600" src=<?=Url::to(["/document/". $gambar]) ?>>
  
<?php   
  }
 
}
?>
 
   
        