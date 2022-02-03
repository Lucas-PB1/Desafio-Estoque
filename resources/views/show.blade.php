@extends('templates.template');

<!-- Card template contendo a informações exclusiva -->
@section('content')
    <div class="container" id="show">
        <h1 class="text-center">Visualizando</h1>
        <div class="card col-md-6 text-center" id="info-card">
            <div class="card-header">
                <h2>{{ $stock->name }}</h2>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Identificador: {{ $stock->id }}
                <p>Descrição: {{ $stock->desc }}</p>
                <p>Quantidade: {{ $stock->qtd }}</p>
                <p> Preço: R${{ $stock->price }} </p>
                </p>
                <!-- Possiveis tags -->
                <p class="tags">Tags: <a href="#" class="">{{ $stock->category }}</a></p>
            </div>
        </div>
    </div>
@endsection
