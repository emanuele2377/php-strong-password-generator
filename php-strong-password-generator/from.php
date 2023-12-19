<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="due.php">
        <input type="text" placeholder="genera password" name="name" required>
        <button type="submit">Invia</button>
    </form>
    

<?php
 
 function randomPassword($length,$count, $characters) {
  
 
     $symbols = array();
     $passwords = array();
     $used_symbols = '';
     $pass = '';
  

     $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
     $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $symbols["numbers"] = '1234567890';
     $symbols["special_symbols"] = '!?~@#-_+<>[]{}';
  
     $characters = split(",",$characters); 
     foreach ($characters as $key=>$value) {
         $used_symbols .= $symbols[$value]; 
     }
     $symbols_length = strlen($used_symbols) - 1; 
      
     for ($p = 0; $p < $count; $p++) {
         $pass = '';
         for ($i = 0; $i < $length; $i++) {
             $n = rand(0, $symbols_length);
             $pass .= $used_symbols[$n]; 
         }
         $passwords[] = $pass;
     }
      
     return $passwords; 
 }
  
 $my_passwords = randomPassword(10,1,"lower_case,upper_case,numbers,special_symbols");
  
 print_r($my_passwords);
  
 ?>
</body>
</html>