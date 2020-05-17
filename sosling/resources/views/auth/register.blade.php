<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Sosling')}}</title>
        
        <!-- Styles -->
        <style> 
            #frame {
                position: absolute;
                width: 100%;
                height: 100%;
                background: #E5E5E5;
                background: url("../img/login.png");
                background-size:100% 100%;
            }
            
            
            .block {
                height:90%;
                width:50%;
                opacity: 1.0;
                background: rgba(196, 196, 196, 0.35);
                border-radius: 30px;
                
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
            }
            
            .headline {
            /* Masuk ke SOSLING */
            position: absolute;
            width: 50%;
            height: 10%;
            align: center;
            text-align: center;
            
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 10%;
            line-height: 20%;
            
            margin:auto;
            
            color: #000000;
            }
            
            .center {
                margin:auto;
                align: center;
                text-align: center;
            }
            .left {
                margin:auto auto auto 0;
                text-align: left;
            }
            .right {
                margin:auto 0 auto auto;
                text-align: right;
            }
            </style>
    </head>
    
    <body>
        <div id="frame">

        </br>
        </br>
        
            <div id="child1" class="block center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="headline">
                                <h1>				
                                    PENDAFTARAN AKUN
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Akun') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                </br>
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </br>
                    </br>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat E-mail') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                </br>
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </br>
                    </br>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                </br>
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </br>
                    </br>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </br>
                    </br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                Sudah Punya Akun? </br> </br> <a class="btn" href="/login">Masuk »</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>