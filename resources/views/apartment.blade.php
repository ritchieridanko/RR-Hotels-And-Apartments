@extends('layouts.main')

@section('first-container')
    <div class="text-center">
        <h4 class="text-primary">Select by Unit Type</h4>
    </div>
    <hr class="hr hr-blurry" />

    <!-- Unit Types -->
    <div class="container px-4">
        <div class="row gx-4 gy-4">
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/apartment-1.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">4 Bedrooms</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/apartment-4.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">3 Bedrooms</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/apartment-2.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">2 Bedrooms</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/apartment-3.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">1 Bedroom</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Unit Types -->
@endsection

@section('second-container')
    <div class="text-center mt-5">
        <h4 class="text-primary">Select by Location</h4>
    </div>
    <hr class="hr hr-blurry" />

    <!-- Locations -->
    <h5>Europe</h5>
    <div class="container px-4">
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">London</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Berlin</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Rome</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Warsaw</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Florence</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Amsterdam</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Paris</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Budapest</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Madrid</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Barcelona</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Stuttgart</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Marseilles</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Helsinki</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Prague</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Saint Petersburg</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Istanbul</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Munich</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self"></a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self"></a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self"></a>
            </div>
        </div>
    </div>
    <h5 class="mt-5">Americas</h5>
    <div class="container px-4">
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">New York</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Kansas City</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">New Orleans</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">San Francisco</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">San Juan</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Orlando</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Buenos Aires 1</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Buenos Aires 2</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Nashville</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Fort Worth</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Vancouver</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self"></a>
            </div>
        </div>
    </div>
    <h5 class="mt-5">Asia Pacific</h5>
    <div class="container px-4 mb-5">
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Tokyo 1</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Tokyo 2</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Melbourne</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Manila</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Bangkok</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Incheon</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self"></a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self"></a>
            </div>
        </div>
    </div>
    <!-- Locations -->
@endsection