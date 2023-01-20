@extends('components.layout')
@section('title', 'Séries')
@section('content')

    <div class="header-container">
        <h1>Séries</h1>
        @if (count($series) == 0)
            <p class="series-p">Parece que você ainda não adicionou nenhuma série na sua lista de espera. <a href="#">Adicione clicando
                    aqui</a></p>
        @else
            <p class="series-p">Estas são as séries que você adicionou na sua lista de espera. <a href="#">Adicione mais clicando
                    aqui</a></p>
        @endif
    </div>

    @if (count($series) > 0)
        <div class="series-container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Released at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($series as $serie)
                        <tr>
                            <th scope="row">{{ $serie->id }}</th>
                            <td>{{ $serie->title }}</td>
                            <td>{{ $serie->genre }}</td>
                            <td>{{ $serie->platform }}</td>
                            <td>{{ $serie->year }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
