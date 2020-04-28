(function() {

    var preload = document.getElementById("preload");
    var loading = 0;
    var id = setInterval(frame, 40);

    function frame() {
        if(loading == 100){
            clearInterval(id);
            window.open("../pages/index.php","_self");
        }else{
            loading = loading +1;
            if(loading == 90){
                preload.style.animation="fadeout is ease";
            }
        }
    }
})();
