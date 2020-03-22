<html>
 <head>
  <meta charset="utf-8">
  <title>Форма отправки</title>
  <link rel="stylesheet" href="css/style.css">  
 </head>
 <body>
<?php
    include_once('functions/func.php');
    include_once('functions/b24lead.php');
    if(isset($_GET['cmd']) && $_GET['cmd'] === 'send-form'){
      add_lead(array(
  			'TITLE' => 'Форма с сайта',
  			'NAME' => $_GET['name'].' '.$_GET['surname'],
  			'EMAIL_WORK' => $_GET['email'],
  			'COMMENTS' => $_GET['comment']
  			));
    }
?>
<br><a href="form.html">Назад</a>
</body>
</html>
