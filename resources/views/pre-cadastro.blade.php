<html>

<head>
    <title>Desafio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Questões</h1>
        <hr />
        <form action="/" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nome">A - Antes de começarmos a pesquisa, por gentileza nos informe a sua idade:</label><br>

                <input type="radio" id="alt1" name="alternative" value="1">
                <label for="alt1">Menos de 18 anos</label><br>

                <input type="radio" id="alt2" name="alternative" value="2">
                <label for="alt2">De 18 a 20 anos</label><br>

                <input type="radio" id="alt3" name="alternative" value="3">
                <label for="alt3">De 21 a 30 anos</label><br>

                <input type="radio" id="alt4" name="alternative" value="4">
                <label for="alt4">De 31 a 40 anos</label><br>

                <input type="radio" id="alt5" name="alternative" value="5">
                <label for="alt5">De 41 a 50 anos</label><br>

                <input type="radio" id="alt6" name="alternative" value="6">
                <label for="alt6">De 51 a 60 anos</label><br>

                <input type="radio" id="alt7" name="alternative" value="7">
                <label for="alt7">Mais de 60 anos</label><br>
            </div>
            <a href="{{route('cadastro')}}">
                <span class="titulo"> Proximo </span>
              </a> 
        </form>
    </div>
</html>
