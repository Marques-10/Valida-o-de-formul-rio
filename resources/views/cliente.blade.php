<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Clientes</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            body {
                padding: 20px;
            }
            #newCliente a {
                color: #FFF;
                font-weight: bold;
            }

            a:hover {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <main role="main">
            <div class="row">
                <div class="container col-md-8 offset-md-2">
                    <div class="card border">
                        <div class="card-header">
                            <div class="card-title">
                                Cadastro de Cliente
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="tabelaprodutos">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Endereço</th>
                                        <th>Idade</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->nome }}</td>
                                        <td>{{ $c->endereco }}</td>
                                        <td>{{ $c->idade }}</td>
                                        <td>{{ $c->email }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <button id="newCliente" class="btn btn-info btn-sm"><a href="/novocliente">Novo cliente</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
