@extends('layouts.arpas_dark')


@section('content')
<div class="container p-5">
    <h1 class="my-4 text-center">Dodanie prac</h1>
    <div class="card mb-4">
        <div class="card-body">

            <div class="container d-flex">

                <div class="container bg-dark w-50 p-5 m-5" >
                    <p class="text-white text-center">&lt;podgląd pracy&gt;</p>
                </div>

                {{--    Form --}}

                <div class="w-50">
                    <form method="POST" action="{{ route('student.dodanie_do_bazy_danych') }}">
                        @csrf
                        <legend>Panel dodania prac</legend>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Autor:</label>
                            <select name="author" id="disabledSelect" class="form-select">
                                <option>{{ Auth::user()->name }}</option>
                            </select>
                            <input type="hidden"  name="author_id" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Nazwa pracy:</label>
                            <input name="title" id="disabledSelect" class="form-control"> {{-- TODO: Add name   --}}
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Katalog:</label>
                            <select name="subject_category" id="disabledSelect" class="form-select">
                                <option>Techniki Uczenia Maszyn</option>
                                <option>Zaawansowane aplikacje mobilne</option>
                                @for ($i = 1; $i < 12; $i++)
                                    <option>Katalog {{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Rodzaj:</label>
                            <select name="type" id="disabledSelect" class="form-select">
                                <option>Sprawdzian</option>
                                <option>Egzamin</option>
                                <option>Kartkówka</option>
                                <option>Poprawa oceny</option>
                                <option>Inne</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Dodaj pliki</label>
                            <input name="attached_files" class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Opis pracy</label>
                            <textarea required name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Komentarz (studenta)</label>
                            <textarea name="student_comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Wysłać pracę</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
