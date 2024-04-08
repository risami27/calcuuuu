<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Calculator</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <select name="operator" required>
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <input type="submit" name="calculate" value="Calculate">
        </form>
        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            $result = '';

            switch ($operator) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $result = 'Cannot divide by zero';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = 'Invalid operator';
                    break;
            }

            echo '<div class="result">Result: ' . $result . '</div>';
        }
        ?>
    </div>
</body>
</html>