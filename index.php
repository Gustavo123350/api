<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot de Data e Hora</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o arquivo CSS externo -->
</head>
<body>
<div class="container">
    <h1>Bot de Data e Hora em PHP e JS</h1>
    <div id="datetime">
        <?php
        date_default_timezone_set('America/Fortaleza'); // Defina seu fuso horário
        echo date('d/m/Y H:i:s'); // Formato de data e hora
        ?>
    </div>
</div>
<script>
    function fetchDateTime() {
        fetch('datetime.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('datetime').innerText = data.datetime;
            })
            .catch(error => console.error('Error fetching datetime:', error));
    }

    // Atualizar a data e hora a cada segundo
    setInterval(fetchDateTime, 1000);
</script>
</body>
</html>
