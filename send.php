<?php

if(isset($_POST['submit'])){
    $to = "glazkov.hanter11@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $tel = $_POST['tel'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "ФИО:".$first_name. ". E-mail: ".$from. ". Tel: ".$tel.  ", мы скоро свяжемся с Вами.";
    echo "<br /><br /><a href=''>Вернуться на сайт.</a>";

}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="https://www.google.com.ua/?hl=ru");}
    window.setTimeout("changeurl();",3000);
</script>