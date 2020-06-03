<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 style="
    font-size: 30px;
    font-weight: 700;
    text-align: center;">Practical</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>bookid</th>
            <th>authorid</th>
            <th>title</th>
            <th>ISBN</th>
            <th>pub_year</th>
            <th>available</th>
        </tr>
        </thead>
        <tbody>
        @foreach($practical as $practical)
            <tr>
                <td>{{$practical->__get("bookid")}}</td>
                <td>{{$practical->__get("authorid")}}</td>
                <td>{{$practical->__get("title")}}</td>
                <td>{{$practical->__get("ISBN")}}</td>
                <td>{{$practical->__get("pub_year")}}</td>
                <td>{{$practical->__get("available")}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

