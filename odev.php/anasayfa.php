<?php include 'vt.php';session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>kitaplar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
         crossorigin="anonymous">
    </head>
    <body>
        
    <?php
        ?>
        <div class="container mt-3">
        <h1>Kitaplar</h1>
        <?php
        $kitaplar = $vt->query('SELECT*from kitaplar')->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table class="table table-bordered table-dark table-hover">
            <tr>
                <th>Sil</th>
                <th>ID</th>
                <th>Kitap Adı</th>
                <th>Yazar</th>
                <th>Durum</th>
                <th>Güncelle</th>
            </tr>
            <?php
             foreach($kitaplar as $kitap) { ?>
             <tr>
                <td class="text-center"><a on Click ="sil()" href="sil.php?id=<?=$kitap['id'];?>" class="btn btn-danger">Sil</a></td>
                <td><?=$kitap['id']; ?></td>
                <td><?=$kitap['Ad']; ?></td>
                <td><?=$kitap['Yazar']; ?></td>
                <td><?=$kitap['durum']; ?></td>
                <td><a href="#" class="btn btn-primary">Güncelle</a></td>
             </tr>              
    <?php         }
            ?>
        </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            function sil(id){
                Swal.fire({
  title: 'silmek istediğinize emin misiniz?',
  text: "bu işlem geri alınamaz",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'iptal'
}).then((result) => {
  if (result.value) {
    window.location.href='sil.php?id='+id;
  }
})
            }
           
        </script>
       
        
    </body>

</html>