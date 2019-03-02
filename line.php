 <?php
  

function send_LINE($msg){
 $access_token = 'XHg1JQXVfTd+6/J4dOyQ3Me/CQ57DKTG/TdNvGaoOq3ipu4H33KCb71darXeWIkyGCQX4mL7h0ivr3gZQHuOme/IGN424ki55qFkcafN9PNVOETr74pENZP9PBbuelc5tCpH+yUQ/dHfoBehI5pWwwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U7ab91131747e1c23147f0b4ab43adf66',
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
