<?php
  if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['n1']) && isset($_GET['n2'])){
      $n1 = (int)$_GET['n1'];
      $n2 = (int)$_GET['n2'];
      $s = $n1 * $n2;
      echo 'GET metodu : Sonuç = '.$s;
    }else{
      echo 'Geçersiz istek';
    }
  }else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['n1']) && isset($_POST['n2'])){
      $n1 = (int)$_POST['n1'];
      $n2 = (int)$_POST['n2'];
      $s = $n1 + $n2;
      echo 'Post metodu ile çağrı yapıldı. Sonuç = '.$s;
    }else{
      $arr = array(
        array('Sedef', 'Hasan', 'Güzin', 'Ahmet', 'Gizem', 'Murat')
      );
      echo json_encode($arr);
    }
  }
?>
