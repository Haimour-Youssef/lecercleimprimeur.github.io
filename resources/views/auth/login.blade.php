<x-layout.master title="Le cercle - L’imprimerie Marocaine">
    <div class="" id="carousel"></div>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" class="container my-1" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-secondary" href="#">Le Cercle</a></li>
                <li class="breadcrumb-item active" style="color: #D22F6F;" aria-current="page">Inscription / Connexion
                </li>
            </ol>
        </nav>
    </div>
    <main class="content-wrapper p-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-5 mt-3">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary col-12">
                                            {{ __('Connexion') }}
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-7 mt-3">
                    <div class="card">
                        <div class="card-header">{{ __('Inscription') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <label class="label " for="nom">
                                            Nom
                                        </label>
                                        <input type="text" id="nom" name="nom" value=""
                                            class="form-control @error('nom') is-invalid @enderror" maxlength="255" placeholder="Nom" autocomplete="off">

                                        @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <label class="label " for="prenom">
                                            Prenom
                                        </label>
                                        <input type="text" id="prenom" name="prenom" value=""
                                            class="form-control @error('prenom') is-invalid @enderror" maxlength="255" placeholder="Prenom"
                                            autocomplete="off">

                                        @error('prenom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="label " for="email">
                                            Email
                                        </label>
                                        <input type="email" id="e-mail" name="e-mail" value=""
                                            class="form-control @error('e-mail') is-invalid @enderror" maxlength="255" placeholder="Email"
                                            autocomplete="off">

                                        @error('e-mail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <label class="label " for="telephone">
                                            Telephone
                                        </label>
                                        <input type="text" id="telephone" name="telephone" value=""
                                            class="form-control @error('telephone') is-invalid @enderror" maxlength="255" placeholder="Telephone"
                                            autocomplete="off">

                                        @error('telephone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <label class="label " for="region">
                                            Region
                                        </label>
                                        <input type="text" id="region" name="region" value=""
                                            class="form-control @error('region') is-invalid @enderror" maxlength="255" placeholder="Region"
                                            autocomplete="off">

                                        @error('region')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="label " for="adresse">
                                            Adresse
                                        </label>
                                        <input type="text" id="adresse" name="adresse" value=""
                                            class="form-control @error('adresse') is-invalid @enderror" maxlength="255" placeholder="Adresse"
                                            autocomplete="off">

                                        @error('adresse')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <label class="label " for="ville">
                                            Ville
                                        </label>
                                        <input type="text" id="ville" name="ville" value=""
                                            class="form-control @error('ville') is-invalid @enderror" maxlength="255" placeholder="Ville"
                                            autocomplete="off">

                                        @error('ville')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12 col-lg-6">
                                        <label class="label " for="pays">
                                            Pays
                                        </label>
                                        <input type="text" id="pays" name="pays" value=""
                                            class="form-control @error('pays') is-invalid @enderror" maxlength="255" placeholder="Pays"
                                            autocomplete="off">

                                        @error('pays')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="label " for="password">
                                            Le mot de passe
                                        </label>
                                        <input type="password" id="password" name="password" value=""
                                            class="form-control @error('password') is-invalid @enderror" maxlength="255" placeholder="Le mot de passe"
                                            required="required" autocomplete="off">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="label " for="password">
                                            Confirmer le mot de passe
                                        </label>
                                        <input  id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                            class="form-control" maxlength="255" placeholder="Confirmer le mot de passe"
                                            required="required" autocomplete="off">
                                    </div>
                                </div>

                                <div class="row mb-0 mt-3">
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary col-4 ms-3">
                                            {{ __('Créer le compte') }}
                                        </button>

                                        {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link col-6" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout.master>
