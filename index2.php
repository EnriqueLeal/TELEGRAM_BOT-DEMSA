<?php
// require 'vendor/autoload.php';

// $ffmpeg = \FFMpeg\FFMpeg::create([
//     'ffmpeg.binaries'  => 'C:\xampp\htdocs\prueba\vendor\bin\bin\ffmpeg.exe',
//     'ffprobe.binaries' => 'C:\xampp\htdocs\prueba\vendor\bin\bin\ffprobe.exe'
// ]);
echo exec("ffmpeg -r 1/5 -i C:\Users\kiike\OneDrive\Escritorio\imagen2.jpg  C:\Users\kiike\OneDrive\Escritorio\imagen.jpg C:\Users\kiike\OneDrive\Escritorio\prueba.avi /Y");
if (file_exists("C:\Users\kiike\OneDrive\Escritorio\prueba.avi")) {
	echo "CREADO";
	// code...
}
else{
echo "NO CREADO";
}
?>

<!DOCTYPE html>
<link rel="stylesheet" href="https://api.telegram.org/bot7345345735:agADFsfjdfhSGTYJdfafhksdsdrQ/getUpdates">
<html>
<head>
    <meta charset="utf-8">
    <title>FFMPEG</title>
</head>
<body>
    <h1>Convert to WAV</h1>

    <hr>

    <form class="form-horizontal" action="Form.php" method="POST">
        <div class="form-group">
            <input type="file" name="audio_file" id="audio_file">

        </div>
        <button type="submit" name="button">Submit</button>
    </form>
</body>
</html>

<form action="" method="post">
    <input type="text" name="message">
    <input type="submit" name="submit">
</form>
<?php
    if(isset($_POST['submit']))
    {
        $apiToken = "******";
        $data = [
            'chat_id' => '@*****',
            'text' => $_POST['message']
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }
?>
<?php

// Telegram function which you can call
// function telegram($msg) {
//         global $telegrambot,$telegramchatid;
//         $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
//         $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
//         $context=stream_context_create($options);
//         $result=file_get_contents($url,false,$context);
//         return $result;
// }

// // Set your Bot ID and Chat ID.
// $telegrambot='7345345735:agADFsfjdfhSGTYJdfafhksdsdrQ';
// $telegramchatid=374659345;

// // Function call with your own text or variable
// telegram ("Here is your message!!");
?>