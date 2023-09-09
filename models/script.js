// let btnPlus = document.querySelector('.plus');
// let btnMoins = document.querySelector('.moins');

// btnPlus.addEventListener('click', incrementQuantity());
function incrementQuantity() {
  document.querySelector(".qty").value =
    parseInt(document.querySelector(".qty").value) + 1;
  subtotal();
}

function decrementQuantity() {
  if (document.querySelector(".qty").value > 0) {
    document.querySelector(".qty").value =
      parseInt(document.querySelector(".qty").value) - 1;
    subtotal();
  }
}

function subTotal() {
  let price = parseInt(document.querySelector(".price").innerText);
  let qty = parseInt(document.querySelector(".qty").value);
  let subt = price * qty;

  document.querySelector(".subtotal").innerText = subt + "fcfa";
}
