<!DOCTYPE html>
<html>
<head>

</head>

<body>

<form>
    <input type="text" name="num1" placeholder="E.G. 1">
    <input type="text" name="num2" placeholder="E.G. 1">
    <select name="operator">
        <option selected disabled>Select A lap type</option>
        <option value="3">fast</option>
        <option value="2">medium</option>
        <option value="1">slow</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
    <button type="submit" name="clear" value="Clear">Clear</button>
</form>
<p>the answer is %</p>
<?php
    if (isset($_GET['submit'])) {
        $result1 =$_GET['num1'];
        $result2 =$_GET['num2'];
        $operator =$_GET['operator'];
        switch ($operator){
            case "fast":
                echo $result1 + $result2 + 3;
                break;

            case "medium":
                echo $result1 + $result2 + 2;
                break;

            case "slow":
                echo $result1 + $result2 + 1;
                break;

        }
    }
?>

</body>

</html>
