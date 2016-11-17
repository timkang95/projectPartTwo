$(document).ready(function() {
    $('#content').fadeIn(1000);
});

function home() {
  document.getElementById("homeCard").style.visibility = "visible";
  document.getElementById("workExp").style.visibility = "hidden";
  document.getElementById("contactInfo").style.visibility = "hidden";
  document.getElementById("pageFooter").style.marginTop = "1650px";
  document.getElementById("navBar").style.backgroundColor = "steelblue";
  document.getElementById("pageFooter").style.backgroundColor = "steelblue";
  return false;
}

function workExp() {
  document.getElementById("homeCard").style.visibility = "hidden";
  document.getElementById("workExp").style.visibility = "visible";
  document.getElementById("contactInfo").style.visibility = "hidden";
  document.getElementById("pageFooter").style.marginTop = "550px";
  document.getElementById("navBar").style.backgroundColor = "orange";
    document.getElementById("pageFooter").style.backgroundColor = "orange";
  return false;
}

function contact() {
  document.getElementById("homeCard").style.visibility = "hidden";
  document.getElementById("workExp").style.visibility = "hidden";
  document.getElementById("contactInfo").style.visibility = "visible";
  document.getElementById("pageFooter").style.marginTop = "50px";
  document.getElementById("navBar").style.backgroundColor = "purple";
  document.getElementById("pageFooter").style.backgroundColor = "purple";
  return false;
}

