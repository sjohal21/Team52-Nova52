// Checking if js is compiled
console.log("Checkout JS Loaded");

window.submitPayment = function() {
    // Putting all form inputs into payment form
    const FormAInputs = document.querySelectorAll('#DeliveryForm input');
    const FormASelect = document.querySelectorAll('#DeliveryForm select');

    FormAInputs.forEach(function(input) {
        //creating hidden input element for each input in Form A
        const hidden = document.createElement('input');
        hidden.type = "hidden";
        hidden.name = input.name;
        hidden.value = input.value;
        document.getElementById("PaymentForm").appendChild(hidden);
    });

    FormASelect.forEach(function(select) {
        //creating hidden select element for each select in Form A
        const SelectHidden = document.createElement('input');
        SelectHidden.type = "hidden";
        SelectHidden.name = select.name;
        SelectHidden.value = select.value;
        document.getElementById("PaymentForm").appendChild(SelectHidden);
    });

    //submitting payment form
    document.getElementById('PaymentForm').requestSubmit();

    //Console log for testing
    console.log("Payment Form Submitted");
}