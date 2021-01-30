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
                text-align: center;
                border-radius: 10px;
                width: 300px;
                height: 400px;
            }

            .container {
                display: flex;
                flex-wrap :wrap;
                height: 100vh;
                justify-content: center;
                align-items: center;
            }
                    
        </style>
    </head>
    <body style="background-color:#3399ff;">
    <div class="container">
        <div class="pokediv">
            <img src="{{$sprites['front_shiny']}}" ></img>
            <h1>Nome: {{$nomePokemon}}</h1>
            <p>Habilidades: {{$abilities[0] ['ability'] ['name']}}</p>        
            <p>Level: {{$stats[0] ['base_stat']}}</p>  
        </div>
    </div>
    
    </body>
</html>
