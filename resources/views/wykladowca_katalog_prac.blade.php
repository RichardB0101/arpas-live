<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Prace</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('../css/ela-styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('dashboard') }}">ARPAS</a>

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Szukaj" aria-label="Szukaj" aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-gray me-2" id="">{{ Auth::user()->name }}</span><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
    </nav>
</div>
<a class="nav-link" href="">
    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
    Charts
</a>
</div>
</div>
</nav>

<div id="layoutSidenav_content">
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
                                    <th><button class="btn btn-primary">Przejdź</button></th>

                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; 2022</div>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
</body>
</html>
