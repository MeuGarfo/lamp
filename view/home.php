<!doctype html>
<html lang="pt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Preços de hospedagens</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <form class="" action="save.php" method="get">
                    <fieldset>
                        <legend>Preços de hospedagens</legend>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="empresa" class="col-form-label col-form-label-sm">Nome da empresa</label>
                                    <input id="empresa" type="text" name="empresa" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="produto" class="col-form-label col-form-label-sm">Produto</label>
                                    <input id="produto" type="text" name="produto" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="url" class="col-form-label col-form-label-sm">Link</label>
                                    <input id="url" type="url" name="url" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="disco" class="col-form-label col-form-label-sm">Disco (GBs)</label>
                                    <input id="disco" type="number" name="disco" min="10" step="0.5" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="ram" class="col-form-label col-form-label-sm">RAM (GBs)</label>
                                    <input id="ram" type="number" step="0.01" name="ram" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="preco" class="col-form-label col-form-label-sm">Preço</label>
                                    <input id="preco" type="number" step="0.01" name="preco" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="moeda" class="col-form-label col-form-label-sm">Moeda</label>
                                    <select id="moeda" name="moeda" class="form-control form-control-sm">
                                        <option value="dolar">Dólares</option>
                                        <option value="euro">Euros</option>
                                        <option value="grivnia">Grívnias</option>
                                        <option value="real">Reais</option>
                                        <option value="rupia-indonesia">Rupia Indonésia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Registrar produto</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <?php
                $count=@count($produtos);
                if($count>0){
                    view('produtos',['produtos'=>$produtos,'count'=>$count]);
                }
                ?>
            </div><!--md6-->
        </div>
    </div>
</body>
</html>
