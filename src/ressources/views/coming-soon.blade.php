<!DOCTYPE html>
<html>
<head>
    <title>Maintenance - LaraComingSoon</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height: 100vh; background-color: #f8f9fa;">
<div class="text-center">
    @if (!empty($image))
        <img src="{{ $image }}" alt="Maintenance Image" class="img-fluid mb-4" style="max-width: 300px;">
    @endif

    <h1 class="mb-3">{{ $type ?? 'Maintenance' }}</h1>
    <p class="lead">{{ $message ?? 'Notre site est actuellement en maintenance. Merci de votre patience !' }}</p>
</div>
</body>
</html>
