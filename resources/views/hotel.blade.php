@extends('layouts.main')

@section('first-container')
    <div class="text-center">
        <h4 class="text-primary">Select by Room Type</h4>
    </div>
    <hr class="hr hr-blurry" />
    
    <!-- Room Types -->
    <div class="container px-4">
        <div class="row gx-4 gy-4">
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/executive-suite.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Presidential Suite</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/presidential-suite.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Royal Suite</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/royal-suite.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Executive Suite</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/deluxe-room.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Penthouse Suite</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gy-4">
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/penthouse-suite.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Deluxe Room</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/superior-room.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Superior Room</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/standard-room.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Standard Room</h5>
                    </div>
                </div>
            </div>
            <div class="col-md p-3">
                <div class="bg-image hover-overlay hover-zoom" role='button'>
                    <img src="img/economy-room.jpeg" class="w-100" />
                    <div class="mask d-flex flex-column justify-content-center align-items-center" style="background: hsla(216, 98%, 52%, 0.3)">
                        <h5 class="text-light user-select-none">Economy Room</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Types -->
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
                <a href="#!" class="link-secondary" target="_self">Porto</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Sitges</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Berlin</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Dolomites</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Amsterdam</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Santorini</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Dublin</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Bergen</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Venice</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Nice</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Naples</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Lyon</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Prague</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Moscow</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Innsbruck</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Transylvania</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Budapest</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Edinburgh</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary disabled" target="_self">Tromso (Soon)</a>
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
                <a href="#!" class="link-secondary" target="_self">Havana</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Cancun</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">San Juan</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Rio De Janeiro</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Panama City</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Puerto Vallarta</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Buenos Aires</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Guadalajara</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Miami</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Porto Alegre</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Medellin</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Los Angeles</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Montreal</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Atlanta</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Lima</a>
            </div>
        </div>
    </div>
    <h5 class="mt-5">Asia Pacific</h5>
    <div class="container px-4 mb-5">
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Bangkok</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Hongkong</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Shanghai</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Singapore</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Osaka</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Bali</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Tahiti</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Sydney</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Phuket</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Kuala Lumpur</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Busan</a>
            </div>
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Cebu</a>
            </div>
        </div>
        <div class="row g-4 py-2">
            <div class="col-md">
                <a href="#!" class="link-secondary" target="_self">Auckland</a>
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
    <!-- Locations -->
@endsection