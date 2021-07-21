<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Create Token</title>
</head>

<body>
    <div class="bg-light container p-5">
        <h3>Token</h3>
        <table class="table table-bordered">
            <tr class="bg-warning">
                <th>id</th>
                <th>token</th>
                <th>tanggal dibuat</th>
            </tr>
            @foreach($tokens as $token)

            <tr>
                <td>{{$token->id}}</td>
                <td>{{$token->token}}</td>
                <td>{{$token->created_at}}</td>
            </tr>
            @endforeach

        </table>
        <form class="float-right" action="api/token/create" id="add" method="POST">
            <input class="btn btn-primary " type="submit" value="Add Token">
        </form>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>