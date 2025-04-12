<?php
	$path = "./";
	$page = 'Order Reciept';
	include $path."assets/inc/header.php";
?>

<h2>Your Pizza Order</h2>

<?php
    $cName = $_POST['customerName'];
    $cID = $_POST['customerID'];
    $pSize = $_POST['pizzaSize'];
    $toppings = $_POST['toppings']; // get the toppings in the same way
    if (empty($cID)) {
        header('Location: orderform.php?name=' . $cName);
    }
    else {
        if (!is_numeric($cID)) {
            echo '<p>Customer ID ' . $cID . ' is not a valid ID ' . ' because it contains ' . ' a non-numeric character.</p>';
            echo '<p><form action="orderform.php">' . '<input type="hidden" name="name" value="' . $cName . '"/><input type="submit" value="ok"/></form></p>';
        }
        else {
            switch ($pSize) {
                case 'P':
                    $pizzaType = 'Personal';
                    $pizzaCost = 7.99;
                    break;
                case 'S':
                    $pizzaType = 'Small';
                    $pizzaCost = 10.99;
                    break;
                case 'M':
                    $pizzaType = 'Medium';
                    $pizzaCost = 13.99;
                    break;
                case 'L':
                    $pizzaType = 'Large';
                    $pizzaCost = 16.99;
                    break;
                default:
                    $pizzaType = 'Medium';
                    $pizzaCost = 13.99;
            }
            // switch statement for toppings
            switch ($toppings) {
                case '0':
                    break;
                case '1':
                    $toppingCost = 2.00; // criminal
                    break;
                case '2':
                    $toppingCost = 3.00; // felon
                    break;
                case '3':
                    $toppingCost = 3.75; // repeat offender
                    break;
                default:
                    $toppingCost = 0.00; // no toppings
            }
        }
    }
    $taxAmount = $pizzaCost + $toppingCost * 0.08;
    $totalCost = $pizzaCost + $taxAmount;

    $fmt = numfmt_create( 'en_US', NumberFormatter::CURRENCY );
?>
<div id='receipt'>
    <br/> Your delicious Pizza Order!!
    <br/>
    <br/> Pizza Price:
    <?php
        echo numfmt_format_currency($fmt, $pizzaCost, 'USD');
        echo "<br>Pizza Cost" . numfmt_format_currency($fmt, $pizzaCost, 'USD');
        echo "<br>Topping Cost: " . numfmt_format_currency($fmt, $toppingCost, 'USD');
        echo "<br>Tax Amount: " . numfmt_format_currency($fmt, $taxAmount, 'USD');
        echo "<br>Total Cost: " . numfmt_format_currency($fmt, $totalCost, 'USD');
        echo "<br><br>Thank you for your order";
        echo ($cName == "")? ".": ", $cName.";
        echo "</div>";
    ?>
</div>

<?php
	include $path."assets/inc/footer.php";
?>