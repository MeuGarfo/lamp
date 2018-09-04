<!doctype html>
<html lang="pt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Preços de hospedagens</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form class="" action="index.html" method="post">
                    <fieldset>
                        <legend>Preços de hospedagens</legend>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="empresa">Nome da empresa</label>
                                    <input id="empresa" type="text" name="empresa" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="produto">Produto</label>
                                    <input id="produto" type="text" name="produto" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="disco">Disco (GBs)</label>
                                    <input id="disco" type="number" name="disco" min="10" step="0.5" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="ram">RAM (GBs)</label>
                                    <input id="ram" type="number" step="0.1" min="3.75" name="ram" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="transferencia">Transferência (TBs)</label>
                                    <input id="transferencia" type="number" step="0.1" name="transferencia" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="preco">Preço</label>
                                    <input id="preco" type="number" step="0.1" name="preco" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="moeda" >Moeda</label>
                                    <select id="moeda" name="moeda" class="form-control">
                                        <option value="dolar">Dólares</option>
                                        <option value="euro">Euros</option>
                                        <option value="real">Reais</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
