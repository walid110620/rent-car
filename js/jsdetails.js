const btn = document.getElementsByClassName("btn")[0];
const form = document.getElementsByClassName("form")[0];


btn.onclick = () => {
 form.classList.toggle("form");


};


const wa=document.getElementById('imprim')


wa.addEventListener('click', ()=>{
 window.print();
})
