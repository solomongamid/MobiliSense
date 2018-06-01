tinymce.init({
  selector: '#mytextarea',
  skin_url: '/css/tinymceSkins/lightgray'
});

function confirmation(){
    if(confirm('are you sure?')){
        document.getElementById('delete-form').submit();
    }else{
        return false;
    }
}


var showLoginMenu = false;
$( ".navbar-right-small-trigger" ).click(function() {
  if (showLoginMenu) {
    $( ".navbar-right-desktop" ).removeClass("navbar-show").addClass('navbar-hidden');
    showLoginMenu = false;
  }else {
    $( ".navbar-right-desktop" ).addClass("navbar-show").removeClass('navbar-hidden');
    showLoginMenu = true;
  }
});


$(".mobile-menu-overlay").click(function() {
  $(".menu-toggler").prop("checked",false);
});

var openedSubNav = "";
var closeOtherSubNav = function () {
  openedSubNav = "." + this.className;
  console.log(openedSubNav);
  for (var i = 1; i < 5; i++) {
    var tempClass = ".sub-group-trigger-" + i;
    console.log(tempClass);
    if ((tempClass !== openedSubNav)) {
      $(tempClass).prop("checked", false);
    }
  }
}

$(".sub-group-trigger-1, .sub-group-trigger-2, .sub-group-trigger-3, .sub-group-trigger-4")
  .change(closeOtherSubNav);
