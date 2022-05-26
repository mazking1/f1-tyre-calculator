<?php include 'functions.php'; error_reporting(0); ?>
<html>
<head> 
    <link rel="stylesheet" href="f1.css"> 
    <link rel="php">
</head>

<body>
    <div class = "Content">
    <p class = "welcome">Formula 1 Calculator</p>
        <div class = "text_boxes">
        <form method ="post">
            <input type="text" name="num1" placeholder="E.G. 1">
            <input type="text" name="num2" placeholder="E.G. 1">
            <select name="select">
                <option class="dropdown">
                    <?php
                        // A sample array
                        $laptype = array("fast", "med", "slow");

                        $keys = array_keys($laptype);
                        $value=$keys[array_search('select',$keys)+1];

                        // This is what creates the dropdown box
                        foreach($laptype as $item){
                            echo "<option value='$item'>$item</option>";
                        }
                    ?>
                </option>
            </select>
            <br/>
            <div class = "selection">
                <button type="submit" name="submit" value="submit">Calculate</button>
                <button type="submit" name="clear" value="Clear">Clear</button>
            </div>
        </form>

        <div class = "Result">
        <?php
            //call function
            calculate();
        ?>
            
        </div></div>
    </div>
</body>
</html>
