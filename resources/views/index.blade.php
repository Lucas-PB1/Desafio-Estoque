@extends('templates.template');
<!-- Template principal -->
@section('content')

    <!-- Tabela de dados -->
    <div class="container text-center" id="main">
        <table class="table table-bordered table-dark" id="table-main">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                    <th scope="col">QTD</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <!-- Loop de dados -->
            @foreach ($stock as $stocks)
                <tbody>
                    <tr>
                        <th scope="row" class="id_table">{{ $stocks->id }}</th>
                        <td>{{ $stocks->name }}</td>
                        <td>{{ $stocks->desc }}</td>
                        <td>{{ $stocks->category }}</td>
                        <td>R${{ $stocks->price }}</td>
                        <td>{{ $stocks->qtd }}</td>
                        <td class="link-buttons">
                            <a href='{{ url('stock/' . $stocks->id) }}'>
                                <button class="btn_white">Visualizar</button>
                            </a>
                            <a href="{{ url('stock/' . $stocks->id . '/edit') }}">
                                <button class="btn_blue">Editar</button>
                            </a>
                            <form action="{{ url('stock/' . $stocks->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn_red">Excluir</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
