@extends('layout');

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
