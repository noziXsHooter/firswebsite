<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS only -->
    <link href='https://fonts.googleapis.com/css?family=MedievalSharp' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/script.js"></script> -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/login.js"></script>
    
    
    <title>For the Horde! - Home</title>
    <style>
        body {
            background-color:rgb(36, 1, 1);
        }
        h1{
            color: tomato;
        }
        .vermelho {
            color: red;
        }

        .d-none{
            display: none;
        }

        .d-flex {
            display: flex;
        }
        p {
            margin: 0;
        }

        bmi {         
            margin-left: 18%;      
            margin-right: 18%;
            width: auto;
        }
        .cardbackground {
           /*  background-color:rgb(83, 14, 14); */
           background-color: black;
        }    
        .center {

            display: flex;
            margin-left: 50px;
            justify-content: center;
        }
        .cardcenter {
            margin: 0 auto; 
            float: none; 
            margin-bottom: 10px;
            margin-top: 8%; 
        }
        .cardloginright {
            display: flex;
            margin-left: 415px;
            justify-content: center;
            border-color: rgb(100, 0, 0);
            border-width: 2px;
            background: black;
            box-shadow: 10px 10px 10px rgb(136, 3, 3);
        }          
        .imagebox {
            max-width:100%;
            max-height:100%;
        }
        .cardshowbox{
            width: 300px;
            height: 100px;
            padding: 0px;
            background-color: black;
            box-shadow: 10px 10px 40px rgb(136, 3, 3);
        }
        .cardlogin{
            width: 300px;
            height: 100px;
            padding: 0px;
            background-color: black;
            box-shadow: 10px 10px 40px rgb(136, 3, 3);
        }
        .backgroundblack{
            background-color: black;
        }
        .backgroundredbutton{
            background: rgb(136, 3, 3);
            display: flex;
            margin-left: 80px;
            justify-content: center;

        }
        .logintext{
            font-family: 'MedievalSharp';
            font-size: 100%;
            color:rgb(167, 6, 6);
        }
        .forthehordefont{
            font-family: 'MedievalSharp';
            font-size: 250%;
            color:rgb(167, 6, 6);
        }
        .form-control:focus {
            border-color: #971700;
            box-shadow: 0 0 0 0.2rem rgb(248, 25, 25);
        }
        ::placeholder {
            color: rgb(110, 1, 1) !important;
        }
        .form-check {
            position: relative;
        }

        .form-check-input:checked {
            background-color: rgb(110, 1, 1);
            border-color: rgb(110, 1, 1);
        } 

    </style>
</head>

<!-- QUANDO CARREGA A PAGINA, É CRIADO O LOGIN E SENHA NO LOCALSTORAGE 


    ***       login: "exemplo@exemplo.com / senha: "Rbm123456"        *** -->

<body>

    <div class="body"></div>

        <div class="card mb-3 cardcenter cardbackground cardshowbox" style="height:600px; width: 800px;">
            <div class="row align-items-center vh-100">
            <div class="col-md-6 imagebox">
                <img src="img/horde.jpeg" class="imagebox" alt="Horde">
            </div>
            <div class="dropdown-menu cardloginright" style="height:420px; width: 350px;">
                <form action="" method="POST" class="px-4 py-5">

                    <!-- MB-? SAO OS ESPACOS ENTRE OS ELEMENTOS -->
                    <div class="forthehordefont mb-4">
                        <name>FOR THE HORDE!</name>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label logintext">Login</label>
                        <input type="email" name="email" id="email" class="form-control formularyinput" placeholder="exemplo@exemplo.com" required>
                        <p class="erro-email d-none">Email é obrigatório</p>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label logintext">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter pelo menos um número, uma letra maiúscula e minúscula, e pelo menos 8 ou mais caracteres." required>

                        <p class="erro-senha d-none">A senha é obrigatória</p>
                   </div>
                   <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label logintext" for="dropdownCheck">Me lembre!</label>
                        </div>
                  </div>
                  <div class="d-flex">
                        <button id="logar" type="submit" class="col-6 btn btn-danger backgroundredbutton">Logar</button>
                  </div>
                </form>
            </div>
        </div>

</body>

</html>