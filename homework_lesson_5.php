<html>
<head>
    <title>Photo Gallery</title>
</head>
<body>
   <div width=1024px;>
       <h3>Photo Gallery</h3>
       <?php
       include "config.php";
       $sql = "select * from images";
       $sqlnewseen = "update images set count_click =count_click+1 where id=";
       $gallery = mysqli_query($connect,$sql);
       
       while($imgArr = mysqli_fetch_assoc($gallery)) {
            $path = $imgArr['resized_path']."\\".$imgArr['name'].".jpg";
            $path2 = $imgArr['fullsize_path']."\\".$imgArr['name'].".jpg";?>
            
            <a href="<?=$path2?>" target="_blank"><img src="<?=$path?>"></a>  
            <p>Количество кликов</p>
            <p><?=$imgArr['count_click']?></p>
       <?php
       };
       ?>       
   </div>
</body>
</html>

