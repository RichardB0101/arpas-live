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
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Nazwa</th>
                                <th>Autor</th>
                                <th>Kierunek</th>
                                <th>Rok</th>
                                <th>Ocena</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if($prace ?? '')
                                @foreach($prace as $praca)
                                    <tr>

                                        <td>{{ $praca->title }}
                                            @if($praca->grade > 4)
                                            <span class="ms-1 badge bg-success">Zaliczone</span>
                                            @elseif($praca->grade <= 4 && $praca->grade != 0)
                                            <span class="ms-1 badge bg-danger">Niezaliczone</span>
                                            @else
                                            <span class="ms-1 badge bg-secondary">Do oceny</span>
                                            @endif
                                        </td>
                                        <td>{{ $praca->author_name ?? '' }}</td>
                                        <td>{{ $praca->author_kierunek ?? '' }}</td>
                                        <td>{{ rand(1, 3) }}</td>
                                        <td>{{ $praca->grade ?? ''}}</td>
                                        <td>
                                        <form method="POST" action="{{ route('wykladowca.ocena_prac') }}">
                                            @csrf
                                            <input type="hidden" name="assignmentId" value="{{ $praca->id }}">
                                            <button type="submit" class="btn btn-primary">Oceń</button>
                                        </form>
                                        </td>

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
