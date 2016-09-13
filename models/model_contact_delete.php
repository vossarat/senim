<?php
class model_contact extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->msg = ""; // в этой переменной будем хранить сообщения формы

        if(isset($_POST['btn_submit'])) 
        {
            $errors = array(); // контейнер для ошибок
            // проверяем корректность полей
            if ($_POST['user_name'] == "") $errors[] = "Поле 'Ваше имя' не заполнено!";
            if ($_POST['user_email'] == "") $errors[] = "Поле 'Ваш e-mail' не заполнено!";
            if ($_POST['text_comment'] == "") $errors[] = "Поле 'Текст сообщения' не заполнено!";

            // если форма без ошибок
            if (empty($errors)) {
                // собираем данные из формы
                $message = "Имя пользователя: " . $_POST['user_name'] . "<br/>";
                $message .= "E-mail пользователя: " . $_POST['user_email'] . "<br/>";
                $message .= "Текст письма: " . $_POST['text_comment'];
                $this->send_mail($message); // отправим письмо
                // выведем сообщение об успехе
                $this->msg = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
				$_POST = array();
            }else {
                // если были ошибки, то выводим их
                $this->msg = "";
                foreach ($errors as $one_error) {
                    $this->msg .= "<span style='color: red;'>$one_error</span><br/>";
                }
            }
        }
        return $this->msg;
    }

    // функция отправки письма
    function send_mail($message = "Сообщение от обратной связи")
    {
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