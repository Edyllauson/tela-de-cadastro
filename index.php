<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
    <title>Cadastro</title>
</head>
<body>
    <div class="fundo">
        <div>
            <h1 id="titulo">Cadastro de DEVs swifties</h1>
            <p id="subtitulo">Complete suas informações</p>
            <br>
        </div>
        <form action="processar.php" method="POST">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
            </fieldset>
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="campo">
                <label><strong>De qual lado da aplicação você desenvolve?</strong></label>
                <label>
                    <input type="radio" name="devweb" value="frontend" checked>Front-end
                </label>
                <label>
                    <input type="radio" name="devweb" value="backend">Back-end
                </label>
                <label>
                    <input type="radio" name="devweb" value="fullstack">Fullstack
                </label>
            </div>
            <div class="campo">
                <label for="senioridade"><strong>Senioridade</strong></label>
                <select id="senioridade" name="senioridade" required>
                    <option selected disabled value="">Selecione</option>
                    <option>Júnior</option>
                    <option>Pleno</option>
                    <option>Sênior</option>
                </select>
            </div>
            <fieldset class="grupo">
                <div id="check">
                    <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="tecnologias[]" value="HTML">
                    <label for="tecnologia1"> HTML</label>
                    <input type="checkbox" id="tecnologia2" name="tecnologias[]" value="CSS">
                    <label for="tecnologia2"> CSS</label>
                    <input type="checkbox" id="tecnologia3" name="tecnologias[]" value="JavaScript">
                    <label for="tecnologia3"> JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="tecnologias[]" value="PHP">
                    <label for="tecnologia4"> PHP</label>
                    <input type="checkbox" id="tecnologia5" name="tecnologias[]" value="C#">
                    <label for="tecnologia5"> C#</label>
                    <input type="checkbox" id="tecnologia6" name="tecnologias[]" value="Python">
                    <label for="tecnologia6"> Python</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologias[]" value="Java">
                    <label for="tecnologia7"> Java</label>
                </div>
            </fieldset>
            <div class="campo">
                <br>
                <label for="experiencia"><strong>Conte um pouco mais da sua experiência: </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>
            <button class="botao" type="submit">Concluído</button>
        </form>
    </div>
</body>
</html>
