<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
</head>
<body>
안녕하세요
<?	
echo $_POST["id"];
?>님, <br>
비번은
<?	
echo $_POST["pwd"];
?><br>
메일수신여부는
<?	
echo $_POST["receive"];
?><br>
관심분야는
<?	
echo $_POST["ch1"];
?>
<?	
echo $_POST["ch2"];
?>
<?	
echo $_POST["ch3"];
?><br>
입니다.
</body>
</html>