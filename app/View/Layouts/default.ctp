<!doctype html>
<?php

// function to calculate and return result
function calculate($x, $y, $op) { 
    // calculate $prod using switch (case) statement
    switch($op) {
        case '+':
            $prod = $x + $y;
            break;
        case '-':
            $prod = $x - $y;
            break;
        case '*':
            $prod = $x * $y;
            break;
        case '/':
            if ($y == 0) {$prod = "&#8734";}
            else {$prod = $x / $y;}
    }
    // return the result
    return $prod;
}
// declare all variables
$x = 0;
$y = 0;
$prod = 0;
$op = '';
// grab the form values from $_GET hash
extract($_GET);
?>

<html>
    <head>
       <title>PHP Calculator Example: Version 2</title>
    </head>

    <body>

        <h3>PHP Calculator (Version 2)</h3>
      
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
        op = 
            <select name="op">
                <option value="+" <?php if ($op=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op=='/') echo 'selected="selected"';?>>/</option>
            </select>
        y =  <input type="text" name="y" size="5" value="<?php  print $y; ?>"/>
        <input type="submit" name="calc" value="Calculate"/>
        </form>

    <?php
        if(isset($calc)) {
            // check that $x & $y are numeric
            
            if (is_numeric($x) && is_numeric($y)) {	
                // call the caculate function and pass $x, $y & $op as args.
                $prod = calculate($x, $y, $op);
				
                // print the result 
                echo "<p>$x $op $y = $prod</p>";
            }
            else {
                // unaccepatable values
                echo "<p>x and y values are required to be numeric ... 
                         please re-enter values</p>";
            }
        }
    ?>
    <hr height="2px" align="left" width="340px" />
    <p>See code: <a href="calculator_v2.phps">calculator_v2.phps</a></p>
    <p>Notes:<br/>
	    <h3> Andreea Neaga </h3>
  </body>
</html>
