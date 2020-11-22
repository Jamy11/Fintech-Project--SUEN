<?php
 
    if(!defined('MyAdmin')) 
    {
        echo '<h1>';
       die('Direct access not permitted');
       echo '</h1>';
    }
   
    function checkAdmin()
    {
        $myfile = fopen('C:\xampp\htdocs\SUEN\php\admin\admin.txt', 'r');
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
                if($i == 2)
                {
                    $i = 3;
                }
                else
                {
                    echo '<td>'.$checkData[$i] .'</td>';
                }
                
                //echo $data;
                
            }
            echo '</tr>';

            
        }
        echo '</table>';
    }

?>