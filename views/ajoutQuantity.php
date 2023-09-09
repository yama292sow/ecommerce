<?php
$id = $_POST['id'];
$qty = $_POST['quantite'];
if(!empty($id) && !empty($qty)){

}else{
    header("?page=panier&id=<?= $p->id; ?>");
}
?>