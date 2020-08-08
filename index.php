<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captcha</title>
</head>
<body>
<main>
    <img src="Captcha.php" class="refresh-captcha"  alt="Captcha"/>
    <script>
        let refreshButton = document.querySelector(".refresh-captcha");
        refreshButton.onclick = function() {
            refreshButton.src = 'Captcha.php?' + Date.now();
        }
    </script>
</main>
</body>
</html>