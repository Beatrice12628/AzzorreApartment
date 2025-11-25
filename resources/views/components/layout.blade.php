<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'it'},
            'google_translate_element'
        );
    }
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body class="d-flex flex-column min-vh-100">
    <x-navbar />

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

</body>
</html>