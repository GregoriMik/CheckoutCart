const eye1 = document.getElementById("formEye1");
const eye2 = document.getElementById("formEye2");






eye1.addEventListener("click", function () {
    if(eye1.classList == "formEye1"){
        eye1.classList.remove("formEye1");
        eye1.classList.add("formEye2");
    }else{
        
        eye1.classList.add("formEye1");
        eye1.classList.remove("formEye2");
    }

});

eye2.addEventListener("click", function () {
    if(eye2.classList == "formEye2"){
        eye2.classList.remove("formEye2");
        eye2.classList.add("formEye1");
    }else{
        
        eye2.classList.add("formEye2");
        eye2.classList.remove("formEye1");
    }

});

function visiblePassword1 () {
    let pass = document.getElementById("fieldPassword1");
    if (pass.type === "password") {
        pass.type = "text";
    } else {
      pass.type = "password";
    }
  }
function visiblePassword2 () {
    let pass2 = document.getElementById("fieldPassword2");
    if (pass2.type === "password") {
        pass2.type = "text";
    } else {
      pass2.type = "password";
    }
  }
