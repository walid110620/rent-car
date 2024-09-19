const humberger = document.getElementById("menu-btn");
const nav = document.getElementsByClassName("nav")[0];

humberger.onclick = () => {
  humberger.classList.toggle("fa-times");
  nav.classList.toggle("clip");
};

const scr = document.getElementsByClassName("scrol")[0];

window.onscroll = () => {
  if (window.scrollY > 1000) {
    scr.classList.add("visible");
  } else {
    scr.classList.remove("visible");
  }
};

let i = 0;
const parentimg = document.getElementsByClassName("wrapimg")[0];

const arr = [
  `  <img id="img" src="../image/marsaa3.jpg" alt="">`,
  `     <img id="img" src="../image/r.jpeg" alt="">`,
  `     <img id="img" src="../image/macedes.jpg" alt="">`,
  `     <img id="img" src="../image/au.jpg" alt="">`,
  `     <img id="img" src="../image/bmw.jpg" alt="">`,

  `     <img id="img" src="../image/jag.jpg" alt="">`,
  `     <img id="img" src="../image/a.webp" alt="">`,
  `     <img id="img" src="../image/lamb.webp" alt="">`,

  `     <img id="img" src="../image/rols.jpg" alt="">`,
  `     <img id="img" src="../image/bou.webp" alt="">`,
];
const add = `  <img id="pos" src="../image/bou.jpg" alt="">`;

parentimg.innerHTML = add;
const slid = () => {
  parentimg.innerHTML = arr[i];


  if (i < arr.length - 1) {
    i++;
  } else {
    i = 0;
  }
  parentbtn.getElementsByClassName('active')[0].classList.remove('active')
  parentbtn.getElementsByTagName('button')[i].classList.add('active')
};
setInterval(slid, 2000);

const allnumbers = document.querySelectorAll('#hola')
const parentbtn = document.getElementsByClassName('parentbtn')[0]

const wa = ()=>{  allnumbers.forEach((item , index) =>{
  item.addEventListener("click" , ()=>{
    parentbtn.getElementsByClassName('active')[0].classList.remove('active')
    item.classList.add('active')
    i=index
    parentimg.innerHTML = arr[index];
    if(index == arr.length - 1){
      index=0
    }

  })

})
}
setInterval(wa , 2000)











































































