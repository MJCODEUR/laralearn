<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details article</title>
</head>

<body>
    @extends('./layout/app')

    @section('content')

        <div class="card mt-2">

            <div class="card-body">
                <button class="btn btn-infos"><a href="{{route('home')}}">back</a></button>

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <h1 class="title"> {{ $article->titre }}</h1>
                <div class="description"> {{ $article->description }}</div>
            </div>
            <div class="footer">

                <button class="btn btn-info"><a href="{{route('articles.edit', $article->id) }}">Editer</a></button>

                <form action="{{route('articles.delete', $article->id) }}" method="post">
                    @method('delete')
                            @csrf
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>

            </div>
        </div>
    @endsection

</body>

</html>
