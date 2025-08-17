<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
    <script>
        let locale = localStorage.getItem('locale') || '{{ config('app.locale') }}';
        window.location.href = '/' + locale;
    </script>
</head>
<body>
<p>Redirecting to your preferred language...</p>
</body>
</html>
