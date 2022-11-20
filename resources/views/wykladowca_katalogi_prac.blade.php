@extends('layouts.arpas_dark')

@section('body-class', 'd-flex flex-column h-100')
@section('content')

<div class="container-fluid p-5">
    <h1 class="mt-4">Katalogi prac</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Wszystkie katalogi
        </div>
        <div class="card-body">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        @for($i = 1; $i <= 12; $i++ )
                            <div class="col">
                                <div class="card shadow-sm">

                                    <div class="card-body">

                                        <p class="card-text my-4" style="font-size: 1.5em">
                                            <i class="fa-solid fa-folder me-2" style="font-size: 2em"></i>Katalog {{$i}}
                                        </p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div style="width: 100px">
                                                <a href="{{ route('wykladowca.katalog_prac') }}"><button type="button" class="btn btn-sm btn-outline-secondary w-100">Zobacz</button></a>
                                                <a href="{{ route('wykladowca.katalog_prac') }}"><button type="button" class="btn btn-sm btn-outline-secondary w-100 mt-2">Edytuj</button></a>
                                            </div>
                                            <small class="text-muted">Edytowany przed {{ rand(1,60) }} min</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
