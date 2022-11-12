@extends('layouts.arpas-home')


@section('main_content')
    <h2 class="text-center mb-5">Ocenianie prac (wykładowca)</h2>
    <hr>
    <div class="container d-flex">

    <div class="container bg-dark w-50 p-5 m-5" >
        <p class="text-white text-center">&lt;podgląd pracy&gt;</p>
    </div>
    
    {{--    Form --}}

    <div class="w-50">
        <form>
            @csrf
        <legend>Panel oceny prac</legend>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Autor:</label>
            <select id="disabledSelect" class="form-select">
                <option>Jan Kowalski</option>
                @for ($i = 1; $i < 24; $i++)
                    <option>Student {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Nazwa pracy:</label>
            <select id="disabledSelect" class="form-select">
                <option>Sprawozdanie Techniki Uczenia Maszyn</option>
                @for ($i = 1; $i < 12; $i++)
                    <option>Praca nr.{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Katalog:</label>
            <select id="disabledSelect" class="form-select">
                <option>Techniki Uczenia Maszyn</option>
                <option>Zaawansowane aplikacje mobilne</option>
                @for ($i = 1; $i < 12; $i++)
                    <option>Katalog {{ $i }}</option>
                @endfor
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
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ocena</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="-">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Komentarz (studenta)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Uwagi oceniającego (wykladowcy)*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Ocenić pracę</button>

        </form>
    </div>

</div>
<hr>
@endsection
