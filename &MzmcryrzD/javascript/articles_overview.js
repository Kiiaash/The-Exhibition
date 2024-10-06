const editorlab = document.getElementById("editorlab");
const editorimg = document.getElementById("editorimg");
const deletorlab = document.getElementById("deletorlab");
const deletorimg = document.getElementById("deletorimg");

editorlab.addEventListener("mouseover", ()=>{
    editorimg.src = "../public/pictures/edit_hover.png";
})
editorlab.addEventListener("mouseout",()=>{
    editorimg.src = "../public/pictures/edit.png";
})

deletorlab.addEventListener("mouseover",()=>{
    deletorimg.src = "../public/pictures/opend_trash.png";
})
deletorlab.addEventListener("mouseout",()=>{
    deletorimg.src = "../public/pictures/closed_trash.png";
})