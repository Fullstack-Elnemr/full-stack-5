/*global $, jQuery, alert*/
$('.carousel').carousel({
    interval: 2500
});

function myFunction(x) {
       x.classList.toggle("change");
//       .toggle to active
}
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "260px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
