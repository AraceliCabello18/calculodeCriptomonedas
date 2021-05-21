<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Calculo de Criptomonedas</title>
</head>

<body>
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Calculo de Presio de las Criptomonedas</h1>
            <div class="card">
                <div class="card-body">
                    <form method="post" id="frmmonedas">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="cantidad">Monto a Gastar</label>
                                <input type="text" class="form-control" id="cantidad" name="cantidad" pattern="[0-9]+">
                            </div>
                        </div>
                        <hr>
                        <h3>Criptomonedas</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="radio" name="criptomonedas" id="bitcoin" value="bitcoin"> 
                                <label for="bitcoin">Bitcoin</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="criptomonedas" id="mana" value="mana"> 
                                <label for="mana">Mana</label>
                            </div>
                            <div class="row">
                            <div class="col-sm-4">
                                <input type="radio" name="criptomonedas" id="bat" value="bat">
                                <label for="bat">Bat</label>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="criptomonedas" id="etherium" value="etherium">
                                <label for="etherium">Etherium</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="criptomonedas" id="xrp" value="xrp">
                                <label for="xrp">XRP</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="btn btn-primary" id="btn_calcular" >Calcular</span>
                                <span class="btn btn-warning" onclick="limpiar()">Limpiar</span>
                            </div>
                            <div class="col-sm-6">
                                <div id="total">dd</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="app.js"></script>
</body>

</html>