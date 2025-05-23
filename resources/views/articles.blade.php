
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>

    <h1>Testing Multitenancy</h1>

    <h2 style="color:red;">Articles</h2>

    @foreach ($articles as $article)
        <hr>
        <h3>{{$article->title}}</h3>
        <p>{{nl2br($article->content)}}</p>
    @endforeach

    <hr>

    <h2 style="color:red;">Tenants</h2>

     @foreach ($tenants as $tenant)
        <hr>
        <h3>{{$tenant->name}}</h3>
        <p><a href="http://{{$tenant->domain}}:7777/articles">{{$tenant->domain}}</a></p>
    @endforeach
    
    
</body>
</html>