function addToCart(articleId) {

    let cardFormValue = getformvalue('cardForm');
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    $.ajax({
        /* the route pointing to the post function */
        url: '/add-to-cart/' + articleId,
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {
            "_token": csrf,
            "cardData": cardFormValue
        },
        dataType: 'JSON',
        /* remind that 'data' is the response of the AjaxController */
        success: function(data) {
            redirectTo('/cart')
        }
    });

}
//stockage serveur
function getcard() {
    let panier = [];
    if (localStorage.key("panier")) {
        panier = JSON.parse(localStorage.getItem("panier"));
    }
    return panier;
}
//panier vide
function iscardempty() {
    return getcard().length === 0;
}