<html>
    <head>
        <title>sample</title>
    </head>
    <body>

        <form action="{{ url('sample/upload') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <input type="file" name="a" >
            <input type="submit" >
        </form>
    {{ $result }}
    </body>
</html>
