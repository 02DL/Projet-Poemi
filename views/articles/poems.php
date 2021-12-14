<article>

<section class="container-loisir container text-center" id="poemDay">

<?php
$i = 0;
if($_SESSION['personalPost'][$i]!=null){
?>
<li>
   <?php
   echo $_SESSION['personalPost'][0][$i];
   $i=$i++;   
   ?>
</li>

<?php 
   }
?>
            
</section>

</article>