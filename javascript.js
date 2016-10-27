/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var navrefs= document.getElementById('nav').getElementsByTagName('a');
for (var i=0, len = navrefs.length;i<len;i++){
  if (location.hash == navrefs[i].href){
     navrefs[i].parentNode.className = 'active'; 
  } else {
     navrefs[i].parentNode.className = ''; 
  }
}