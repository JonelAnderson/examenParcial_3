<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Reportes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
            html, body {
                height: 100%;

            }

            body {
                /*background: url(img/fondo.jpg);*/
                margin:0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato'
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content{
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 100px;
            }
            label{
                color: blue;
            }
            h4{
                color: chartreuse;
            }


        </style>
</head>
<body>
<div id="app">
    <section class="appoinment-area">
        <div class="container">
            <h2>Vista de Professions</h2>
            <h4>Diagrama esta en el directorio public</h4>
            <table border="4">
                <tr>
                    <td>User</td>
                    <td>Code Profession</td>
                    <td>Profession</td>
                    <td>Type Service</td>
                    <td>Description</td>
                    <td>Attention</td>
                </tr>
                @foreach($professions as $prof)
                <tr>
                    <th>{{$prof->user->name}}</th>
                    <th>{{$prof->code}}</th>
                    <th>{{$prof->profession}}</th>
                    <th>{{$prof->service->type_service}}</th>
                    <th>{{$prof->service->description}}</th>
                    <th>{{$prof->attention->date_attention}}</th>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
  </div>
</body>
</html>
