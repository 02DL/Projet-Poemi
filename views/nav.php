<?php
if (connected()) {
?>
   <ul id="menu">
      <li>
         <a href="index.php?c=process_signOut">Sign Out</a>
      </li>
      <li>
         <a href="index.php?c=articles/poems">My poems</a>
      </li>
      <li>
         <a href="index.php?c=about">About us</a>
      </li>
      <li>
         <a href="index.php?c=home">Home</a>
      </li>
   </ul>

<?php
} else {
?>
   <ul id="menu">
      <li>
         <a href="index.php?c=home">Home</a>
      </li>
      <li>
         <a href="index.php?c=about">About us</a>
      </li>
      <li>
         <a href="index.php?c=login">Sign In</a>
      </li>
   </ul>
<?php
}
?>