function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("b")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) != -1) {
        li[i].style.display = "";
        hideLastElement();

      } 
      
      else {
        li[i].style.display = "none";
        displayLastElement();
        
      }
    }
  }

  function hideLastElement() {
    var ul = document.getElementById("myUL");
    var li = ul.getElementsByTagName("li");
    var last = li[li.length-1];
    last.style.display = "none";

  }

  function displayLastElement() {
    var ul = document.getElementById("myUL");
    var li = ul.getElementsByTagName("li");
    var last = li[li.length-1];
    last.style.display = "";

  }
  