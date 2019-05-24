<?php
    $employees = array(Kelly, Tyler, Bracken, Robert, Emily, Eunice, Katelyn, Mitch, Michael, Reno, Khaila, Gabe);
        sort($employees);

        $employeelength = count($employees);
        for($x = 0; $x < $employeelength; $x++){
            echo $employees[$x]; echo "<br>";

        }

        ?>