var TEST_OBJECT = {
    onSearchFieldChange : function(value){
       var selectBox = document.getElementById("my_select_list");
       var items = selectBox.children;
       if (value === "") {
          for(var i=items.length-1; i>=0; i--){
             items[i].style.display = "";
             items[i].selected = false;
          }
          return;
       }
  
       var reg = new RegExp(".*"+value+".*","i");
       for(var i=items.length-1; i>=0; i--){
          if ( items[i].textContent.match(reg) ){
             items[i].style.display = "";
          } else {
             items[i].style.display = "none";
          }
          items[i].selected = false;
       }
    }
 }