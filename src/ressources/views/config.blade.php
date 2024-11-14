<!DOCTYPE html>
<html>
<head>
    <title>Configuration de LaraComingSoon</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">Configuration de LaraComingSoon</h1>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('coming-soon/config') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <div class="form-group">
            <label for="type">Type de maintenance :</label>
            <select name="type" id="type" class="form-control">
                @foreach(\Enums\ComingSoonTypeEnum::getComingSoonTypes() as $type)
                    <option value="{{ $type }}" {{ $settings->type == $type ? 'selected' : '' }}>
                        {{ \Enums\ComingSoonTypeEnum::getComingSoonType($type) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">URL de l'image :</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ $settings->image ?? '' }}">
        </div>

        <div class="form-group">
            <label for="message">Message :</label>
            <textarea name="message" id="message" class="form-control">{{ $settings->message ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="allowed_ip">IP Autorisées (séparées par des virgules) :</label>
            <input type="text" name="allowed_ip" id="allowed_ip" class="form-control" value="{{ $settings->allowed_ip ?? '' }}">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" name="state" id="state" class="form-check-input" value="1" {{ $settings->state ? 'checked' : '' }}>
            <label for="state" class="form-check-label">Activer la maintenance</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>