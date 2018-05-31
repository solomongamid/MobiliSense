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
    $( ".navbar-right-small" ).removeClass("navbar-show").addClass('navbar-hidden');
    showLoginMenu = false;
  }else {
    $( ".navbar-right-small" ).addClass("navbar-show").removeClass('navbar-hidden');
    showLoginMenu = true;
  }
});
