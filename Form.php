<?php
    date_default_timezone_set('America/Los_Angeles');
    require __DIR__ . '/vendor/autoload.php';
    // include 'ConverterClass.php';
    $input = $_POST['audio_file'];
    // echo $input;
    // probeAudioFile($input);

    $ffmpeg = FFMpeg\FFMpeg::create(array(
    'ffmpeg.binaries'  => 'C:\xampp\htdocs\prueba\vendor\bin\bin\ffmpeg.exe',
    'ffprobe.binaries' => 'C:\xampp\htdocs\prueba\vendor\bin\bin\ffprobe.exe',
'timeout' => 3600, // The timeout for the underlying process
'ffmpeg.threads' => 12, // The number of threads that FFMpeg should use
));

    // $video = $ffmpeg->open('video.mpg');
    // $video
    //     ->filters()
    //     ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
    //     ->synchronize();
    // $video
    //     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
    //     ->save('frame.jpg');
    // $video
    //     ->save(new FFMpeg\Format\Video\X264(), 'export-x264.mp4')
    //     ->save(new FFMpeg\Format\Video\WMV(), 'export-wmv.wmv')
    //     ->save(new FFMpeg\Format\Video\WebM(), 'export-webm.webm');

    // function convertAudioFile($input) {
    //     echo $output;
    //     $file_path = dirname(__FILE__) . "/audio_files/" . $input;
    //     $ffmpeg = FFMpeg\FFMpeg::create();
    //     $audio = $ffmpeg->open($file_path);
    //     $format = new FFMpeg\Format\Audio\Wav();
    //     $format->on('progress', function ($audio, $format, $percentage) {
    //         echo "$percentage % transcoded";
    //     });
    //     $format->setAudioChannels(2);
    //     $audio->filters()->resample(96000);
    //     $audio->save($format, 'Output_file2.wav');
    // }

    // $audio_file = $_POST["audio_file"];

    // $probe_input = probeAudioFile($audio_file);

    // echo $probe_input;

    // if ($probe_input[0] == "wav" && $probe_input[1] == 2 && $probe_input[2] == 24 && $probe_input[3] == 96000) {
    //     print_r("Nothing to do here.");
    // } else {
    //     $converted_file = convertAudioFile($audio_file);
    // }
    //     $probe_output = probeAudioFile($converted_file);
?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Result</title>
    </head>
    <body>
        <h4>Input File Info</h4>
        <hr>
        <ul>
            <li>Format: <?php echo $probe_input[0] ?></li>
            <li>Channels: <?php echo $probe_input[1] ?></li>
            <li>Bits: <?php echo $probe_input[2] ?></li>
            <li>Sample Rate: <?php echo $probe_input[3] ?></li>
        </ul>
        <hr>
        <h4>Output File Info</h4>
        <ul>
            <li>Format: <?php echo $probe_output[0] ?></li>
            <li>Channels: <?php echo $probe_output[1] ?></li>
            <li>Bits: <?php echo $probe_output[2] ?></li>
            <li>Sample Rate: <?php echo $probe_output[3] ?></li>
        </ul>
        <hr>
        <h4>Format:</h4>
        <p><?php print_r(FFMpeg\FFProbe::create()->format($audio_file)); ?></p>
        <hr>
        <h4>Streams:</h4>
        <p><?php print_r(FFMpeg\FFProbe::create()->streams($audio_file)); ?></p>

    </body>
</html> -->
