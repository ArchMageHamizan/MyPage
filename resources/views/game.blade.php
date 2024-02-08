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
       
        table td > div,
        table th > div {
        margin-left: 20px;
       }

       table td{
        text-align:center;
       }
       table td[data-title="ACTION"] {
        text-align: center !important;
          }
    </style>
    <body>
            <!-- <h1>Ban List</h1> -->
            <div class="container">
                    <table>
                        <thead>    
                            <tr>                     
                                <th><div>NUM</div></th>
                                <th><div>ID</div></th>
                                <th><div>GAMES</div></th>
                                <th><div>RELEASED</div></th>
                                <th><div>STAR</div></th>
                                <th><div>CATEGORY</div></th>
                                <th><div>ACTION</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gameList as $game)                
                            <tr>
                                <td data-title="NUM"><div>{{$loop->iteration+($gameList->currentPage()-1)*$gameList->perpage()}}</div></td>
                                <td data-title="ID"><div>{{$game['id']}}</div></td>
                                <td data-title="GAMES"><div>{{$game['names']}}</div></td>
                                <td data-title="RELEASED"><div>{{$game['date']}}</div></td>
                                <td data-title="STAR"><div>{{$game['star']}}</div></td>
                                <td data-title="CATEGORY_ID"><div>{{$game['category_id']}}</div></td>
                                <td data-title="ACTION">
                                    <div>
                                        <a href="{{'delete/'.$game['id']}}">Delete</a>
                                        <a href="{{'updateGame/'.$game['id']}}">Update</a>
                                    </div>                                    
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