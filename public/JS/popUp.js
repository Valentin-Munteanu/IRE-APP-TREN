document.addEventListener("DOMContentLoaded", function(){
const icons = document.querySelectorAll(".icons i");
const popUp = document.getElementById("popup");
const modalBackground = document.getElementById("modal-background");

function showPopUp(){
    modalBackground.style.display = "flex";
    popUp.style.display = "block";
    setTimeout(() => {
modalBackground.classList.add("show");
popUp.classList.add("show");
    }, 10);
}

function hiddenPopUp(){
modalBackground.classList.remove("show")
popUp.classList.remove("show");
setTimeout(() => {
   modalBackground.style.display = 'none';
   popUp.style.display = 'none'
}, 300);
}

icons.forEach(icon => {
    icon.addEventListener("click", (e) =>{
showPopUp();
e.stopPropagation();
    });
});

modalBackground.addEventListener("click", hiddenPopUp);
document.addEventListener("click", (e) =>{
    if(!popUp.contains(e.target) && !Array.from(icons).includes(e.target)){
        hiddenPopUp();
    }
});


document.addEventListener("keydown", (e) => {
if(e.key === "Escape"){
    hiddenPopUp();
}
})

})



