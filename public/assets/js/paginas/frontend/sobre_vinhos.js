var holder = document.querySelector(".holder");
holder.setAttribute('dir', 'one');

function toggleread(val) {
    holder.setAttribute('dir', val);
}
$(".sidenav1 a").on('click', function (event) {

    $target = $(event.target);
    $(".tab").removeClass("active1");
    $target.addClass('active1');
});


$(".toggleread").on('click', function (e) {
    var elem = $(this).text();
    if (elem == "Read More") {
        //Stuff to do when btn is in the read more state
        $(this).text("Read Less");
       $(this).parent().parent().find(".ttext").slideDown();
   
    } else {
        //Stuff to do when btn is in the read less state
        $(this).text("Read More");
        $(this).parent().parent().find(".ttext").slideUp();
    }
});
