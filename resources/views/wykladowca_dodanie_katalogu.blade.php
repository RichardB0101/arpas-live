@extends('layouts.arpas_dark')

@section('body-class', 'd-flex flex-column h-100')
@section('content')
    <div class="container p-5">
        <h1 class="my-4 text-center">Dodanie katalogu</h1>
        <div class="card mb-4">
            <div class="card-body">

                <div class="container d-flex justify-content-center">
                    <div class="w-50">
                        <form>
                            @csrf
                            <legend>Panel dodania katalogu</legend>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Nazwa katalogu:</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Przedmiot:</label>
                                <select id="disabledSelect" class="form-select">
                                    <option>Techniki Uczenia Maszyn</option>
                                    <option>Aplikacje Mobilne</option>
                                    <option>Algebra</option>
                                    <option>Programowanie w Internecie</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Opis katalogu</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-folder-plus text-white me-1" style="font-size: 1rem;"></i>Utworzyć</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
