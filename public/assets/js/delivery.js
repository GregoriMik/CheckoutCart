let cd = document.getElementById('confirm_deliver');
let tt = document.getElementById('t_total');
let dlv
const val1= document.getElementById("g1v1");
const val2= document.getElementById("g1v2");
const val3= document.getElementById("g1v3");
const val4= document.getElementById("g2v1");
const val5= document.getElementById("g2v2");
const val6= document.getElementById("g2v3");

let dInt1 =  document.getElementById("price_id1");;
let dInt2 =  document.getElementById("price_id2");
let dInt3 =  document.getElementById("price_id3");


val1.addEventListener("click",function(){

    val4.checked=false;
    val5.checked=false;
    val6.checked=false;
    val4.disabled=false;
    val5.disabled=true;
    val6.disabled=false;
    if(val1.checked="true"){
        

       dlv=(parseFloat(dInt1.textContent).toFixed(2));
        cd.textContent=dInt1.textContent;
    }

});

val2.addEventListener("click",function(){

    val4.checked=false;
    val5.checked=false;
    val6.checked=false;
    val4.disabled=false;
    val5.disabled=true;
    val6.disabled=false;
    if(val2.checked="true"){

        // console.log(parseFloat(dInt2.textContent).toFixed(2));
        cd.textContent=dInt2.textContent;
        console.log(dInt2.textContent+cd.textContent);
    }


});

val3.addEventListener("click",function(){



    val4.checked=false;
    val5.checked=false;
    val6.checked=false;
    val4.disabled=true;
    val5.disabled=false;
    val6.disabled=true;
    if(val3.checked="true"){

        
        cd.textContent=dInt3.textContent;
        console.log(parseFloat(cd.textContent).toFixed(2));
        
    }

});

val4.addEventListener("click",function(){
    // console.log('klikam 4 opcję');
    val5.disabled=true;
    val6.disabled=true;

});

val5.addEventListener("click",function(){
    // console.log('klikam 5 opcję');
    val4.disabled=true;
    val6.disabled=true;

});
val6.addEventListener("click",function(){
    // console.log('klikam 4 opcję');
    val4.disabled=true;
    val5.disabled=true;

});

// confirm_deliver


