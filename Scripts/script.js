console.log("Kata :) :) :)");

/********************       Mobilmenü működése       **********/
var isMobilemenuOpen = false;
document.querySelector(".mobile-menu-img-ct img ").onclick = function () {
  if (!isMobilemenuOpen) {
    document.querySelector(".mobile-menu").style.display = "block";
  } else {
    document.querySelector(".mobile-menu").style.display = "none";
  }
  isMobilemenuOpen = !isMobilemenuOpen;
};

//ide majd az a szám kell, amennyi kép összesen fel van töltve
var bigPicture = document.querySelector(".big-picture-ct img");

for (i = 0; i < 16; i++) {
  document.querySelectorAll(".img-ct")[i].setAttribute("serialnumber", i + 1);

  document.querySelectorAll(".img-ct")[i].onclick = function () {
    var serialNumber = this.getAttribute("serialnumber");

    bigPicture.setAttribute(
      "src",
      "../Assets/images/dekor/diszlet/d" + serialNumber + ".png"
    );
    document.querySelector(".big-picture-window").style.display = "block";
  };
}

// Most még csak az első kategória kattintható,
// a többire akkor találom ki a megoldást, ha majd a képeket már adatbázisból veszem

/**************       big-picture-window bezárása        *********/
document.querySelector(".close-ct").onclick = function () {
  document.querySelector(".big-picture-window").style.display = "none";
};
