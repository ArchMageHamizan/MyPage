<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>accessories List</title>
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
                               
                                <th><div>ID</div></th>
                                <th><div>ACCESSORIES</div></th>
                                <th><div>ACTION</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($accList as $acc)                
                            <tr>
                               
                                <td data-title="ID"><div>{{$acc->id}}</div></td>
                                <td data-title="GAMES"><div>{{$acc->names}}</div></td>
                                <td data-title="ACTION">
                                    <div>
                                        <a href="{{'delete/'.$acc->id}}">Delete</a>
                                        <a href="{{'updateGame/'.$acc->id}}">Update</a>
                                    </div>                                    
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
               
                    <a href='/home'>home</a>
            </div>
     </body>
</html>