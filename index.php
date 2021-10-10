<?php
$token = 'AAFMxnUy5ehvmRHDl0_xBsRQ4LYZT9MvRU4';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = '8977777';
$message = 'TEXTO';

switch($message) {
    case '/start':
        $response = 'Me has iniciado';
        sendMessage($chatId, $response);
        break;
    case '/info':
        $response = 'Hola!';
        sendMessage($chatId, $response);
        break;
    default:
        $response = 'No te he entendido';
        sendMessage($chatId, $response);
        break;
}

function sendMessage($chatId, $response) {
    $url = 'https://api.telegram.org/'.'bot2058873589:AAFMxnUy5ehvmRHDl0_xBsRQ4LYZT9MvRU4/sendMessage?chat_id=@DemsaBot&parse_mode=HTML&text='.urlencode($response);
    // file_get_contents($url);
    echo $url;
}
?>
<script>
function PRUEBA()
{
window.location('www.google.com');
}
</script>
<!-- https://api.telegram.org/bot4334584910:AAEPmjlh84N62Lv/getUpdates
..."chat":{"id":8977777,"enrique":"leal","type":"private"}... -->