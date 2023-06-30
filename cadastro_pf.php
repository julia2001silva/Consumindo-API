
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro PF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Oxanium|Poppins|Sen&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cadastro_pf.css">

</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">



            <div class="formulario col-6">
                <div class="h2">
                    <h2>Criar Conta</h2>
                    <p> Já é membro? <a href="#">Login</a></p>
                </div>

                <div class="form-group ">
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome Completo">
                </div>

                <div class="form-group ">
                    <div class="input-group">
                        <input class="form-control col-4" type="text" id="cep" placeholder="CEP">
                        <button type="submit" class="btn btn-info" id="btn">Buscar</button>
                    </div>
                </div>

                <div class="form-group">
                    <input class="form-control" id="uf" name="uf" type="text" placeholder="UF" readonly>
                </div>

                <div class="form-group">
                    <input class="form-control " type="text" name="cidade" id="cidade" placeholder="Cidade" readonly>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control col-8" id="logradouro" name="logradouro" placeholder="Logragouro">
                        <input type="text" class="form-control col-4" id="numero" name="numero" placeholder="Número">
                    </div>
                </div>

                <div class="form-grounp">
                    <input type="text" class="form-control " id="bairro" name="bairro" placeholder="Bairro">
                </div>

                <div class="form-grounp">
                    <input type="email" class="form-control mt-3" id="email" name="email" placeholder="Email">
                </div>

                <div class="form-grounp">
                    <input type="password" minlength="8" class="form-control mt-3" id="senha" name="senha" placeholder="Senha">
                </div>
                <div class="text-center">
                    <input class="btn btn-primary mt-5" type="submit" value="CADASTRAR">
                </div>

            </div>


        </div>

    </div>









    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //console.log(micael(10,10,20))
    </script>
    <script src="js/app.js"></script>

</body>

</html>