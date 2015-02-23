<?php
    header('Content-type: text/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';  
  
    // collect the selection number
    $selection = (int) $_REQUEST['Digits'];

    // collect the cller's phone number
    $from = $_REQUEST["From"];

    // get the exact time of the response
    $t = time();

    // set the timezone
    date_default_timezone_set('America/New_York');

    // open a file ponter to write our data
    $fp = fopen("data_ticah.txt", "a");
   
    echo '<Response>';
 
    switch($selection){
        case 1:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ', Natural medicine,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose Natural Medicine. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>
            ";
        break;
        
        case 2:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ', nutritious food recipes,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose nutritious food recipes. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>";
        break;
        
        case 3:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',HIV Health info,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose H I V health information. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>";
        break;
    
        case 4:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ', sexual rights and sexual health,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose sexual rights and sexual health. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>";
        break;
    
        case 5:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',community arts and activisim,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose community arts and activisim. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>";
        break;
    
        case 6:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',childrens well being,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose childrens well being. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>";
        break;
    
        case 7:
            // write the callers phone number, selection, a timestamp of the record & respond
            fwrite($fp, $from . ',gender equity,' . date("c", $t) . "\n");
            echo "<Say>Thanks for your response. You chose gender equity. On to the next question!</Say><Redirect>./poll_ticah2.xml</Redirect>";
        break;
    
   
        case 8:
            echo "<Say>O K. Redirecting back to the choices.</Say><Redirect>./poll_ticah.xml</Redirect>";
        break;        
    
        default:
            echo "<Say>I didn't understand your selection.</Say><Redirect>./poll_ticah.xml</Redirect>";
        break;
    }
  
    // close out file pointer
    fclose($fp);
 
    echo '</Response>';
?>