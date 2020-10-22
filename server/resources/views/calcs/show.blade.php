<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($operator == 'addition')
        {{$num1}} + {{$num2}} = {{$num1 + $num2}}
    @elseif ($operator == 'subtraction')
        {{$num1}} - {{$num2}} = {{$num1 - $num2}}
    @elseif ($operator == 'multiplication')
        {{$num1}} * {{$num2}} = {{$num1 * $num2}}
    @elseif ($operator == 'division')
        {{$num1}} / {{$num2}} = {{$num1 / $num2}}
    @endif
</body>
</html>