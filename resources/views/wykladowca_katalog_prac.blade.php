@extends('layouts.arpas_dark')

@section('body-class', 'sb-nav-fixed')

@section('content')
    <div id="layoutSidenav_content" class="pt-5">
        <main>
            <div class="container-fluid px-5">
                <h1 class="mt-4">Prace</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Nazwa katalogu
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>Nazwa</th>
                                <th>Autor</th>
                                <th>Kierunek</th>
                                <th>Rok</th>
                                <th>Ocena</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Nazwa</th>
                                <th>Autor</th>
                                <th>Kierunek</th>
                                <th>Rok</th>
                                <th>Ocena</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            @if($prace ?? '')
                                @foreach($prace as $praca)
                                    <tr>

                                        <td>{{ $praca->title}} <span class="ms-1 badge bg-{{ $test = array_rand($status, 1) }}">{{ $status[$test]  }}</span></td>
                                        <td>{{ $praca->author_name ?? '' }}</td>
                                        <td>{{ $praca->author_kierunek ?? '' }}</td>
                                        <td>{{ rand(1, 3) }}</td>
                                        <td>{{ rand(1, 10) }}</td>
                                        <form action="{{ route('wykladowca.ocena_prac') }}" method="GET">
                                           @csrf
                                            <a href="{{ route('wykladowca.ocena_prac') }}">                                        <th><button type="submit" class="btn btn-primary">Oceń</button></th></a>

                                        </form>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
