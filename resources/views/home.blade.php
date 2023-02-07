<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>RACINE DU SITE</h1>

    @extends('./layout/app')

    @section('content')
        <p>le contenu</p>
        {{-- GESTION DES ERREURS PAR LARAVEL MEME --}}

        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


        {{-- GESTION PERSONNALISEE DES ERREURS --}}
        {{-- @if ($errors)
            @error('nom')
                <p>veuillez vérifier le contenu du champ nom !</p>
            @enderror
            @error('email')
                <p>le champ "email est requi !!!"</p>
            @enderror
        @endif --}}


        <form action="/home" method="POST">
            @method('post')
            @csrf
            <input type="text" placeholder="Nom" name="nom" value={{ old('nom') }}>
            <input type="email" placeholder="Email" name="email" value={{ old('email') }}>
            <button type="submit">Send</button>
        </form>
    @endsection

</body>

</html>
