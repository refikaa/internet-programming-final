<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php include 'vt.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sorgu=$vt->prepare("DELETE FROM kitaplar WHERE id = ?");
    $sorgu->execute(array($id));
    
}
header('Refresh:1; url=anasayfa.php');
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">

Swal.fire({

    icon: 'success',
    title: 'işlem tamamlandı',
    showConfirmButton: false,
    timer: 3000
})
</script>
    </body>
</html>
