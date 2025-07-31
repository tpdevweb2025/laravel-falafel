<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut ullam, quibusdam vel libero debitis laborum magnam illum expedita earum blanditiis laboriosam inventore, praesentium tempora explicabo maxime natus? In neque assumenda voluptatem saepe laudantium! Sapiente odit nesciunt dolor inventore ipsam deserunt rem, soluta distinctio hic nobis.</p>
    <h2>{{ $user->email }}</h2>
    <div>
        <ul>
            @foreach ($fruits as $fruit)
                <li>{{ $fruit }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
