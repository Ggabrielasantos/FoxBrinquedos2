<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-image: url(fundo.png);
        }
        .form_login{
            display: flex;
            justify-content: center;
            margin-top: 150px;
        }
        .div_principal{
            background-color: rgb(106, 215, 244) ;
            width: 500px;
            height: 500px;
            border-radius: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .img_logo{
            margin-top: -60px;
            width: 300px;
            
        }

        .input_login{
            outline: 0;
            width: 300px;
            height: 40px;
            border-radius: 10px;
            background-color: #EFEBEB;
            flex-direction: column;
            font-size: 17px;
            
        }
        
        .btn_login{
            width: 300px;
            height: 40px;
            border-radius: 10px;
            background-color: #FB9938;
            border-color: #FB9938;
            color: #432075;
            font-weight:bold;
            font-size: 18px;
            flex-direction: column;
            line-height: 40px;
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            text-align: center;
            
        }
        .btn_cadastrar:link{
            color:#FB9938;
            font-weight: bold;
        }

      
    </style>
</head>
<body>
    
    <form action="" method="" class="form_login">
    <div class="div_principal">
   
        <h2>LOGIN</h2>
       
       <div class="logo_login">
            <img src="{{asset('logo (3).png')}}" alt="logo" class="img_logo">
        </div>

        <input type="text" placeholder="Email" class="input_login">

       
        <input type="password" placeholder="Senha" class="input_login">
    
        <input type="submit" value="ENTRAR" class="btn_login">

        <a href="#" class="btn_cadastrar">CADASTRE-SE</a>
    </div>

    </form>
</body>
</html>