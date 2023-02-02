@extends('components.layout')
@section('title', 'Adicionar Série')
@section('content')

    <div class="header-container">
        <h1>Adicionar série</h1>
        <p>Aqui você poderá inserir a série que deseja assistir em breve!</p>
    </div>

    <div class="create-form">
        <form action="/series" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Título da série">
            </div>
            <div class="form-group">
                <label for="genre">Gênero</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Gênero">
            </div>
            <div class="form-group">
                <label for="platform">Plataforma de Streaming</label>
                {{-- <input type="text" class="form-control" id="platform" name="platform"
                    placeholder="Ex.: Netflix, Amazon, Disney..."> --}}
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
                <input type="text" class="form-control" id="year" name="year"
                    placeholder="Ano exato de lançamento do filme">
            </div>

            <button class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection
