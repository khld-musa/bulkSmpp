<!-- resources/views/sms.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div>
        <h1>Send SMS</h1>
        <form method="GET" action="{{ route('send-sms') }}">
            @csrf
            <button type="submit">Send</button>
        </form>
    </div>


</body>
</html>

