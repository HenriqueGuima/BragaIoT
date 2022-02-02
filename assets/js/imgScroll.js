window.onscroll = function () {
  scrollRotate();
};

function scrollRotate() {
  let image = document.getElementById("logo-iot");
  image.style.transform = "rotate(" + (window.pageYOffset - 5000) / 50 + "deg)";
  //   console.log((window.pageYOffset - 5000) / 50);
}
