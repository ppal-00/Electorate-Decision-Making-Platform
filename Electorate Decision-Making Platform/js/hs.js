
// silder box
var slideIndex = 1;
showDivs(slideIndex);         

$(document).ready(function (e) 
{
    
});

///////////////////////////// MENU BAR HAM //////////////////////////////////
function bar_menu()
{
  var ham_div = document.getElementById("ham");
  if (ham_div.className.indexOf("w3-show") == -1) 
  {
    ham_div.className += " w3-show";
  } 
  else 
  { 
    ham_div.className = ham_div.className.replace(" w3-show", "");
  }
}     
        
///////////////////// CLICKABLE DROPDOWN ////////////////////////////////////////////

function handle_dropdown(item, id) 
{
    console.log("==>>>>>>>>>>>>>" + item + id);
    div_id = document.getElementById(item + '_' + id);                  
    
    if (div_id.className.indexOf("w3-show") == -1) 
    {        
        closeAllDropdown();    
        div_id.className += " w3-show";       
      } 
      else 
      { 
        isDD_opened = false;
        div_id.className = div_id.className.replace(" w3-show", "");
      }
}

function closeAllDropdown()
{
    //https://stackoverflow.com/questions/47514844/close-dropdown-when-selecting-another
    //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown
    
    var allDropDownContent = document.getElementsByClassName("w3-dropdown-content");

    for (var i = 0; i < allDropDownContent.length; i++) 
    {        
       allDropDownContent[i].className = allDropDownContent[i].className.replace(" w3-show", "");
    }  
}

window.onclick = function(event) 
{   
  if (!event.target.matches('.dropbtnJS') && !event.target.matches('.fa-caret-down')) 
  {        
     closeAllDropdown();         
  }
  else console.log("matched");
  
}

////////////// SLIDER

function currentDiv(n) 
{
  showDivs(slideIndex = n);
}

function showDivs(n) 
{
  var i;
  var x = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("slider");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  
  for (i = 0; i < x.length; i++) 
  {
    x[i].style.display = "none";  
  }
  
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}

// Close the dropdown if the user clicks outside of it



////////////////// DISCREPENCY //////////////////

function confirmation()
{
	if (document.form1.discrepancy.value.length<= 49)
	{
		alert('Please enter at least 50 characters in discrepancy!');
		return false;
	}
	return true;
}
	

