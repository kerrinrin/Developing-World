<?php
$key = $_REQUEST['Digits'];

header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

if($key == 1){ 
    echo "<Response>";
    echo "<Play>http://www.kerrinrose.com/images/audio/Date.wav</Play>";
     echo "<Redirect method=\"POST\">http://www.tcnj.edu/~mclaugk3/voice-record/hack.xml</Redirect>";
    echo "</Response>";
    
} else if($key == 2) { 
    echo "<Response>";
    echo "<Play>http://www.kerrinrose.com/images/audio/Overview.wav</Play>";
     echo "<Redirect method=\"POST\">http://www.tcnj.edu/~mclaugk3/voice-record/hack.xml</Redirect>";
    echo "</Response>";
    
    
}


else if($key == 3) { 
    echo "<Response>";
    echo "<Play>http://www.kerrinrose.com/images/audio/Sponsors.wav</Play>";
     echo "<Redirect method=\"POST\">http://www.tcnj.edu/~mclaugk3/voice-record/hack.xml</Redirect>";
    echo "</Response>";
  
    
    
}

else if($key == 4) { 
    echo "<Response>";
    echo "<Play>http://www.kerrinrose.com/images/audio/LeaveAMessage.wav</Play>";
    echo "  <Record 
      action=\"http://www.tcnj.edu/~mclaugk3/voice-record/record-hack.php\"
      method=\"GET\"
      maxLength=\"20\"
      finishOnKey=\"*\"
   />";
     echo "<Redirect method=\"POST\">http://www.tcnj.edu/~mclaugk3/voice-record/hack.xml</Redirect>";
    echo "</Response>";
    
    
}


else { // other
    echo "<Response>";
    echo "<Say>Sorry, I didn't understand your selection. Please try again.</Say>"; 
    echo "<Redirect method=\"POST\">http://www.tcnj.edu/~mclaugk3/voice-record/hack.xml</Redirect>";
    echo "</Response>";
    
    
    
}

?>