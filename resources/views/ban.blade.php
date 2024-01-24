<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Ban List</title>
        <link rel="stylesheet" href="{{asset('css/ban/layout/layout.css')}}">
    </head>
    <body>
            <!-- <h1>Ban List</h1> -->
            <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PROFILE PHOTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)                
                            <tr>
                                <td data-title="ID">{{$data['id']}}</td>
                                <td data-title="NAME">{{$data['first_name']}}</td>
                                <td data-title="EMAIL">{{$data['email']}}</td>
                                <td data-title="PROFILE PHOTO">
                                    <div class="image">
                                        <img src="{{$data['avatar']}}"/>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
     </body>
</html>