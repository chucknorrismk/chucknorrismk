document.getElementById("sidebar").style.borderColor = 'red';

var ps = document.getElementsByTagName("p");
for (p = 0; p < ps.length; p++) {
  ps[p].style.color = 'red';
}

var Table = document.createElement('TABLE');
var TBody = document.createElement('TBODY');
var Row = document.createElement('TR');
var Cell1 = document.createElement('TD');
var Cell2 = Cell1.cloneNode();
Row.appendChild(Cell1);
Row.appendChild(Cell2);
Table.appendChild(TBody);
TBody.appendChild(Row);
document.body.appendChild(Table);
Cell1.appendChild(document.createTextNode('Ячейка 1'));
Cell2.appendChild(document.createTextNode('Ячейка 2'));
Table.border = 1;

Row.removeChild(Cell2);

// ---------------------------------------------
var sidebar = document.getElementById("sidebar");
//console.log(sidebar.childNodes[0].name);
var h2 = sidebar.getElementsByTagName('h2')[0];
var uls = h2.parentNode.getElementsByTagName('ul');
var ul_submenu = null;
for (var ul in uls) {
  if (uls[ul].className == 'submenu') {
    ul_submenu = uls[ul];
  }
}
var startHeight = ul_submenu.clientHeight;
ul_submenu.style.height = startHeight + "px";
var fullsize = true;
var animate = false;
var I;
h2.onclick = function() {
  var $this = this;
  if (fullsize) {
    if (!animate) {
      animate = true;
      console.log('fullsize !animate');
      I = setInterval(function() {
        if (ul_submenu.clientHeight > 0) {
          var tempHeight = parseInt(ul_submenu.style.height);
          tempHeight -= 5;
          if (tempHeight < 0) {
            tempHeight = 0;
          }
          ul_submenu.style.height = tempHeight + "px";
          ul_submenu.style.opacity = (tempHeight / startHeight);
          $this.style.left = ((startHeight - tempHeight) * 14) + "px";
        } else {
          animate = false;
          fullsize = false;
          clearInterval(I);
        }
      }, 35);
    }
  } else {
    if (!animate) {
      animate = true;
      I = setInterval(function() {
        if (ul_submenu.clientHeight < startHeight) {
          var tempHeight = parseInt(ul_submenu.style.height);
          tempHeight += 5;
          if (tempHeight > startHeight) {
            tempHeight = startHeight;
          }
          ul_submenu.style.height = tempHeight + "px";
          ul_submenu.style.opacity = (tempHeight / startHeight);
          $this.style.left = ((startHeight - tempHeight) * 14) + "px";
        } else {
          animate = false;
          fullsize = true;
          clearInterval(I);
        }
      }, 35);
    }
  }
}
