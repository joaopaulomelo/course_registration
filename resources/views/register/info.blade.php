<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiocruz | Cadastro Incial</title>
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h2 style="text-align: center;">Informações complementares</h2>
        {{ Form::open(['route' => 'info.post', 'method' => 'post', 'files' => true]) }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nameStudent"
                    required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Data de Nascimento</label>
                <input type="date" class="form-control" name="dateStudent" id="date_birth"
                    placeholder="Data de Nascimento" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Telefone</label>
            <input type="text" class="form-control" id="inputPhone" placeholder="Telefone" name="phoneStudent"
                required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress2">CPF</label>
            <input type="text" class="form-control" id="inputCpf" placeholder="CPF" maxlength="11" name="cpfStudent"
                required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Nacionalidade</label>
            {{ Form::select('nationalityStudent', $nationality, null, ['class' => 'custom-select form-control', 'placeholder' => 'Selecione']) }}
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Foto</label><Br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" required>
            </select>
        </div>
        <h2 style="text-align: center;">Informações Responsavel</h2>
        <h4 style="text-align: center; color:crimson">(Formulário obrigatorio para menores de idade)</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nameGuardian">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Data de Nascimento</label>
                    <input type="date" class="form-control" id="inputDate" placeholder="Data de Nascimento"
                        name="dateGuardian">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Telefone</label>
                <input type="text" class="form-control " placeholder="Telefone" id="phone" name="phoneGuardian">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">CPF</label>
                <input type="text" class="form-control" id="inputCpf" placeholder="CPF" maxlength="11"
                    name="cpfGuardian">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Nacionalidade</label>
                {{ Form::select('nationalityGuardian', $nationality, null, ['class' => 'custom-select form-control', 'placeholder' => 'Selecione']) }}
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Parentesco</label>
                {{ Form::select('kinshipType', $kinshipType, null, ['class' => 'custom-select form-control', 'placeholder' => 'Selecione']) }}
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Foto</label><Br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photoGuardian">
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Entrar</button>
            {{ Form::close() }}
    </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
                    const dataAtual = new Date();
                    const anoAtual = dataAtual.getFullYear();
                    $("form").submit(function(event) {
                        if ($("input").first().val() === "correct") {
                            $("span").text("Validated...").show();
                            return;
                        }
                        var datainicial = $("#date_birth").val();

                        console.log(datainicial);
                    });
    </script>
</body>

</html>
