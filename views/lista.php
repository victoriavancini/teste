<DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css">
        <a href="<?php echo base_url(); ?>static/css/teste.css" />
    </head>
    
<body>
    <?php
        foreach($usuarios as $u){
            echo "<h1>" . $u->nome . "</h1>";
            }
    ?>
</body>    
</html>
