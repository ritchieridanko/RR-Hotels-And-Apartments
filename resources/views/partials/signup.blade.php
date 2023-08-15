<div class="container w-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card" style="border-radius: 1rem;">
            <div class="card-body text-center">
                <div class="mb-md-3 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-primary text-uppercase">Sign Up</h2>
                    <p class="mb-5">Fill in the registration form below!</p>

                    <form action="/register" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" id="typeNameX" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus />
                            <label class="form-label" for="typeNameX">Full Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
                            <label class="form-label" for="typeEmailX">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required />
                            <label class="form-label" for="typePasswordX">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="true" id="typeTOSX" />
                            <label class="form-check-label" for="typeTOSX">
                            I agree with all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>

                        <button class="btn btn-primary btn-lg px-5" type="submit">Sign Up</button>
                    </form>

                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#!"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!"><i class="fab fa-google fa-lg"></i></a>
                    </div>
                </div>
                <div>
                    <p class="mb-0">Already have an account? <a href="#!" class="fw-bold" data-mdb-toggle="modal" data-mdb-target="#login-modal">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>