<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        if ($operator == 'addition') {
            $add = $num1 + $num2;
            echo $num1 . ' + ' . $num2 . ' = ' . $add;
        }
        elseif ($operator == 'subtraction') {
            $sub = $num1 - $num2;
            echo $num1 . ' - ' . $num2 . ' = ' . $sub;
        }
        elseif ($operator == 'multiplication') {
            $mul = $num1 * $num2;
            echo $num1 . ' * ' . $num2 . ' = ' . $mul;
        }
        elseif ($operator == 'division') {
            $div = $num1 / $num2;
            echo $num1 . ' / ' . $num2 . ' = ' . $div;
        }
    @endphp
</body>
</html>