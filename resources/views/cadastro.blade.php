<html>

<head>
    <title>Desafio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>

<body>
    <div class="container">
        <h1>Questões</h1>
        <hr />
        <form action="/cadastro" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div>
                    <label>1 - Quando pensa em plano de saúde, qual é o nome da operadora que primeiro lhe vem à
                        cabeça?</label><br>
                    <input type="text" id="planoSaude" placeholder="Digite..." autocomplete>
                    <script>
                        $(function() {
                            var planoSaude = [
                                "Natação",
                                "Futebol",
                                "Vôlei",
                                "Basquete"
                            ];
                            $("#planoSaude").autocomplete({
                                source: planoSaude
                            });
                        });
                    </script>
                </div>
                <div>
                    <label>2 - Por ordem de prioridade, peço que diga o que considera mais importante na gestão do seu
                        plano de previdência, onde 1 é o mais importante e 5 é o menos importante?</label>

                </div>

                <div>
                    <label>3 - O quanto você se considera informado sobre as condições, regras e informações do seu
                        plano de previdência do IBRC?</label><br>

                    <input type="radio" id="opt1" name="option" value="1">
                    <label for="opt1"> 0 NA(Não Aplicácel)</label><br>

                    <input type="radio" id="opt2" name="option" value="2">
                    <label for="opt2"> 1 Muito bem informado</label><br>

                    <input type="radio" id="opt3" name="option" value="3">
                    <label for="opt3"> 2 Bem informado</label><br>

                    <input type="radio" id="opt4" name="option" value="4">
                    <label for="opt4"> 3 Mais ou menos informado</label><br>

                    <input type="radio" id="opt5" name="option" value="5">
                    <label for="opt5"> 4 Mal informado</label><br>

                    <input type="radio" id="opt5" name="option" value="5">
                    <label for="opt5"> 5 Muito mal informado</label><br>
                </div>

                <div>
                    <label>4 - Por qual razão se sente mal informado em relação ao seu plano de previdência do IBRC?
                    </label><br>
                    <script type="text/javascript">
                        (function() {
                            "use strict";

                            var marcados = 0;
                            var ch = document.getElementsByName('ck');
                            var verifyCheckeds = function($checks) {
                                if (ch == "7" || marcados >= 3) {
                                    loop($checks, function($element) {
                                        $element.disabled = $element.checked ? '' : 'disabled';
                                    }); 
                                } else {
                                    loop($checks, function($element) {
                                        $element.disabled = '';
                                    });
                                }
                            };
                            var loop = function($elements, cb) {
                                var max = $elements.length;
                                while (max--) {
                                    cb($elements[max]);
                                }
                            }
                            var count = function($element) {
                                return $element.checked ? marcados + 1 : marcados - 1;
                            }
                            window.onload = function() {
                                var $checks = document.querySelectorAll('input[type="checkbox"]');
                                loop($checks, function($element) {
                                    $element.onclick = function() {
                                        marcados = count(this);
                                        verifyCheckeds($checks);
                                    }
                                    if ($element.checked) marcados = marcados + 1;
                                });
                                verifyCheckeds($checks);
                            }
                        }());
                    </script>
                    <label><input type="checkbox" id="c1" name="ck" value="1"/> Não sabe onde pode encontrar essas informações</label><br>
                    <label><input type="checkbox" id="c2" name="ck" value="2"/> Não tem interesse / Não quer saber</label><br>
                    <label><input type="checkbox" id="c3" name="ck" value="3"/> Acha muito confuso, os termos são muito técnicos</label><br>
                    <label><input type="checkbox" id="c4" name="ck" value="4"/> É muito extenso, longo demais. Poderia ser menor</label><br>
                    <label><input type="checkbox" id="c5" name="ck" value="5"/> Está sempre mudando </label><br>
                    <label><input type="checkbox" id="c6" name="ck" value="6"/> Outro motivo </label><br>
                    <label><input type="checkbox" id="c7" name="ck" value="7"/> NA (Não Aplicável) </label><br>
                </div>
                    <label>5 - Você é correntista do IBRC?</label> <br>
                    <input type="radio" id="yse" name="option" value="1">
                    <label for="yse"> Sim</label><br>

                    <input type="radio" id="nao" name="option" value="2">
                    <label for="nao"> Não</label><br>

                    <? 
                        $
                        if()
                    
                    ?>
                <div> 
            </div>
            <a href="{{ route('cadastro') }}">
                <span class="titulo"> Salvar </span>
            </a>
        </form>
    </div>

</html>
