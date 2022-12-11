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
            <div class="album pb-5 bg-light">
                <div class="container">
                        <div class="d-flex p-0 justify-content-between align-items-center container mb-3">
                            <div class="btn-group-sm">
                                <a href="{{ route('wykladowca.dodanie_katalogu') }}"><button type="button" class="btn btn-sm btn-outline-secondary" style="font-size: 1rem;"><i class="fa-solid fa-folder-plus text-dark me-2" style="font-size: 1.5rem;"></i>Dodaj nowy katalog</button></a>
                            </div>
                            <div>
                                <form class="d-none d-md-inline-block form-inline ms-auto me-0 my-2 my-md-0">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Szukaj" aria-label="Szukaj" aria-describedby="btnNavbarSearch" />
                                        <button class="btn btn-dark" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        @if(isset($catalogs))
                         @foreach($catalogs as $catalog)
                            <div class="col">
                                <div class="card shadow-sm">

                                    <div class="card-body">
                                        <div class="btn-group w-100 d-flex justify-content-end">
                                            <div>
                                                <form action="{{ route('del_catalog', $catalog->id) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{ $catalog->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                                                </form>
                                            </div>
                                        </div>

                                        <p class="card-text my-4" style="font-size: 1.5em">
                                            <i class="fa-solid fa-folder me-2" style="font-size: 1.5em"></i>{{ $catalog->name }}
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
                        @endforeach
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
