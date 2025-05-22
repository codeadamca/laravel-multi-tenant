
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>

    <h1>Articles</h1>

    @foreach ($articles as $article)
        <hr>
        <h2>{{$article->title}}</h2>
        <p>{{nl2br($article->content)}}</p>
    @endforeach
    
</body>
</html>