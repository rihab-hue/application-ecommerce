//calcule prix article
function calculateTotalAmount() {

    let totalAmount = 0;
    let unitPrice = 0;
    let cardFormValue = getformvalue('cardForm');
    for (const [key, value] of Object.entries(cardFormValue)) {
        if (key !== "quantity" &&
            key !== "totalAmount") {
            if (value) {
                unitPrice += parseInt(value)
            }
        }
    }
    if (cardFormValue.quantity) {
        totalAmount = parseInt(cardFormValue.quantity) * unitPrice;
        document.getElementById("totalAmount").value = totalAmount;
    }

}