<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>,j code laravel</title>
</head>

<body>
    @extends('./layout/app')

    @section('content')
        <div class="card mt-2">
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <form action="{{route('articles') }}" method="POST" class="form-product">
                    @method('post')
                    @csrf
                    <h4>Enregidtrer un article</h4>
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input class="form-control" type="text" placeholder="Titre de l'article" name="titre"
                            value={{ old('titre') }}>

                        @error('titre')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control mt-2" placeholder="description"  name="description"
                        value={{ old('description') }}></textarea>
                    </div>
                    @error('description')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    <button class="btn btn-success" type="submit">Ajouter</button>
                </form>
                <ul class="list-group">
                    @forelse ($articles as $article)
                        <li class="list-group-item mt-2">
                            <a href="{{route('articles.show', $article->id) }}" class="title">{{ $article->titre }}</a>
                           <div class="description"> {{ $article->description }}</div>
                        </li>
                    @empty

                        <p class="text text-infos"> Aucun article trouvé</p>
                    @endforelse

                </ul>

            </div>
        </div>
    @endsection

</body>

</html>
