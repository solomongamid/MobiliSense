tinymce.init({
  selector: '#mytextarea',
});

function confirmation(){
    if(confirm('are you sure?')){
        document.getElementById('delete-form').submit();
    }else{
        return false;
    }
}

$( ".navbar-right-small-trigger" ).click(function() {
  alert( "Handler for .click() called." );
});
