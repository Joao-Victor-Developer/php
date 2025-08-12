<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de dados com php</title>
	 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            text-align: center;
            margin-top: -30%;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
     <h2>Cadastro de Usuário</h2>
    <form name="form1" method="POST">
	<fieldset>
        <label for="nome">Nome:</label><br>
        <input type="text"  name="txt_usuario" size="30"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email"  name="txt_email" size="30"><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="txt_senha" size="30"><br><br>

        <input type="submit" name"bt_incluir" value="CADASTRAR" onClick=document.form1.action'cadaster.php'>
		</fieldset>
    </form>
</body>
</html>