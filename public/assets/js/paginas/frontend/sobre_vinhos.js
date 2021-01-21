var holder = document.querySelector(".holder");

function toggle(val) {
    holder.setAttribute('dir', val);
    element.classList.add("active1");
}
$(".sidenav1 a").on('click', function(event) {

    $target = $(event.target);
    $(".tab").removeClass("active1");
    $target.addClass('active1');
});

$(document).ready(function() {
    $("#toggle").click(function() {
        var elem = $("#toggle").text();
        if (elem == "Read More") {
            //Stuff to do when btn is in the read more state
            $("#toggle").text("Read Less");
            $("#text").slideDown();
        } else {
            //Stuff to do when btn is in the read less state
            $("#toggle").text("Read More");
            $("#text").slideUp();
        }
    });
});