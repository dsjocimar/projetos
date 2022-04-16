<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro programa em PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <?php
        for ($i = 0; $i < 10; $i++){
            print('Linha número '. $i."<br/>");  
        }
    ?>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        alert("Woohoo!");
    });
</script>
</html>