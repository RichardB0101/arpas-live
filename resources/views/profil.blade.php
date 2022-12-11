@extends('layouts.arpas_dark')

@section('body-class', 'd-flex flex-column h-100')
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5 ">
            <h1 class="my-4 text-center">Profil</h1>

            <div class="row ">
                <div class="col-lg-4 ">
                    <div class="card mb-4 shadow bg-body rounded">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                 alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                            <p class="text-muted mb-1">Administrator</p>
                            <p class="text-muted mb-4">Uniwersytet w Białymstoku</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary">Ustawienia</button>

                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0 shadow bg-body rounded">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <p class="text-center mt-3">Ostatnio wysłane</p>
                                @for($i = 1; $i <= 4; $i++)
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fa-solid fa-book"></i>
                                        <div class="d-flex flex-row">
                                            <p class="mb-0 me-2">Praca kontrolna nr.{{ $i }}</p>
                                            <span class="badge bg-secondary">Do oceny</span>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="card mb-4 shadow bg-body rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Imię i nazwisko</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nr. kontaktowy 1</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">+48 123456789</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nr. kontaktowy 2</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"> +48 987654321 </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Adres</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Pilicka 25, Warszawa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="card mb-4 mb-md-0 shadow bg-body rounded">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">zaliczenia</span>
                                        Semestr zimowy 2022/2023
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">Programowanie we frameworkach</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                             aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Seminarium dyplomowe</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%"
                                             aria-valuenow="72"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Techniki uczenia maszyn</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%"
                                             aria-valuenow="89"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Usługi w chmurze obliczeniowej</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                             aria-valuenow="15"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Zaawansowane aplikacje mobilne</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%"
                                             aria-valuenow="66"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0 shadow bg-body rounded">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">zaliczenia</span>
                                        Semestr letni 2022/2023
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">Algorytmy i struktury danych</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                             aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Inżynieria oprogramowania</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"
                                             aria-valuenow="25"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Komunikacja człowiek- maszyna</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%"
                                             aria-valuenow="89"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Metody statystyczne i
                                        zastosowania</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%"
                                             aria-valuenow="55"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Programowanie w Internecie</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%"
                                             aria-valuenow="66"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
