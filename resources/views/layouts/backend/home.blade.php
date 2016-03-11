@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Cadastros</div>

                <div class="panel-body">
                    @if($invitations->count())
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invitations as $invitation)
                                    <tr>
                                        <td>{{ $invitation->name }}</td>
                                        <td>{{ $invitation->email }}</td>
                                        <td>{{ $invitation->phone }}</td>
                                        <td>
                                            <form action="{{ url('admin/delete/' . $invitation->id) }}" method="POST">

                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">Remover</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        Nenhum usuário cadastrado
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


