// Fonts of Google

let fontsG = document.getElementById("fontsGoogle");

fontsG.href =
    "https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap";

// Menu Scroll

let principalUbication = window.pageYOffset,
    navbar = document.getElementById("nav"),
    hNavbar = navbar.offsetHeight,
    fean = document.getElementById("fean");

if (navbar) {
    window.onscroll = () => {
        let actualMove = window.pageYOffset;
        if (principalUbication >= actualMove) {
            navbar.style.top = "0";
        } else {
            navbar.style.top = "-100px";
        }
        principalUbication = actualMove;
    }
}

let nL = document.getElementById("nL"),
    btnL = document.getElementById("btnL");
if (btnL || nL) {
    btnL.addEventListener("click", () => {
        nL.classList.toggle("show");
    })
}

if (fean) {
    fean.style.marginTop = `calc(${hNavbar}px + .6rem)`;
}
if (nL) {
    nL.style.top = `calc(${hNavbar}px + .6rem)`;
}


// FAQs Card

let btnItems = document.querySelectorAll(".btnItem");
if (btnItems) {
    for (let i = 0; i < btnItems.length; i++) {
        btnItems[i].addEventListener("click", (e) => {
            let et = e.target;
            if (et.className == "btnItem active") {
                removeClass();
            } else {
                removeClass();
                btnItems[i].classList.add("active");
            }
        });
    }
    let removeClass = () => {
        for (let i = 0; i < btnItems.length; i++) {
            btnItems[i].classList.remove("active");
        }
    };
}

// Menu Functionality

let btnM = document.getElementById("menuT"),
    contN = document.getElementById("contNav")

if (btnM) {
    btnM.addEventListener("click", () => {
        contN.classList.toggle("desactive")
    })
}

let linkM = document.getElementById("linkM")

if (linkM) {
    linkM.href = "/marketplace"
}

const $dropdownUser = document.querySelector('.dropdown-user');
const $userButton = document.getElementById('userButton');
const $main = document.querySelector('main');

$userButton.addEventListener('click', (e) => {
    e.preventDefault();
   if ($dropdownUser.style.display === "none") {
        $dropdownUser.style.display = "block";
  } else {
    $dropdownUser.style.display = "none";
  }

});

$main.addEventListener('click', () => {
   if ($dropdownUser.style.display === "block") {
        $dropdownUser.style.display = "none";
  }

});