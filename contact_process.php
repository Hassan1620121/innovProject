<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "info@innovativev.co.uk";
         $message = ucfirst($_POST['message']);
         $subject = ucfirst($_POST['subject']);
         $order = $_POST['order'];
         $mess = '';
         if(!empty($order))
         {
             $mess = $order;
         }
         else
         {
             $mess = $message;
         }
         $message_to_send = "<b>".$mess."</b>";

         $header = "From:".$_POST['email']." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message_to_send,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>