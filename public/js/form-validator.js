
// Below Function Executes On Form Submit
function ValidationEventFV() {
// Storing Field Values In Variables
var opcion_1 = document.getElementById("opcion_1").value;
var opcion_2 = document.getElementById("opcion_2").value;
var correcto_1 = document.getElementById("correcto_1").value;
var correcto_2 = document.getElementById("correcto_2").value;
// Conditions
// console.log(opcion_1);
// console.log(opcion_2);
// console.log(correcto_1);
// console.log(correcto_2);
// }
if (opcion_1 != '' && opcion_2 != '' && correcto_1 != '' && correcto_2 != '') {
    if(opcion_1 == opcion_2){//2 falsos o 2 verdaderos
        console.log(opcion_1);
        console.log(opcion_2);
        alert("No puede existir dos valores logicos iguales !");
        return false;
    }
    if(correcto_1 == "0" && correcto_2 == "0"){
      console.log(correcto_1);
      console.log(correcto_2);
      alert("No puede existir dos opciones incorrectas !");
      return false;
    }
    if(correcto_1 == "1" && correcto_2 == "1"){
      console.log(correcto_1);
      console.log(correcto_2);
      alert("No puede existir dos opciones correctas !");
      return false;
    }
      //alert("Todo bien !");
      return true;
    }
  }

  
