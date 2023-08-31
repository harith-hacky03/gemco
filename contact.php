
<?php


$name=$_POST['name'];

$email=$_POST['email'];
$phone=$_POST['phone'];

$message22=$_POST['message'];

?><?php

    
         $to = "muthulakshmi2kombaiah@gmail.com";
         $subject = " Enquiry Receive  From Webside";
         
         $message = "<h1> Enquiry</h1>
         <table style='border: 2px dashed #FB4314; width: 100%;'>
         <tr>
           <th> Name</th>
           <td>$name</td>
         
         </tr><tr>
         <th>Email</th>
         <td>$email</td>
         
         </tr>
         <tr>
           <th>Phone</th>
           <td>$phone</td>
         
         </tr>
         <tr>
         <th>Message</th>
         <td>$message22</td>
       
       </tr>
       
     
         
         </table>";
         $header = "From:muthulakshmi2kombaiah@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
     
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
          header("location:index.html");
         }else {
          header("location:contact.html");
         }
      ?>