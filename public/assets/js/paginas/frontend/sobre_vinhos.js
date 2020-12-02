if (window.innerWidth > 1109){
document.addEventListener("DOMContentLoaded", function (event) {
    let currentParagraphName = document.getElementById('current-paragraph-name');
    let currentParagraphPercent = document.getElementById('current-paragraph-percent');

    new ScrollProgress.Init(
        "#cursor",
        "menu",
        progress => {
            var janelah=($(window).scrollTop())
            janelah= janelah/100;
            janelah= janelah-4;
            if (-1>janelah){
                document.getElementById('home').style.top='90px'; 
            }else{
                document.getElementById("home").style.top ='-200px';
            }
            document.getElementById("footer").style.width = janelah+"%";    
        },
        id => {
            document.querySelectorAll('a[href*="link"]').forEach(element => element.classList.remove('active-meny-item'));
            document.querySelector(`[href="#${id}"]`).classList.add('active-meny-item');
            window.scrollTo(window.scrollX, window.scrollY + 100);
        }
    );
});

$( "#cursor" ).click(function() {
    if  (document.getElementById("home").className == "active")
    {
        document.getElementById("home").className = "minimized";
        document.getElementById("cursor").className = "cursormin";
        document.getElementById("content").className = "contentmin";
    }else{
        document.getElementById("home").className = "active";
        document.getElementById("cursor").className = "cursoract";
        document.getElementById("content").className = "contentact";
    }
});
}