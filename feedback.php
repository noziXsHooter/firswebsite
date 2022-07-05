
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
    <title>For the Horde! - Feedback</title>

</head>


<!-- CORPO DO FEEDBACK -->
<body class="body">
    <div class=""></div>
        <div class="card mb-2 cardcenter cardbackground cardshowbox" style="height:1120px; width: 800px;">
            <div class="h1formulario">
                <p>
                    <h1 class="card-title">* Feedback *</h1>
                </p>
            </div>

            <div>
                <p>
                    <h2 id="formularydata" class="card mb-2 formularylabel">Dados do Formulário: </h2>
                </p>
            </div>


            <div class="formularylabel" style="font-size: 90%; height: 600px">
                
                <?php
                
                $nomeinput = null;
                $emailinput = null;
                $telefoneinput = null;
                $idade = null;
                $probabilidade = null;


                if(isset($_POST['submit'])){

                    $nomeinput = $_POST['nomeinput'];
                    $emailinput = $_POST['emailinput'];    
                    $telefoneinput = $_POST['telefoneinput'];
                    $contenos = $_POST['contenos'];


                    echo "<p>Nome: {$nomeinput}</p>";
                    echo "<p>Email: {$emailinput}</p>";
                    echo "<p>Telefone: {$telefoneinput}</p>";

                    if(isset($_POST['idade'])){

                        if($_POST['idade'] == '1'){

                            echo "<p>Idade: Até 17 anos</p>";    

                        }elseif($_POST['idade'] == '2'){

                            echo "<p>Idade: 18 a 35 anos</p>";   

                        }elseif($_POST['idade'] == '3'){

                            echo "<p>Idade: 36 a 65 anos</p>"; 

                        }elseif($_POST['idade'] == '4'){

                            echo "<p>Idade: 66 anos ou mais</p>";
                        }

                    }


                    echo "<div><p><h2 id='h2melhorar' class='card mb-2 formularylabel'>Em que podemos melhorar: </h2></p></div>";

                    if(isset($_POST['atendimento'])){

                        echo "<p>Atendimento Telefônico</p>";

                    }
                    if(isset($_POST['clareza'])){

                        echo "<p>Clareza das Informações</p>";

                    }
                    if(isset($_POST['decoracao'])){

                        echo "<p>Decoração</p>";

                    }
                    if(isset($_POST['conservacao'])){

                        echo "<p>Conservação e Higiene dos Equipamentos</p>";

                    }
                    if(isset($_POST['agilidade'])){

                        echo "<p>Agilidade</p>";

                    }

                    if(isset($_POST['cordialidade'])){

                        echo "<p>Cordialidade</p>";

                    }  
                    if(isset($_POST['conhecimento'])){

                        echo "<p>Conhecimento Técnico</p>";

                    }
                    if(isset($_POST['pagamento'])){

                        echo "<p>Precos e formas de pagamento</p>";

                    }
                    
                    echo "<div><p><h2 id='h2melhorar' class='card mb-2 formularylabel'>Probabilidade de retorno: </h2></p></div>";

                    if(isset($_POST['probabilidade'])){

                        if($_POST['probabilidade'] == '1'){

                            echo "<p>Probabilidade de retorno: Nunca</p>";    

                        }elseif($_POST['probabilidade'] == '2'){

                            echo "<p>Probabilidade de retorno: Improvável</p>";   

                        }elseif($_POST['probabilidade'] == '3'){

                            echo "<p>Probabilidade de retorno: Provável</p>"; 

                        }elseif($_POST['probabilidade'] == '4'){

                            echo "<p>Probabilidade de retorno: Definitiva</p>";
                        }

                    }

                    echo "<div><p><h2 id='h2opiniao' class='card mb-2 formularylabel'>Opinião: </h2></p></div>";

                    echo "<div mb-2><p>{$contenos}</p></div>";


                    echo "<span style='margin-left: 25%; font-size: 20px;justify-text: center'>ESTAMOS MUITO FELIZES COM SUA CHEGADA!</span><p></p>";
                    echo "<span style='margin-left: 44%; font-size: 20px; justify-text: center'>SEJA BEM VINDO!</span>";
                }


                ?>
            </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>