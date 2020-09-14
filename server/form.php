<?php
    $name = $_POST['user_name'];
    $phone = $_POST['user_tel'];
    $token = "1389485327:AAEKdivNk-jj8d3oxiSVI1y0f9mSuwsiphI";
    $chat_id = "-461778036";
    $arr = [
      'Ismi: ' => $name,
      'Telefon raqami: ' => $phone
    ];
    
    foreach($arr as $key => $value) {
      $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    
    if ($sendToTelegram) {
      echo "true";
    } else {
      echo "false";
    }
?>