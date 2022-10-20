<?php
    $_SESSION['koleksi'] = [[]];
    $result = mysqli_query($conn,"SELECT * FROM galeri");

    while($row = mysqli_fetch_assoc($result)){
        for($i = 0; $i < count($_SESSION['koleksi']); $i++){
            if($i == count($_SESSION['koleksi'])-1){
                if(count($_SESSION['koleksi'][$i])!=4){
                    array_push($_SESSION['koleksi'][$i], $row);
                }else{
                    array_push($_SESSION['koleksi'], []);
                }
            }
        }
    }
?>