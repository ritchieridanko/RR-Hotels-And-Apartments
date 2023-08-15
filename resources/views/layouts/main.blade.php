<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"/>

    <title>RR Hotels & Apartments | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('first-container')
    </div>
    
    <div class="container mt-4">
        @yield('second-container')
    </div>

    <div class="container mt-4">
        @yield('third-container')
    </div>

    <div class="container mt-4">
        @yield('fourth-container')
    </div>

    @include('partials.footer')

    <section id="login-form">
        <!-- Login Modal -->
        <div class="modal top fade" id="login-modal" tabindex="-1" aria-labelledby="login-modalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
            <div class="modal-dialog modal-md" style="border: 0.7rem solid #3b71ca; border-radius: 3%">
                <div class="modal-content">
                    @include('partials.login')
                </div>
            </div>
        </div>
    </section>

    <section id="signup-form">
        <!-- Signup Modal -->
        <div class="modal top fade" id="signup-modal" tabindex="-1" aria-labelledby="signup-modalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
            <div class="modal-dialog modal-md" style="border: 0.7rem solid #3b71ca; border-radius: 3%">
                <div class="modal-content">
                    @include('partials.signup')
                </div>
            </div>
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
</body>
</html>