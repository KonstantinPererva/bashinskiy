<?

  $fio = htmlspecialchars($_POST[fio]);
  $phone = htmlspecialchars($_POST[phone]);
  $fio = htmlspecialchars($_POST[fio]);
  $email = htmlspecialchars($_POST[email]);
  $text = htmlspecialchars($_POST[text]);

  $to = "bashinskiy@oddeeagency.com";
  $subject = "Отправленно с bashinskiy.in.ua";
  $message = $text."<br /><i>Это письмо отправлено c сайта <b>bashinskiy.in.ua</b></i><br><br>Контактный телефон: ".$phone;
  $headers = "From: ".$fio." <".$email.">\r\nContent-type: text/html; charset=utf8 \r\n";
  
  if(mail ($to, $subject, $message, $headers)) { echo json_encode("email_true"); } else { echo json_encode("email_false"); }
 

	
?>

