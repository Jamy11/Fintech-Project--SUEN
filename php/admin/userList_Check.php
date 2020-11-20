<?php

    function checkUser()
    {
        $myfile = fopen('C:\xampp\htdocs\SUEN\php\user.txt', 'r');
        //$data = fread($myfile, filesize('test.txt'));
        //$data = fgets($myfile);
        // /echo $data;
        echo '<table border=1px>';
        while($data = fgets($myfile))
        {
            $checkData = explode(" ",$data);
            //echo '<td>'.$data .'</td>';
            echo '<tr>';
            for($i=0;$i<7;$i++)
            {
                echo '<td>'.$checkData[$i] .'</td>';
                //echo $data;
                
            }
            echo '</tr>';

            
        }
        echo '</table>';
    }

?>