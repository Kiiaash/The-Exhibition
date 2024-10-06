const dashbored=document.getElementById("dashbored");
const dashview=document.getElementById("dashbview");
let menuoptions = document.querySelectorAll(".menu-sub");
const about=document.getElementById("about");
const aboutview=document.getElementById("aboutview");
const header=document.getElementById("header");
const headerview=document.getElementById("headerview");
console.log(menuoptions);

dashbored.addEventListener("click",()=>{
    if(dashview.style.display=="none"){
        dashview.style.display = "block";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        dashview.style.display = "none";
    }
})


about.addEventListener("click",()=>{
    if(aboutview.style.display=="none"){
        aboutview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";
    }else{
        aboutview.style.display = "none";
    }
})


header.addEventListener("click",()=>{
    if(headerview.style.display=="none"){
        headerview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        headerview.style.display = "none";
        
    }
})

const articles= document.getElementById("articles");
const articleview = document.getElementById("articleview");
articles.addEventListener("click",()=>{
    if(articleview.style.display=="none"){
        articleview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        articleview.style.display = "none";
        
    }
})

const judges = document.getElementById("judges");
const judgeview = document.getElementById("judgeview");
judges.addEventListener("click",()=>{
    if(judgeview.style.display=="none"){
        judgeview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        judgeview.style.display = "none";
        
    }
})

const news = document.getElementById("news");
const newsview = document.getElementById("newsview");
news.addEventListener("click",()=>{
    if(newsview.style.display=="none"){
        newsview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        newsview.style.display = "none";
    }
})

const quots = document.getElementById("quots");
const quotview = document.getElementById("quotview");
quots.addEventListener("click",()=>{
    if(quotview.style.display=="none"){
        quotview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";


    }else{
        quotview.style.display = "none";
    }
})

const contact  = document.getElementById("contocts");
const contactview = document.getElementById("contactview");
contact.addEventListener("click",()=>{
    if(contactview.style.display=="none"){
        contactview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        contactview.style.display = "none";
    }
})

const users = document.getElementById("users");
const userview = document.getElementById("userview");
users.addEventListener("click",()=>{
    if(userview.style.display=="none"){
        userview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[9].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        userview.style.display = "none";
    }
})

const sponsers = document.getElementById("sponsers");
const sponserview = document.getElementById("sponserview");
sponsers.addEventListener("click",()=>{
    if(sponserview.style.display=="none"){
        sponserview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[10].style.display="none";

    }else{
        sponserview.style.display = "none";
    }
})

const footer = document.getElementById("footer");
const footerview = document.getElementById("footerview");
footer.addEventListener("click",()=>{
    if(footerview.style.display=="none"){
        footerview.style.display = "block";
        menuoptions[0].style.display="none";
        menuoptions[1].style.display="none";
        menuoptions[2].style.display="none";
        menuoptions[3].style.display="none";
        menuoptions[4].style.display="none";
        menuoptions[5].style.display="none";
        menuoptions[6].style.display="none";
        menuoptions[7].style.display="none";
        menuoptions[8].style.display="none";
        menuoptions[9].style.display="none";

    }else{
        footerview.style.display = "none";
    }
})