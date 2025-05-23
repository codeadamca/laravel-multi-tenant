
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

    <p>The articles table is in the tenant databases.</p>

    @foreach ($articles as $article)
        <hr>
        <h3>{{$article->title}}</h3>
        <p>{{nl2br($article->content)}}</p>
    @endforeach

    <hr><hr>

    <h2 style="color:red;">Tenants</h2>

    <p>Tenants are in the landlord table and loaded using a special model.</p>

     @foreach ($tenants as $tenant)
        <hr>
        <h3>{{$tenant->name}}</h3>
        <p><a href="http://{{$tenant->domain}}:7777/articles">{{$tenant->domain}}</a></p>
    @endforeach

    <hr><hr>

    <h2 style="color:red;">Admins</h2>

    <p>Admin accounts are in the landlord table and loaded using a standard model.</p>

     @foreach ($admins as $admin)
        <hr>
        <h3>{{$admin->name}}</h3>
        <p><a href="mailto:{{$admin->email}}">{{$admin->email}}</a></p>
    @endforeach
    
    
</body>
</html>