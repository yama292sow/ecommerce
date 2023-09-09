<button class="moins btn btn-info" id="1" style="width: 40px;height:48px;"
    onclick="decrementQuantity()"><b>-</b></button>

<input type="hidden" name="id" value="<?= $_GET["id"] ?>">
<input type="submit" readonly class="qty text-center btn btn-primary" name="quantite" value="0"
    style="width: 70px;height:48px;">

<button class="plus btn btn-info" id="1" style="width: 40px;height:48px;"
    onclick="incrementQuantity()"><b>+</b></button>