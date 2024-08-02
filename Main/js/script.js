const menuIcon = document.getElementById("menu-icon");
const menuList = document.getElementById("menu-list");

menuIcon.addEventListener("click", () => {
  menuList.classList.toggle("hidden");
});


function toggleItenary() {
    var itenary = document.getElementById('containerItenary');
    if (itenary.style.display === "none") {
        itenary.style.display = "block";
    } else {
        itenary.style.display = "none";
    }
}


var blipDim = '400px';

$('.blip-link').click(function(event){
  event.preventDefault();
  $('.blip-click', this).width(blipDim).height(blipDim);
  $('.link-content', this).addClass('clicked');
});

$('.blip-link').mouseleave(function(){
  if($('.link-content', this).hasClass('clicked')) {
    $('.blip-click', this).width(0).height(0);
    $('.link-content', this).removeClass('clicked');
  }
});