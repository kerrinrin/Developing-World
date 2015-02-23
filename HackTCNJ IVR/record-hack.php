<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

$recording = $_REQUEST['RecordingUrl'];

?>


<Response>
    <Say> Thanks, here's the message you left.</Say>
    <Play><?php echo $recording; ?></Play>
</Response>
