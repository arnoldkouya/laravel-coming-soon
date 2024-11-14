
<!DOCTYPE html>
<html>
<head>
    <title>Configuration de LaraComingSoon</title>
</head>
<body>
    <h1>Configuration de LaraComingSoon</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ url('coming-soon/config') }}" method="POST">
        @csrf
        <label for="type">Type de maintenance :</label>
        <input type="text" name="type" id="type" value="{{ $settings->type ?? '' }}" required><br><br>

        <label for="image">URL de l'image :</label>
        <input type="text" name="image" id="image" value="{{ $settings->image ?? '' }}"><br><br>

        <label for="message">Message :</label>
        <textarea name="message" id="message">{{ $settings->message ?? '' }}</textarea><br><br>

        <label for="allowed_ip">IP Autorisées (séparées par des virgules) :</label>
        <input type="text" name="allowed_ip" id="allowed_ip" value="{{ $settings->allowed_ip ?? '' }}"><br><br>

        <label for="state">Activer la maintenance :</label>
        <input type="checkbox" name="state" id="state" value="1" {{ $settings->state ? 'checked' : '' }}><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
