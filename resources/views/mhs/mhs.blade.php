<center>
        <h1> Selamat Pagi </h1>
        <h2> Silahkan Login pakai email si.ukdw.ac.id</h2>
        </center>
        </nav>

    
                 

<x-guest-layout>

    <x-jet-authentication-card>

        <x-slot name="logo">

            <x-jet-authentication-card-logo />

        </x-slot>

        <x-jet-validation-errors class="mb-4" />
      

            
    </head>

            
        
        @if (session('status'))

            <div class="mb-4 font-medium text-sm text-green-600">

                {{ session('status') }}

            </div>

        @endif

        <title>Login</title>
       
                 

        <form method="POST" action="{{ route('login') }}">

            @csrf
            <div>

                <x-jet-label value="Email" />

                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

            </div>

            <div class="mt-4">

                <x-jet-label value="Password" />

                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            </div>

            <div class="block mt-4">

                <label class="flex items-center">

                    <input type="checkbox" class="form-checkbox" name="remember">

                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>

                </label>

            </div>

  

            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">

                        {{ __('Forgot your password?') }}

                    </a>
                   
                @endif
        
                <x-jet-button class="ml-4">

                    {{ __('Login')}}

                </x-jet-button>
                <x-jet-button class="ml-4">
                @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        </x-jet-button>

            </div>

            <div class="flex items-center justify-end mt-4">

              
            </div>

        </form>

    </x-jet-authentication-card>

</x-guest-layout>
           

                
          
             
            </div>
        </div>
    </body>
</html>
