<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ecf0f1;
        }
        .content {
            background-color: #fff;
            border-radius: 15px;
            width: 960px;
            height: 50%;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .content::before {
            content: "";
            position: absolute;
            background-color: #58af9b;
            width: 40%;
            height: 100%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;


            left: 0;
        }
        .title {
            font-size: 28px;
            font-weight: bold;
            text-transform: capitalize;
        }
        .title-primary {
            color: #fff;
        }
        .title-second {
            color: #58af9b;
        }
        .description {
            font-size: 14px;
            font-weight: 300;
            line-height: 30px;
        }
        .description-primary {
            color: #fff;
        }
        .description-second {
            color: #7f8c8d;
        }
        .btn {
            border-radius: 15px;
            text-transform: uppercase;
            color: #fff;
            font-size: 10px;
            padding: 10px 50px;
            cursor: pointer;
            font-weight: bold;
            width: 150px;
            align-self: center;
            border: none;
            margin-top: 1rem;
        }
        .btn-primary {
            background-color: transparent;
            border: 1px solid #fff;
            transition: background-color .5s;
        }
        .btn-primary:hover {
            background-color: #fff;
            color: #58af9b;
        }
        .btn-second {
            background-color: #58af9b;
            border: 1px solid #58af9b;
            transition: background-color .5s;
        }
        .btn-second:hover {
            background-color: #fff;
            border: 1px solid #58af9b;
            color: #58af9b;
        }
        .first-content {
            display: flex;
        }
        .first-content .second-column {
            z-index: 11;
        }
        .first-column {
            text-align: center;
            width: 40%;
            z-index: 10;
        }
        .second-column {
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .social-media {
            margin: 1rem 0;
        }
        .link-social-media:not(:first-child){
            margin-left: 10px;
        }
        .link-social-media .item-social-media {
            transition: background-color .5s;
        }
        .link-social-media:hover .item-social-media{
            background-color: #58af9b;
            color: #fff;
            border-color: #58af9b;
        }
        .list-social-media {
            display: flex;
            list-style-type: none;
        }
        .item-social-media {
            border: 1px solid #bdc3c7;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            color: #95a5a6;
        }
        .form {
            display: flex;
            flex-direction: column;
            width: 55%;
        }
        .form input {
            height: 45px;
            width: 100%;
            border: none;
            background-color: #ecf0f1;
        }
        input:-webkit-autofill 
        {    
            -webkit-box-shadow: 0 0 0px 1000px #ecf0f1 inset !important;
            -webkit-text-fill-color: #000 !important;
        }
        .label-input {
            background-color: #ecf0f1;
            display: flex;
            align-items: center;
            margin: 8px;
        }
        .icon-modify {
            color: #7f8c8d;
            padding: 0 5px;
        }

        /* second content*/

        .second-content {
            position: absolute;
            display: flex;
        }
        .second-content .first-column {
            order: 2;
            z-index: -1;
        }
        .second-content .second-column {
            order: 1;
            z-index: -1;
        }
        .password {
            color: #34495e;
            font-size: 14px;
            margin: 15px 0;
            text-align: center;
        }
        .password::first-letter {
            text-transform: capitalize;
        }



        .sign-in-js .first-content .first-column {
            z-index: -1;
        }

        .sign-in-js .second-content .second-column {
            z-index: 11;
        }
        .sign-in-js .second-content .first-column {
            z-index: 13;
        }

        .sign-in-js .content::before {
            left: 60%;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        

            z-index: 12;
        }

        .sign-up-js .content::before {
            

            z-index: 12;
        }

        .sign-up-js .second-content .first-column,
        .sign-up-js .second-content .second-column {
            z-index: -1;
        }

        .sign-up-js .first-content .second-column {
            z-index: 11;
        }

        .sign-up-js .first-content .first-column {
            z-index: 13;    
        }


        /* DESLOCAMENTO CONTEÚDO ATRÁS DO CONTENT:BEFORE*/
        .sign-in-js .first-content .second-column {

            z-index: -1;
            position: relative;
            
        }

        .sign-up-js .second-content .second-column {
            position: relative;
            z-index: -1;
           
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">DivHortifruti</h2>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Cadastre sua conta</h2>
                <form class="form">
                   
                    <label class="label-input" for="">
                        <input type="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <input type="password" placeholder="Senha">
                    </label>

                    <label class="label-input" for="">
                        <input type="" placeholder="CPF">
                    </label>

                    <label class="label-input" for="">
                        <input type="" placeholder="Telefone">
                    </label>

                    <label class="label-input" for="">
                        <input type="" placeholder="Nome">
                    </label>
                    
                      
                    <a button class="btn btn-second" href="login.php">Cadastra</a>    
                </form>
            </div><!-- second column -->

</body>
</html>