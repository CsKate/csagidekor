console.log("Kata :) :) :)");
var isMobilemenuOpen = false;
document.querySelector(".mobile-menu-img-ct img ").onclick = function () {
  if (!isMobilemenuOpen) {
    document.querySelector(".mobile-menu").style.display = "block";
  } else {
    document.querySelector(".mobile-menu").style.display = "none";
  }
  isMobilemenuOpen = !isMobilemenuOpen;
};
