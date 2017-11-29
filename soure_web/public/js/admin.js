$(document).ready(function(){
    $("div.alert").delay(2000).slideUp();
});

   function xacnhanxoa(msg){
        if(window.confirm(msg)){
            return true;
        }
        return false;
    }
    
