 <?php
  
   // Channel access token (long-lived) 
function send_LINE($msg){
 $access_token = 'EPdYLxLxfTdrNal8Y/a3ihGIXvD6Ky8NmiJPuCsuyYrZiLUwB5bPiLBj6KYEcQPGEzJ7dJbnwI8Bscjama6bmGhveZW+507g2YGKNm7d4N/+ee5ESR8i6ZGdISsP6aEuSJdKHmQUkwrDExNCjCYocAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U887d30ecc9afe44ad80ecc2d12897f66',  // LINE Your user ID
       
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
