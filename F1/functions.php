<?php
//So this needs careful explanation
function calculate(){
        if(isset($_POST['submit'])){
        if(!empty($_POST['select'])) {                  //IF the dropdown isn't empty
            $selected = $_POST['select'];               //set selected option as variable
            //echo $selected, '.'; -old test shit-
            if ($selected == 'fast'){                   //check is selected option is fast, med, or slow
                $num3 = 1;                              //and set num 3 to 1,2,3 depending on what was chosen
            }
            if ($selected == 'med'){
                $num3 = 2;
            }
            if ($selected == 'slow'){
                $num3 = 3;
            }
            $num1=$_POST[num1];                         //get other inputs, look how much easier that shit is man
            $num2=$_POST[num2];
            echo 'Your answer is:',$num1+$num2+$num3, '.'; //pray
            } else {
                echo 'Please select.';
        }
    }
}

?>