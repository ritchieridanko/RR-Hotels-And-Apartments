<div class="container w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card" style="border-radius: 1rem;">
            <div class="card-body text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-primary text-uppercase">Login</h2>
                    <p class="mb-5">Please enter your email and password!</p>

                    <form action="/login" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus />
                            <label class="form-label" for="typeEmailX">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" required />
                            <label class="form-label" for="typePasswordX">Password</label>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a href="#!">Forgot Password?</a></p>

                        <button class="btn btn-primary btn-lg px-5" type="submit">Login</button>
                    </form>

                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#!"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                </div>
                <div>
                    <p class="mb-0">Don't have an account? <a href="#!" class="fw-bold" data-mdb-toggle="modal" data-mdb-target="#signup-modal">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>