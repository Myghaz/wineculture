<html>

<head>
    @extends ('includes.frontend.head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/includes/frontend/settings.css') }}">
</head>
<body>
<span onclick="switchTheme()" id="toggle" class="toggle"></span>
        <span class="wave"></span>
    <script src="{{ URL::asset('assets/js/layouts/frontend/settings.js') }}"></script>
</body>
</html>