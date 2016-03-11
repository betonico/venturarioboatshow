@extends('template.master')

@section('title', 'Ventura Marine - Rio Boat Show')

@section('content')
    <header class="container header">
        <div class="row">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $message)
                            <li class="message_insert"><img alt="Error" src="{{ asset('build/images/icons/error_icon.png') }}"> {{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <ul>
                        <li class="message_insert"><img alt="Success" src="{{ asset('build/images/icons/success_icon.png') }}"> {{ session('success') }}</li>
                    </ul>
                </div>
            @endif

            <div class="col-md-6 header_description">
                <h1>Com a Ventura você Chega na frente.</h1>
            </div>
            <div class="col-md-6">
                <img class="img-responsive logo" alt="Logo Ventura Show" src="{{ asset('build/images/logo.png') }}"/>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <form class="send_insert" action="insert" method="POST">

                {{ csrf_field() }}

                <section class="col-md-12 form_section">
                    <h1>Preencha o formulário<br> para participar do <b>Rio Boat Show</b></h1>

                    <input type="text" name="name" placeholder="nome" value="{{ old('name') }}" required>
                    <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
                    <input id="cpf" type="text" name="cpf" placeholder="CPF" value="{{ old('cpf') }}" required>
                    <input type="text" name="address" placeholder="endereço" value="{{ old('address') }}" required>
                    <div class="col-md-8  padding_zero">
                        <input type="text" name="city" placeholder="cidade" value="{{ old('city') }}" required>
                    </div>
                    <div class="col-md-4 padding_zero">
                        <select class="estados" name="state" required>
                            <option value="">estado</option>
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Espírito Santo">Espírito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="pernambuco">pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                        </select>
                    </div>
                    <input id="telefone" type="text" name="phone" placeholder="telefone" value="{{ old('phone') }}" required>
                    <input id="whatsapp" type="text" name="whatsapp" placeholder="whatsapp" value="{{ old('whatsapp') }}">
                    <div class="col-md-4 select_quest_form">
                        <p class="select_quest">
                            Possui barco?
                            <input type="radio" name="own_boat" value="0" required> sim
                            <input type="radio" name="own_boat" value="1"> não
                        </p>
                    </div>
                    <div class="col-md-8 select_quest_form input_quest">
                        <p class="select_quest">
                            Qual modelo?
                            <input type="text" name="boat_model">
                        </p>
                    </div>
                </section>

                <section class="col-md-12 boat_select">
                    <h1>Em qual modelo Ventura você tem interesse?</h1>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V160" required>
                        <img alt="V160" class="img-responsive" src="{{ asset('build/images/v160.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V180">
                        <img alt="V180" class="img-responsive" src="{{ asset('build/images/v180.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V195">
                        <img alt="V195" class="img-responsive" src="{{ asset('build/images/v195.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V210">
                        <img alt="V210" class="img-responsive" src="{{ asset('build/images/v210.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V215">
                        <img alt="V215" class="img-responsive" src="{{ asset('build/images/v215.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V230 GII">
                        <img alt="V230 GII" class="img-responsive" src="{{ asset('build/images/v230.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V250">
                        <img alt="V250" class="img-responsive" src="{{ asset('build/images/v250.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V265">
                        <img alt="V265" class="img-responsive" src="{{ asset('build/images/v265.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V270">
                        <img alt="V270" class="img-responsive" src="{{ asset('build/images/v270.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V300">
                        <img alt="V300" class="img-responsive" src="{{ asset('build/images/v300.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V330">
                        <img alt="V330" class="img-responsive" src="{{ asset('build/images/v330.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V350">
                        <img alt="V350" class="img-responsive" src="{{ asset('build/images/v350.png') }}">
                    </label>
                    <label class="col-xs-6 boat_radio">
                        <input type="radio" name="boat_interest" value="V410">
                        <img alt="V410" class="img-responsive" src="{{ asset('build/images/v410.png') }}">
                    </label>
                </section>

                <p class="text-center send_btn_action"><input type="submit" class="send_btn" value="enviar formulário"/></p>
                <p class="text-center send_btn_loading"><img alt="Send loading" src="{{ asset('build/images/icons/loading_email.svg') }}"></p>
            </form>
        </div>
    </div>
@endsection

