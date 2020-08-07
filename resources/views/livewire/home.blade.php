<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Livewire Multiple Image Upload Example Tutorial - Tutsmake.com</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="mt-5 col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white"><h3>Laravel Livewire Upload Multiple Images Example - tutsmake.com</h3></div>
 
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
 
                        @livewire('upload-multiple-image')
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    @livewireScripts
</script>
</body>
</html>