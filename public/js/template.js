
function preventScroll(e){
    e.preventDefault();
    e.stopPropagation();

    return false;
}

document.addEventListener("DOMContentLoaded", function(event) { 
    var x = document.getElementById('menu__toggle');
    // console.log(x);
    // alert(x.checked);
    var y = document.getElementsByTagName("BODY")[0];

    x.addEventListener('change', (event) => {
        if (event.currentTarget.checked) {
            y.addEventListener('wheel', preventScroll, {passive: false});
        } 
        else
        {
            y.removeEventListener('wheel', preventScroll, {passive: false});
        }
    })
  });
