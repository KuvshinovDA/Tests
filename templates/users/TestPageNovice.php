<!DOCTYPE html>
<html>
<head>
	<title>Тест</title>
</head>
<body>
    <h3>Тест "Новичок"</h3>
    
<form method="POST">
<?php foreach ($quest as $question) { ?>
<p><b><?php echo $question?></b><br>
    <?php foreach ($options as $optio => $option[]) : 
      // foreach ($optio as $option) :?>
      <label>
        <input type="radio" name="<?php echo $name ?>" value="<?php echo $option ?>">
      </label>
    <?php echo $option ?>
  </p>
  
    <?php endforeach;?>
    <?php //endforeach;?>
<?php } ?>
  <input type="submit" value="Выбрать" >
</form>

<?php

    $a = '';
echo '<pre>';
        
        // print_r ($_SESSION['login']); 
        // echo '<pre>';
        // print_r ($_SESSION['instructor']);
        // echo '<pre>';
        // print_r ($_SESSION['level']);
        echo '<pre>';
         var_dump ($quest);          
        echo '<pre>';
         var_dump ($name);          
        echo '<pre>';
         var_dump ($options);          
        echo '<pre>';
         var_dump ($correctAnswer);          
        echo '<pre>';
           ?>

    
      
</body>
<!-- </html> -->