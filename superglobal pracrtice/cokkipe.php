  <?php
    $cokkie="zeeshan";
    $value="pass123@";
    setcookie($cokkie,$value,time()+(84600*30),'/');
    if(!isset($_COOKIE[$cokkie])){
        echo "cokkie $cokkie is  set";
    }
    else
        echo "cokkie $cokkie is not set";
    setcookie("zeeshan","",time()-3600,"/");

    
    
    ?>
