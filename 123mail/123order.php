<?php
if(isset($_POST["go"])) {
 
 // ===== reference =====
 if( isset($_POST["name"]) ) {
 $name = $_POST["name"];
 }
 if( isset($_POST["email"]) ) {
 $email = $_POST["email"];
 }
 if( isset($_POST["phone"]) ) {
 $phone = $_POST["phone"];
 } 

 if( isset($_POST['order']) ) {
 	$order = $_POST['order'];
 }
 if( isset($_POST["checkone"]) ) {
 $checkone = $_POST["checkone"];
 } 
 if( isset($_POST["checktwo"]) ) {
 $checktwo = $_POST["checktwo"];
 } 
   if( isset($_POST["checkbrifone"]) ) {
 $checkbrifone = $_POST["checkbrifone"];
 } 
   if( isset($_POST["checkbriftwo"]) ) {
 $checkbriftwo = $_POST["checkbriftwo"];
 } 
   if( isset($_POST["checkbrifthree"]) ) {
 $checkbrifthree = $_POST["checkbrifthree"];
 } 
   if( isset($_POST["checkbriffour"]) ) {
 $checkbriffour = $_POST["checkbriffour"];
 } 
   if( isset($_POST["checkbriffive"]) ) {
 $checkbriffive = $_POST["checkbriffive"];
 } 
   if( isset($_POST["checkbrifsix"]) ) {
 $checkbrifsix = $_POST["checkbrifsix"];
 } 
   if( isset($_POST["checkbrifseven"]) ) {
 $checkbrifseven = $_POST["checkbrifseven"];
 } 
   if( isset($_POST["checkbrifeight"]) ) {
 $checkbrifeight = $_POST["checkbrifeight"];
 } 
  
 if( isset($_POST["message"]) ) {
 $text = $_POST["message"];
 }

// ===== Variables =====
 $to = "shirr14@gmail.com"; // E-mail на который присылать письмо
 $fromEmail = "info@vshirokov.ru"; // E-mail от имени которого приходит письмо. Почта на домене сайта.
 
 if ( isset($_POST["submitCallback"]) ) {
 $subject = "Заказан обратный звонок"; 
 }
 if ( isset($_POST["submitFeedback"]) ) {
 $subject = "Обращение из формы обратной связи"; 
 }
  if ( isset($_POST["submitOrder"]) ) {
 $subject = "Оформление заказа"; 
 }
 if ( isset($_POST["submitMore-Detailed"]) ) {
 $subject = "Нажата кнопка 'Узнать подробнее'"; 
 }
 if ( isset($_POST["submitRating"]) ) {
 $subject = "Заказана оценка сайта"; 
 }
 if ( isset($_POST["submitBrif"]) ) {
 $subject = "Заполнен бриф для рассчёта стоимости"; 
 }

function adopt($text) {
 return '=?UTF-8?B?'.base64_encode($text).'?=';
 }

$message = '<html><body>';
 $message .= "<table>";
 if (!empty($name)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Имя: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "$name";
 $message .= "</td>";
 $message .= "</tr>";
 }
 if (!empty($email)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> E-mail: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "$email";
 $message .= "</td>";
 $message .= "</tr>";
 }
 if (!empty($phone)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Телефон: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "$phone";
 $message .= "</td>";
 $message .= "</tr>";
 }
  if (!empty($order)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Заказ на: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "$order";
 $message .= "</td>";
 $message .= "</tr>";
 }
if (!empty($checkone)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Услуги дизайнера: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "Требуются";
 $message .= "</td>";
 $message .= "</tr>";
}
if (!empty($checktwo)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Услуги рекламы: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "Требуются";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbrifone)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Отмечено, что есть готовый дизайн </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbriftwo)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Отмечено, что нет готового дизайна </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbrifthree)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Отмечено, что требуется SEO-продвижение </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
if (!empty($checkbriffour)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Отмечено, что не требуется SEO-продвижение </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbriffive)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Также необходим адаптив </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbrifsix)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Адаптив не требуется </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbrifseven)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Контент для сайта готов </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}
 if (!empty($checkbrifeight)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Нет готового контента </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "</td>";
 $message .= "</tr>";
}

 if (!empty($text)) {
 $message .= "<tr>";
 $message .= "<td>";
 $message .= "<strong> Сообщение: </strong>";
 $message .= "</td>";
 $message .= "<td style='padding-left:12px;'>";
 $message .= "$text";
 $message .= "</td>";
 $message .= "</tr>";
 }
 
 $message .= "</table><br><br>";
 $message .= '</body></html>';
 $headers = "MIME-Version: 1.0" . PHP_EOL .
 "Content-Type: text/html; charset=utf-8" . PHP_EOL .
 'From: '.adopt($name).' <'.$fromEmail.'>' . PHP_EOL .
 'Reply-To: '.adopt($name).' <'.$email.'> ' . PHP_EOL;

if (mail($to, adopt($subject), $message, $headers)) {
 $answer = '1';
 } else {
 $answer = '0';
 }
 die($answer); 
} ?>