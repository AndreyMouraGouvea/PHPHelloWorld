<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body{
    height: 900px;
    flex-direction: column;
    display: flex;
}
.imagem img{
    width: 500px;
    height: auto;
}
#imagem{
    width: 500px;
}
#section{
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
}
#section2{
    display: flex;
    justify-content: flex-end;
    margin-top: 10%;
    align-items: center;
    /* background-color: <?php echo $fundo; ?>; */
}


</style>
<body>
    <section id="section">
    <?php

    ini_set('default_charset', 'utf-8');
    $nome =  "Andrey";
    $idade = 15;
    $email = "andreygouveia.05@gmail.com";
    
    echo '<h1 id="text">Olá <font color="#000060">'.$nome.'</font>, bem vindo! <br>
    Você tem <font color="#ef6950">'.$idade.'</font> anos, seu email é: "<font color="#6888c9">'.$email.'</font>"</h1>';
    
    ?>
    </section>

    <section id="section2">
        <?php
            $fundo = "red";
            $name = "Andrey Moura";
            $imagem = "https://wallpaperaccess.com/full/2096094.jpg";
            
            // fica certinho, mas a cor está errada.
            echo '<background-color="'.$fundo.'"><h1 style="margin-left: 30%;">'.$name.'<br></h1><img src="'.$imagem.'" id="imagem">';
            // sem background, mas não fica no meio.
            // echo '<h1>'.$name.'<br><img src="'.$imagem.'" id="imagem"></h1>';
            // echo '<h1>'.$name.'</h1><br><img src="'.$imagem.'" id="imagem">';

        ?>
    </section>
   

    
</body>
</html>