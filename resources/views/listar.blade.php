<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <style>
            a:link{text-decoration:none;}
            a:hover{color:#000000;}

            .pokediv {
                background-color: white;
                width: 150px;
                margin: 15px;
                text-align: center;
                border-radius: 10px;
            }

            .container {
                display: flex;
                flex-wrap :wrap;
            }
                    
        </style>
    </head>
    <body style="background-color:#3399ff;">
        <div class="container">
                @foreach ($pokemons as $poke)
                <div class="pokediv">
                    <a href="detalhespoke/{{$poke->nome}}">
                        <div>
                            <img width="150px" height="150px" src="{{$poke->fotoUrl}}" ></img>
                            {{$poke->nome}}
                        </div>          
                    </a>
                </div>
                @endforeach
        </div>
    </body>
</html>
