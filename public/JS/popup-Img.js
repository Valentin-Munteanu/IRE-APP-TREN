function openModal() {
    let modal = document.getElementById("myModal");
    modal.classList.add("active");
    document.body.classList.add("no-scroll");
}

function openModal2() {
    let modal2 = document.getElementById("myModal2");
    modal2.classList.add("active");
    document.body.classList.add("no-scroll");
}

function openModal3(){
    let modal3 = document.getElementById("myModal3");
    modal3.classList.add("active");
    document.body.classList.add("no-scroll")
}

function openModal4(){
let modal4 = document.getElementById("myModal4");
modal4.classList.add("active");
document.body.classList.add("no-scroll")
}


window.onclick = function(e) {
    let modal = document.getElementById('myModal');
    let modal2 = document.getElementById('myModal2');
    let modal3 = document.getElementById("myModal3");
    let modal4 = document.getElementById("myModal4");
    if (e.target == modal) {
        modal.classList.remove("active");
        document.body.classList.remove("no-scroll");
    }
    if (e.target == modal2) {
        modal2.classList.remove("active");
        document.body.classList.remove("no-scroll");
    }
    if(e.target == modal3){
        modal3.classList.remove("active");
        document.body.classList.remove("no-scroll")
    }
    if(e.target == modal4){
        modal4.classList.remove("active");
        document.body.classList.remove("no-scroll")
    }
}
