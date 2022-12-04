 <?php
    if (isset($_POST['submit']))
    {
    //teste pra ver se esta tudo salvando
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('E-mail: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Tel.: ' . $_POST['Telefone']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('CPF: ' . $_POST['cpf']);
    //print_r('<br>');
    // ok tudo certo, agora é passar os parâmetros para as variáveis

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['Telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $cpf = $_POST['cpf'];

    $result = mysqli_query($conexao, "INSERT INTO clientes (Nome, Email, Telefone, CPF, DataNascimento, Genero) VALUES ('$nome', '$email', '$telefone', '$cpf', '$data_nascimento', '$genero')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body
        {
            
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            /*CSS é um luxo, mas quem não tem cão, caça com gato. Melhor que deixar tudo branco ou monotono kk */
        }
        .box{ 
            color: white;
            position: absolute;
            /*para ocupar somente o próprio espaço da box */
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset{
            border: 3px solid dodgerblue;
            /*Linhazinha azul ao redor da box */
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            /*Ajustes no título de "Cadastro" na parte superior da box */
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            /* Seria eu, o Picasso do CSS?! kkkkk mas ta apresentável, convenhamos. */
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
            /*Transformei os labels em uma classe, para poder gerar essa animação */
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 200));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend> <b> Cadastro </b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome Completo </label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> Email </label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="tel" name="Telefone" id="Telefone" class="inputUser" required>
                    <label for="Telefone" class="labelInput"> Telefone </label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="int" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput"> CPF </label>
                </div>
                <br>
                <br> Sexo: <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="mascluino" name="genero" value="mascluino" required>
                <label for="mascluino">Mascluino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                <label for="data_nascimento"> <b> Data de Nascimento: </b> </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <br>
                <input type="submit" name="submit" id="submit">
                <!-- para submitar e manipular o css -->
                </div>
            </fieldset>
        </form>
    </div>
    
</body>
<!--  Design não é o meu forte mas até que ficou bonitinho e organizado hein, recrutador -->
</html>