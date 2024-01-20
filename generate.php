<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $image = imagecreatefromjpeg("theme.jpg");
    $color = imagecolorallocate($image, 19, 21, 22);
    $font = "Arial.ttf";
    // this is going to be the name of the certificate 
    imagettftext($image, 70, 0, 820, 850, $color, $font, $name);  // 70 is the font size and 0 is the angle of the text and 910, 850 are the coordinates of the text
    imagettftext($image, 25, 0, 1299, 1200, $color, $font, $name); 
    imagejpeg($image, "certificate/$name.jpg");
    imagedestroy($image);
    echo "<script>alert('Certificate generated successfully')</script>";
    echo "<script>window.open('certificate/$name.jpg')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
