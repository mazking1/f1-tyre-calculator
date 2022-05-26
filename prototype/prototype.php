<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: black;
        }
        input[type=text] {
            width: 10%;
            padding: 12px 20px;
            margin-top: 5%;
            border:solid red;
            box-sizing: border-box;
            color: red;
            resize: vertical
        }
        p {
            color: red;
        }
         .cars{
            float: right;
        }
        .ads{
            padding-top: 40ex;
            margin-left: 30ex;
            float: bottom;
        }
    </style>
</head>

<body>
<div class="f1_logo">
    <img src="F1_LGOG.png" alt="F1 FIA LOGO" width="150" height="100">
</div>


<form>
    <!the form for calculations>
    <!num 1 is tyre type>
    <input type="text" name="num1" placeholder="3 soft, 2 medium, 1 hard">
    <!rake>
    <input type="text" name="num2" placeholder=" 1 or 2">
    <!lap type>
    <input type="text" name="num3" placeholder="1 for push lap 0 for slow lap">
    <!TMP>
    <input type="text" name="num4" placeholder="1 high temp or 0 for low">
    <!track selector>
    <select name="operator">
        <option>TRACK 1</option>
        <option>TRACK 2</option>
    </select>
    <br>

    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<!a short hand to simplify everything>
<p>the answer is %</p>
<?php
//simple calcaulation
if (isset($_POST['submit'])) {
    $result1 = $_POST['num1'];
    $result2 = $_POST['num2'];
    $result3 = $_POST['num3'];
    $result4 = $_POST['num4'];
    $operator = $_POST['operator'];
    switch ($operator){
        case "TRACK 1":
            echo $result1 + $result2 + $result3 + $result4;
            break;

        case "TRACK 2":
            echo 1 + $result1 + $result2 + $result3 + $result4;
            break;

    }
}
?>

<div class="cars">
    <img src="cars.jpg" alt="F1 cars 2022" width="350" height="200">
</div>

<div class="ads">
    <img src="f1ADD1.jpg" width="350" height="200">
    <img src="skysports-f1.jpg" width="350" height="200">
</div>
</body>

</html>





