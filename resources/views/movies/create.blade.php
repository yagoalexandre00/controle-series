@extends('components.layout')
@section('title', 'Adicionar Filme')
@section('content')

    <div class="header-container">
        <h1>Adicionar filme</h1>
        <p>Aqui você poderá inserir o filme que deseja assistir em breve!</p>
    </div>

    <div class="create-form">
        <form action="/filmes" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Título do filme">
            </div>
            <div class="form-group">
                <label for="genre">Gênero</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Gênero">
            </div>
            <div class="form-group">
                <label for="platform">Plataforma de Streaming</label>
            </div>
            <div class="form-group">
                <select name="platform" id="platform">
                    <option value="Netflix">Netflix</option>
                    <option value="Amazon Prime Video">Amazon Prime Video</option>
                    <option value="Disney">Disney</option>
                    <option value="Apple TV">Apple TV</option>
                    <option value="HBO Max">HBO Max</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year">Ano de lançamento</label>
                <input type="number" min="0" max="{{ date('Y') }}" step="1" class="form-control" id="year" name="year" placeholder="Ano exato de lançamento do filme">
            </div>

            <button class="btn btn-primary btn-create">Adicionar</button>
        </form>
    </div>
@endsection
