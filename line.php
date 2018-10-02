 <?php
  

function send_LINE($msg){
 $access_token = 'AR0/bSzFhBeUpDiRRHLIOUse3fFBRMzkpq9mB+EExI88Y0YyxXoIQtnxUtUAnxEOU0TWCHGlFMz2Iucq2socO4ZFu7zcQziKappHqPtJPlsIfD5yTIF7WGAnp9mySBOyqwRIv2KWyB/+Em6DKJH4WQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U84116c2de5f4b5a34232acd0ce54a042',
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
