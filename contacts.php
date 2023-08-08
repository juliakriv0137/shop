<?php
        include 'header.php';
    ?>
  

  <!-- ********************** --> 
  <!--     I N T R O          -->
  <!-- ********************** --> 

  <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
          <a href="index.php">Главня</a>
          &gt;
          <a href="">Наши контакты</a>
        </div>
        <h1>Наши контакты</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 

  
 
  <div id="content" class="container_16">
  
    <div id="contacts" class="s_info_page grid_12">
     	
      <h2><span class="s_secondary_color">Наш</span> адрес</h2>
      
      <p class="alpha grid_4"><strong>Магазин экологических товаров "ЗДОРОВО"</strong><br /> Ботаническая 15</p>
      <p class="grid_4"><strong>Телефон:</strong><br /> +375445437143</p>
      <p class="omega grid_4"><strong>Fax:</strong><br /> +375445437143</p>

      <br />
      <span class="clear border_ddd"></span>
      <br />
    
    <html>
	
	<?php
//Если форма отправлена
if(isset($_POST['submit'])) {

	//Проверка Поля ИМЯ
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Проверка правильности ввода EMAIL
	$email = "MyEmail@mysite.ru";
if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
   echo "Адрес указан корректно.";
}else{
   echo "Адрес указан не правильно.";
}

	//Проверка наличия ТЕКСТА сообщения
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'name@yourdomain.com'; //Сюда введите Ваш email
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>


<head>
	

<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.validate.pack.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#contactform").validate();
});
</script>

</head>


<body>
<div id="contact-wrapper">

	<?php if(isset($hasError)) { //Если найдены ошибки ?>
		<p class="error">Проверьте, пожалуйста, правильность заполения всех полей.</p>
	<?php } ?>

	<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
		<p><strong>Email успешно отправлен!</strong></p>
		<p>Спасибо  <strong><?php echo $name;?></strong> за использование контактной формы! Ваш email был отправлен и я свяжусь с Вами в кратчайшие сроки.</p>
	<?php } ?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
		<div>
		    <label for="name"><strong>Имя:</strong></label>
			<input type="text" size="40" name="contactname" id="contactname" value="" class="required" />
		</div>

		<div>
			<label for="email"><strong>Email:</strong></label>
			<input type="text" size="40" name="email" id="email" value="" class="required email" />
		</div>

		<div>
			<label for="message"><strong>Сообщение:</strong></label>
			<textarea rows="5" cols="40" name="message" id="message" class="required"></textarea>
		</div>
	    <input type="submit" value="Отправить" name="submit" />
	</form>






 
		 
		

    </div>
    
   
    
    <div class="clear"></div>
   
  </div>
  <!-- end of content -->
  
  
  <?php
        include 'footer.php';
    ?>

</body>
</html>
