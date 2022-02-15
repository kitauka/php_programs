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
          <link rel="stylesheet" href="design.css">
      
      </head>
      <body >
          
           <form  action="#" method="post" class="myform" >
 <u><i><b style ="text-transform:uppercase"><center>Registration form</center></b></i></u>
                <table style="width:100%">
                      <tbody>
                            <tr>
                                 <td> Name :</td>
                                 <td><input autocomplete="off" placeholder="Give a name" type="text" value="" id="name" name="name" /> </td>
                            </tr>

                            <tr>
                                 <td>DOB :</td>
                                 <td><input type="date" value="" id="date" name="date" /></td>
                            </tr>

                            <tr>
                                 <td> Height : </td>
                                 <td><input required="true" type="number" value="" id="height" name="height" /></td>
                            </tr>

                            <tr>
                                 <td colspan="2"><center><input type="submit" name="save" id="save"></center></td>
                         
                            </tr>
                      </tbody>
                </table>
                   
           </form>
      </body>
</html>