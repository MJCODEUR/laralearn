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


            <div class="row mt-2">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <div class="card-body">
                        <form action="{{route('articles.update', $article->id) }}" method="post" class="form-product">
                            @method('put')
                            @csrf
                            <h4>Editer un article</h4>
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input class="form-control" type="text" name="titre"
                                    value={{ $article->titre }}>

                                @error('titre')
                                    <div class="text text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <textarea class="form-control mt-2" name="description" value={{ $article->titre }}>
                                    {{ $article->description }}
                                </textarea>
                            </div>
                            @error('description')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <button class="btn btn-success" type="submit">Actualiser</button>
                        </form>
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>

        </div>
    @endsection

</body>

</html>
