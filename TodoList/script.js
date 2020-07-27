function newItem() {
    var item = document.getElementById("input").value;
    var ul = document.getElementById("list");
    var li = document.createElement("li");
    li.appendChild(document.createTextNode("- " + item));
    ul.appendChild(li);
    document.getElementById("input").value = "";
    li.onclick = removeItem;
    // store();
  }
  

  // The onkeyup event occurs when the user releases a key (on the keyboard).Execute a JavaScript when a user releases a key:
  document.body.onkeyup = function(e) {    //jab user task likhne ke baad enter maare tab bhi kaam karna chahiye
    if (e.keyCode == 13) {   //ENTER ka key code 13 hota h,to jaise hi user enter pr click krega,newitem() call hoga aur list me add krdega
      newItem();
      
    }
  }
  
  function removeItem(e) {
    e.target.parentElement.removeChild(e.target);
  }
  function removeAll(){
    var lst = document.getElementsByTagName("ul");     //Get all elements in the document with the specified tag name:"ul"
      lst[0].innerHTML = "";   //jab miljaaye wo to un sbko empty krdo,isse puri ul delete hojaayegi
  }
  btn.onclick = function () {      //jab ADD vaale pe click hoga tb newitem() call krdena and jab ClearAll tab removeall() vaala
    newItem();
}

clear.onclick = function () {    
    removeAll();
}




