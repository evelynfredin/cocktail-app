const confirmation = document.querySelector("#confirmation");

if (confirmation !== null) {
    setTimeout(function () {
        confirmation.remove();
    }, 3000);
}
