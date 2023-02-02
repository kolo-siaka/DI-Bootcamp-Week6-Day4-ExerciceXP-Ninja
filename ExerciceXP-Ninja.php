<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice XP Ninja</title>
</head>
<body>
      <?php 
          $tab = array(1, 2, 3, 4,5);
          $tab1 = array(2, 3, 4, 5, 6,7,8);

          $merge = array_merge($tab,$tab1);
          echo "First array : ";
          print_r($tab);
          echo "<br> First array : ";
          print_r($tab1);
          echo "<br> Union  : ";
          print_r($merge);
       ?>
</body>
</html>