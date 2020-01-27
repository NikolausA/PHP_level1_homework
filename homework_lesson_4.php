<html>
<head>
    <title>Photo Gallery</title>
</head>
<body>
   <div width=1024px;>
       <h3>Photo Gallery</h3>
       <?php
       $pictArray = scandir("resized");
       for ($i = 0; $i < count($pictArray); $i++):?>
       <?php
            if($i > 1):?>
            <a href="#"><img src="resized/<?=$pictArray[$i]?>" alt="photo"></a>
            <?php
            endif;?>
       <?php
       endfor;?>
       
   </div>
    <?php
       print_r($_GET);
    ?>
</body>
</html>