@extends('layouts.main')

@section('first-container')
    @if(session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('failure'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failure') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection

@section('second-container')
    <!-- Carousel wrapper -->
    <div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        </div>
  
        <!-- Inner -->
        <div class="carousel-inner rounded-5">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="img/northern-norway.jpeg" class="d-block w-100" alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Coming Soon! RR Hotel in Northern Norway</h5>
                    <p>Be the person to witness the mesmerizing aurora with your significant other.</p>
                </div>
            </div>
  
            <!-- Single item -->
            <div class="carousel-item">
                <img src="img/dolomites.jpeg" class="d-block w-100" alt="Canyon at Nigh" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>RR Hotel @ Dolomites' New Limited Special Offers</h5>
                    <p>Pay 60% for three nights in the dolomites.</p>
                </div>
            </div>
  
            <!-- Single item -->
            <div class="carousel-item">
                <img src="img/niagara.jpeg" class="d-block w-100" alt="Cliff Above a Stormy Sea" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>RR Apartment @ Niagara's Thanksgiving Party</h5>
                    <p>Come and join our biennial thanksgiving feast.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->
  
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
@endsection

@section('third-container')
    <div class="text-center mt-5">
        <h2 class="text-primary">Why RR?</h2>
    </div>
    <hr class="hr hr-blurry" />
@endsection