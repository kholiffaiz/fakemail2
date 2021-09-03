<?php

session_start();

if ($_POST['Submit'] == 'Send')

{

if (strcmp(md5($_POST['user_code']),$_SESSION['ckey']))

    {

header("Location: sendmail.php?msg=ERROR: Invalid Verification Code");

exit();

  }

 

$to = $_POST['toemail'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$fromemail = $_POST['fromemail'];

$fromname = $_POST['fromname'];

$lt= '<';

$gt= '>';

$sp= ' ';

$from= 'From:';

$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;

mail($to,$subject,$message,$headers);

header("Location: sendmail.php?msg= Mail Sent!");

exit();

}

?>

<html>

<head>

<title>Email Pranks</title>

<style type="text/css">

<!--

.style1 {color: #00FF00}

-->

</style>

</head>

<body bgcolor="#ffffff">

<h2 align="center"><blink>

<span >Aplikasi ini dibangun hanya untuk keperluan pembelajaran di <a href="http://pusdiklat.lemsaneg.go.id">Pusdiklat </a> </span></blink><br/>



</h2>

<h3 align="center">

Mohon jangan disalah gunakan. Gunakan hanya untuk pembelajaran.</h3>

<br>

<center>

<p style="margin-left:15px">

<form action="sendmail.php" method="POST">

  <p><b>From Name:</b><br>

      <input type="text" name="fromname" size="74">

    <br>

      <br>

    <b>From Email:</b><br>

      <input type="text" name="fromemail" size="74">

    <br>

      <br>

    <b>To Email:</b><br>

      <input type="text" name="toemail" size="74">

    <br>

      <span><br>

      <b>Subject:</b></span><br>

      <input type="text" name="subject" size="74">

    <br>

      <span><br>

      <b>Your Message:</b></span><br>

      <textarea name="message" rows="5" cols="74">

    </textarea>

    <br>

      <span><br>

      <b>Verification Code:</b></span><br>

      <input name="user_code" type="text" size="25">

      <img src="pngimg.php" align="middle"><br>

    <br>

      <input type="submit" name="Submit" value="Send">

      <input type="reset" value="Reset">

</p>

<marquee>

  <p>Aplikasi ini hanya untuk peningkatan kesadaran keamanan serta pendidikan dan pelatihan keamanan teknologi informasi</p></marquee>

</form>

</p>

</center>

<?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>

<h3 align="center">

Hey Jangan Gunakan Untuk Spam yaa :)

</h3>

</body>

</html>