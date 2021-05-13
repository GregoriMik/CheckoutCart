// alert('Other Address');
const different = document.getElementById("defaultCheck1");
const check = document.getElementById("checkBox1");
let adres1 = document.getElementById("adres1");
let adres2 = document.getElementById("adres2");


different.addEventListener("click", function () {
    
      if(different.checked == true){
        check.classList.remove("remover");
        adres1.disabled=true;
        
        
      }else{
          check.classList.add("remover");
          adres1.disabled=false;

      }
  });


  

