document.getElementById("bakedGoods").style.display = "none";
window.onload = fadeIn;

function fadeIn() {
  var fade = document.getElementById("bakedGoods");
  var opacity = 0;
  var intervalID = setInterval(function() {

    if (opacity < 1) {
      opacity = opacity + 0.2
      fade.style.opacity = opacity;
    } else {
      clearInterval(intervalID);
    }
  }, 300);
}


function coffeeTab() {
  var x = document.getElementById("coffeeTab");
  if (x.style.display === "none") {
    document.getElementById("bakedGoods").style.display = "none";
    x.style.display = "block";
  }
}

function bakedGoodsTab() {
  var x = document.getElementById("bakedGoods");
  if (x.style.display === "none") {
    document.getElementById("bakedGoods").style.transition = "all .5s";
    document.getElementById("coffeeTab").style.display = "none";
    x.style.display = "block";
  }
}
