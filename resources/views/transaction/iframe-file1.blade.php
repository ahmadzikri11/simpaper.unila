<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($transaction as $transaction)
    @endforeach
    <iframe class="embed-responsive-item" src="/storage/{{ $transaction->file1 }}" frameborder="0"></iframe>

</body>

</html>
