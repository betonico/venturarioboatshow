<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>Rio Boat Show - Novo Cadastro</h1>

<div>
    <b>Nome:</b> {{ $name }} <br>
    <b>E-mail:</b> {{ $email }} <br>
    <b>CPF:</b> {{ $cpf }} <br>
    <b>Endereço:</b> {{ $address }} <br>
    <b>Cidade</b> {{ $city }} <br>
    <b>Estado:</b> {{ $state }} <br>
    <b>Telefone</b> {{ $phone }} <br>
    <b>Whatsapp:</b> {{ $whatsapp }} <br>
    <b>Possui barco:</b> {{ $own_boat == 0 ? 'Sim' : 'Não' }} <br>
    <b>Modelo do barco:</b> {{ $boat_model == '' ? 'Não possui barco' : $boat_model }} <br>
    <b>Barco de interesse:</b> {{ $boat_interest == '' ? 'Não informado' : $boat_interest }}
</div>

</body>
</html>


