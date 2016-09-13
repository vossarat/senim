<?php
class model_contact extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function sendletter()
    {
    	echo "Письмо отправлено";
        $message = "Имя пользователя: " . $_POST['user_name'] . "<br/>";
        $message .= "E-mail пользователя: " . $_POST['user_email'] . "<br/>";
        $message .= "Текст письма: " . $_POST['text_letter'];

        // почта, на которую придет письмо
        $mail_to = "d.tarassov@akmzdrav.kz";
        // тема письма
        $subject = "Письмо от обратной связи";

        // заголовок письма
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From:<no-reply@akmzdrav.kz>\r\n"; // от кого письмо

        // отправляем письмо
        mail($mail_to, $subject, $message, $headers);        
    }


}
?>