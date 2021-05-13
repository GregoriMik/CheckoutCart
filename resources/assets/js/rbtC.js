// Rabat Code File
// alert("rabat code");
const rbtC = document.getElementById("rbtC");
const show  = document.getElementById("show");
const exchange = document.getElementById("exchange");


// Pokazywanie formularza do wpisywania kodu rabatowego


rbtC.addEventListener("click", function () {
    show.classList.toggle("remover");
    // newValue = "Proszę podać kod";
});

exchange.addEventListener("click", function () {
    // console.log("klikam w input");
    document.getElementById("exchange").placeholder = "Proszę podać kod";
});

// \Pokazywanie formularza do wpisywania kodu rabatowego

