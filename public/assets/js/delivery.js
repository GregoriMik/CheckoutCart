// alert("jestem i działam");
const val1= document.getElementById("g1v1");
const val2= document.getElementById("g1v2");
const val3= document.getElementById("g1v3");
const val4= document.getElementById("g2v1");
const val5= document.getElementById("g2v2");
const val6= document.getElementById("g2v3");
const gr1 = document.getElementsByClassName("delInput");
const gr2 = document.getElementsByClassName('payInput');



val1.addEventListener("click",function(){
    if(gr1.classList=="active"){
    gr1.classList.remove("active");
    }
    val1.classList.add('active');
    document.getElementById("g2v2").disabled = true;
});

val2.addEventListener("click",function(){
    if(gr1.classList=="active"){
    gr1.classList.remove("active");
    }
    val2.classList.add('active');
    document.getElementById("g2v2").disabled = true;
});

val3.addEventListener("click",function(){
    if(gr1.classList=="active"){
    gr1.classList.remove("active");
    }
    val3.classList.add('active');
    document.getElementById("g2v1").disabled = true;
    document.getElementById("g2v3").disabled = true;
});
















// val3.addEventListener("click",function(){
//     // console.log("val3 kliknięty");
// });
// val4.addEventListener("click",function(){
//     // console.log("val4 kliknięty");
// });
// val5.addEventListener("click",function(){
//     // console.log("val5 kliknięty");
// });
// val6.addEventListener("click",function(){
//     // console.log("val6 kliknięty");
// });







// different.addEventListener("click", function () {
    
//     if(different.checked == true){
//       check.classList.remove("remover");
//       adres1.disabled=true;
      
      
//     }else{
//         check.classList.add("remover");
//         adres1.disabled=false;

//     }
// });