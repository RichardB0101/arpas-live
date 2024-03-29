@extends('layouts.arpas_dark')


@section('content')
<div class="container p-5">
    <h1 class="my-4 text-center">Ocenianie prac</h1>
    <div class="card mb-4">
        <div class="card-body">

            <div class="container d-flex">

                <div class="container bg-dark w-50 p-5 m-5" >
                    <p class="text-white text-center">&lt;podgląd pracy&gt;</p>
                </div>

                {{--    Form --}}

                <div class="w-50">
                    <form method="POST" action="{{ route('wykladowca.ocenianie_do_bazy_danych') }}">
                        @csrf
                        <legend>Panel oceny prac</legend>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Autor:</label>
                            <select id="disabledSelect" class="form-select">
                                <option>{{ $prace->author_name }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Nazwa pracy:</label>
                            <select id="disabledSelect" class="form-select">
                                <option>{{ $prace->title }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Katalog:</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Techniki Uczenia Maszyn</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Rodzaj:</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Sprawdzian</option>
                                <option>Egzamin</option>
                                <option>Kartkówka</option>
                                <option>Poprawa oceny</option>
                                <option>Inne</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Opis pracy</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ocena</label>
                            <input name="grade" type="number" class="form-control" id="exampleFormControlInput1" value="{{ $prace->grade ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Komentarz (studenta)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Uwagi oceniającego (wykladowcy)*</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <input type="hidden"  name="assignment_id" value="{{ $prace->id }}">
                        <button type="submit" class="btn btn-primary">Ocenić pracę</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
