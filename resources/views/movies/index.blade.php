@extends('components.layout')
@section('title', 'Filmes')
@section('content')

    <div class="header-container">
        <h1>Filmes</h1>
        @if (count($movies) == 0)
            <p class="movies-p">Parece que você ainda não adicionou nenhum filme na sua lista de espera. <a
                    href="/filmes/create">Adicione clicando
                    aqui</a></p>
        @else
            <p class="movies-p">Estas são os filmes que você adicionou na sua lista de espera. <a
                    href="/filmes/create">Adicione mais clicando aqui</a></p>
        @endif
    </div>

    @if (count($movies) > 0)
        <div class="movies-container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Plataforma</th>
                        <th scope="col">Ano de Lançamento</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $serie)
                        <tr>
                            <th scope="row">{{ $serie->id }}</th>
                            <td>{{ $serie->title }}</td>
                            <td>{{ $serie->genre }}</td>
                            <td>{{ $serie->platform }}</td>
                            <td>{{ $serie->year }}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-watched">
                                    <ion-icon name="checkmark-circle"></ion-icon>
                                    </ion-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
