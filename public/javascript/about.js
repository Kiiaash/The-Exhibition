const ded = document.getElementById("ded");
const edimg = document.getElementById("edimg");
const ded2 = document.getElementById("ded2");
const edimg2 = document.getElementById("edimg2");
const ded3 = document.getElementById("ded3");
const edimg3 = document.getElementById("edimg3");


ded.addEventListener("mouseover", ()=>{
    edimg.src = "../public/pictures/edit_hover";
})
ded.addEventListener("mouseout", ()=>{
    edimg.src = "../public/pictures/edit";
})


ded2.addEventListener("mouseover", ()=>{
    edimg2.src = "../public/pictures/edit_hover";
})
ded2.addEventListener("mouseout", ()=>{
    edimg2.src = "../pictures/edit";
})




ded3.addEventListener("mouseover", ()=>{
    edimg3.src = "../public/pictures/edit_hover";
})
ded3.addEventListener("mouseout", ()=>{
    edimg3.src = "../public/pictures/edit";
})

