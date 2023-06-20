function hideshow(){
    var logocontainer = document.getElementById("logocontainer");
    var navbar = document.getElementById("navbar");

    if(logocontainer.style.display == "none"){
        logocontainer.style.display = "flex";

        navbar.classList.remove("col-12");
        navbar.classList.add("col-2");
    }
    else{
        logocontainer.style.display = "none";

        navbar.classList.remove("col-2");
        navbar.classList.add("col-12");
    }
}