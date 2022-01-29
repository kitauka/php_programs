<?php 
    

    $var1 = 10;
    $var2 = 'Hello world';
    $var3 = array(
        4,5,'56OP',10
    );
    $var4 = [$var3,array('kitauka'=>'kitauka Niyonzima'),34.6,12,'hello'];
    
    if (isset($_POST['save']) && !empty($_POST['save'])) {
       echo 'name='.$_POST['name'].'<br/>';
       echo 'date='.$_POST['date'].'<br/>';
       echo 'height='.$_POST['height'].'<br/>';
    }
?>

<!DOCTYPE>
<html>
      <head>
          <title>Kitauka</title>
      </head>
      <body>
           <form action="#" method="post" >
                  Name : <input autocomplete="off" placeholder="Give a name" type="text" value="" id="name" name="name" /> <br>
                  DOB : <input type="date" value="" id="date" name="date" /> <br>
                  Height : <input required="true" type="number" value="" id="height" name="height" /> <br>
                  <input type="submit" name="save" id="save">
           </form>
      </body>
</html>