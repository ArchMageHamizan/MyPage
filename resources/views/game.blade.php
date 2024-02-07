<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Ban List</title>
        <!-- <link rel="stylesheet" href="{{asset('css/game/layout/layout.css')}}"> -->
    </head>
    <style>
        .w-5{display:none;}
    </style>
    <body>
            <!-- <h1>Ban List</h1> -->
            <div class="container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>GAMES</th>
                                <th>RELEASED</th>
                                <th>STAR</th>
                                <th>CATEGORY</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gameList as $game)                
                            <tr>
                                <td data-title="ID">{{$game['id']}}</td>
                                <td data-title="GAMES">{{$game['names']}}</td>
                                <td data-title="RELEASED">{{$game['date']}}</td>
                                <td data-title="STAR">{{$game['star']}}</td>
                                <td data-title="CATEGORY_ID">{{$game['category_id']}}</td>
                                <td >
                                    <a href="{{'delete/'.$game['id']}}">Delete</a>
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$gameList->links()}}
                    </div>
                    <a href='/home'>home</a>
            </div>
     </body>
</html>