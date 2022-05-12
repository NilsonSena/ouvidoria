<?php
    session_start();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <title>Ouvidoria</title>
    </head>

    <body>

    <?php 
        include('navbar.php');
        include('destroy.php');
    ?>
    <style>

            /* retira a rolagem para o input="numbers" */
            /* Chrome, Opera, Safari, EDGE */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
            /* Não permite aumentar ou diminuir a area de texto */
            textarea {
                resize: none;
            }
            
    </style>
    <script type="text/javascript">



    </script>
        <div class="container-fluid" id="anonimo">
                <div class="col-md-6 col-md-offset-3">
                    <!-- Consultar codigo -->
                    <h2 class="text-center"> Reclamação Anônima </h2>
                    <form method="POST">
                        <div class="form-group col-md-12">
                            <label for="reclamacaoAnonima">Digite a reclamação abaixo:</label>
                            <textarea class="form-control is-invalid" id="reclamacaoAnonima" maxlength="1000" placeholder="Digite aqui!" rows="8" required></textarea>
                        </div>
                    
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-large btn-block btn-success" id="botaoAnon" value="Enviar"></button>
                    </div>
                    </form>
                    
                    
                </div>
        </div>
    </body>
</html>