<?php
require('views/articles/post.php');
?>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 ">
   <?php
   if (connected()) {
   ?>
      <form action="index.php?c=process_post" method="POST" enctype="multipart/form-data">
         <div class="mb-3">
            <input type="text" class="form-control" name="poeme" placeholder="Type">
         </div>
         <button type="submit" class="btn btn-block">Poster</button>

      <?php
   }
      ?>