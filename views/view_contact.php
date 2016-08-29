<h2>Наши контакты</h2>
<p><img src="/images/con_address.png" alt="Адрес: " />&nbsp;Республика Казахстан
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Зерендинский район
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Акмолинская область
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;с. Раздольное
<p><img src="/images/con_tel.png" alt="Телефон: " />&nbsp;8 716 32 33 7 64
<p><img src="/images/con_fax.png" alt="Факс: " />&nbsp;8 716 32 33 7 56<br>

<a href="https://yandex.ru/maps/?um=constructor:9-HFBKC-2aaekzhG8T5DTCXNIoNMZuYX&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?sid=9-HFBKC-2aaekzhG8T5DTCXNIoNMZuYX&amp;width=420&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor" alt="" style="border: 0;" /></a>

<br><br><p><h3>Форма обратной связи</h3>
	<?=$msg; // вывод сообщений ?>

	<form action="" method="post" name="frm_feedback">
		<label>Ваше имя:</label><br/>
		<input type="text" name="user_name" style="width:410px;" value="<?=(isset($_POST['user_name'])) ? $_POST['user_name'] : ""; // сохраняем то, что вводили?>" /><br/>
		
		<label>Ваш e-mail:</label><br/>
		<input type="text" name="user_email" style="width:410px;" value="<?=(isset($_POST['user_email'])) ? $_POST['user_email'] : ""; // сохраняем то, что вводили?>" /><br/>
		
		<label>Текст сообщения:</label><br/>
		<textarea name="text_comment" style="width:410px; height:140px;" cols="80"><?=(isset($_POST['text_comment'])) ? $_POST['text_comment'] : ""; // сохраняем то, что вводили?></textarea>
		
		<br/>
		<input type="submit" value="Отправить" name="btn_submit" />
	</form>
