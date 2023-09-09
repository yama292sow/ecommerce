<pre>
    <?php
 var_dump($_POST["quantite"]); ?>
</pre>
<div class="container mt-5">
    <div class="row" style="margin-top: 90px;">
        <div class="col-md-4 mt-5 ">
            <img src="./images/<?= $p->image ?>" alt="" style="width: 100%;height:190px;">
        </div>
        <div class="col-md-8 mt-5 text-left">
            <H4><?= ucfirst($p->nom) ?></H4>
            <h1 class="text-warning">*****</h1>
            <p style="font-size: 25px;"><?= $p->prix ?></p>
            <p style="font-size: 25px;"><?= $p->description ?></p>
            <!-- //gerer la quantite des produit dans le panier -->

            <?php require_once("quantity.php"); ?>
            <a href="?page=panier&id=<?= $p->id; ?>" class="btn btn-success btn-lg"><i class="fa-solid fa-cart-shopping"
                    style="color: white;"></i>&nbsp;Ajouter Panier</a>


            <div class="row mt-4">
                <p style="font-size: 20px;">Suivre <img src="fac3.webp" alt="" style="width: 18px;height:15px;"
                        class="mb-1"><img src="in.png" alt="" style="width: 27px;height:27px;" class="mb-1"></p>

            </div>
        </div>


    </div>


</div>

<script src="models/script.js"></script>

<!-- <script>
let input = document.getElementById("input");

function nbrProduitPanier() {
    let moins = 0;
    let plus = 0;
    let quantite = 1;
    let result;
    if (isset($_SESSION['user']) && isset($_GET['id'])) {
        if (result == plus) {
            quantite += 1;
            input.innerText = quantite;
        } else {
            quantite -= 1;
            input.innerText = quantite;
        }
    }
}
</script> -->