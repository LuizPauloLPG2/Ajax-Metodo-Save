<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>AJAX</title>
    </head>
    <body>
        <br>
        <div class="container">
            <div id="erro">

            </div>
            <div class="container border border-primary">
                <h1><code>AJAX</code></h1>
            </div>
            <hr class="border border-primary">
            <div class="container">
                <form method="post" id="sendData">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><code>*</code>NOME</label>
                            <input class="form-control" name="nome_profissional" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label><code>*</code>EMAIL</label>
                            <input class="form-control" name="email_profissional" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" form="sendData" class="btn btn-success">CADASTRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>
