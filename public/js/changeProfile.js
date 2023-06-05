document.addEventListener("DOMContentLoaded", function(event) { 
    var x = document.getElementById("loc").value
    // console.log(x);

    const $select = document.querySelector('#mySelect');
    $select.value = x
  });

