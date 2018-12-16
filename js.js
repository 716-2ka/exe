document.getElementById('m6').onclick=z;
function z(){document.getElementById('m7').style.display='block';document.getElementById('m8').onclick=x;}
function x(){document.getElementById('m7').style.display='none';}

document.getElementById('min').onclick=r;

function r(){
    var y=0;
    y=y+30;
    if(y>0){y=-200;}
  document.getElementById('pon').style.left=y+'%';
}

document.getElementById('min2').onclick=i;

function i(){
    var y=0;
    y=y-30;
    if(y==-30){y=0;}
  document.getElementById('pon').style.left=y+'%';
}