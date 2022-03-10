<?php
	 setcookie("name", "divya", time()+3600, "/","", 0);
	 setcookie("age", "21", time()+60, "/", "",  0);
?>
<!doctype html>
<html>
   
   <head>
      <title></title>
   </head>
   
   <body>

      <?php
        echo "Set Cookies"."<br/>";
        echo "Set Cookies 60s";
      ?>
      
   </body>
</html>