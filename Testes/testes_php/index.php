<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes em PHP</title>

    <style>
        body{
            padding: 0;
            margin: 0;
        }

        td {
            border: 1px solid black;
            text-align: center;
            padding: 0.2em 1.5em;
        }

    </style>
</head>
    <body>
        <?php

        //Variável Constante
        define("BD_URL", "endereço_bd_dev");
        define("BD_USER", "usuario_dev");
        define("BD_PASSWORD", "senha_dev");

        //string
        $nome = 'Rafael Boing';
        // int
        $idade = 22;
        //float
        $peso = 81.5;

        //boolean
        $fumante = false; # true = 1 -- false = vazio
        ?>

        <div>
            <h1 style="text-align: center;">Exemplos PHP</h1>
            <hr>
        </div>

        <div>
            <h2>Ficha Cadastral</h2>
            <table>
                <tr>
                    <td>Nome:</td>
                    <td>Idade:</td>
                    <td>Peso:</td>
                    <td>Fumante:</td>
                </tr>
                <tr>
                    <td><?= $nome ?></td>
                    <td><?= $idade ?></td>
                    <td><?= $peso ?></td>
                    <td><?= $fumante ?></td>
                </tr>
            </table>
            <hr>
        </div>

        <div>
            <h2>Dados de Aceso</h2>
            <table>
                <tr>
                    <td>URL Banco de dados:</td>
                    <td>Usuário:</td>
                    <td>Senha:</td>
                </tr>
                <tr>
                    <td><?= BD_URL ?></td>
                    <td><?= BD_USER ?></td>
                    <td><?= BD_PASSWORD ?></td>
                </tr>
            </table>
            <hr>
        </div>

        <div>
            <h2>Biografia</h2>
            <p>
                <!--Aspas simples exige necessidade de utilizar o ponto para concatenação. Porém é mais rápido em tempo de execução, pois NÃO checa variáveis dentro da string-->
                <?= 'Meu nome é '.$nome.', tenho '.$idade.' anos de idade e peso '.$peso.' kg'?><br>
                
                <!--Aspas duplas NÃO exige necessidade de utilizar o ponto para concatenação. Porém é mais devagar em tempo de execução, pois checa variáveis dentro da string-->
                <?= "Meu nome é $nome, tenho $idade anos de idade e peso $peso kg"?>
            </p>
        </div>

    </body>
</html>

