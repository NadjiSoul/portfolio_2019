// function getAnswer(){
// 	var know = { "Bonjour" : "Ohayo" , "Aurevoir" : "Bruh!" , "La balle est dans ton camps" : "O.K."};
// 	var question = document.getElementById("txt").value;
// 	var node = document.createElement(["DIV"]);
//   	var textnode = document.createTextNode(question);
//   	node.appendChild(textnode);
//   	node.className = "pregunta";
//   	document.getElementById("msg").appendChild(node);
//   	document.getElementById("txt").value="";

//   	if (question in know){
//   		textnode = document.createTextNode(know[question]);
//   		node.appendChild(textnode);
//   		document.getElementById("msg").appendChild(node);
  		
//   	} else {
//   		textnode = document.createTextNode("Bruh ! Pas compris pélo!");
//   		node.appendChild(textnode);
//   		document.getElementById("msg").appendChild(node);

//   	} 
// }

// function getAnswer(){
//   var i;
//   var know = [["Bonjour", "Ohayo", "Hi"],["Hi", "Bonjour", "Ohayo"],["Bruh"]];
//   var question = document.getElementById("txt").value;
//   var node = document.createElement(["DIV"]);
//   var textnode = document.createTextNode(question);
//   node.appendChild(textnode);
//   node.className = "pregunta";

//   document.getElementById("msg").appendChild(node);
//   document.getElementById("txt").value="";

//   for(i=0; i < know[0].length ; i++){
//     knowk = know[0][i];
//     quest = know[1][i];
//     if(question == knowk){
//       textnode = document.createTextNode(quest);
//       node.appendChild(textnode);
//       document.getElementById("msg").appendChild(node);
//     }
//     else{
//       textnode = document.createTextNode("Bruh");
//       node.appendChild(textnode);
//       document.getElementById("msg").appendChild(node);
//       break;
//     }
//   }
// }












// function scrollEnBas()
// {
//  var elDiv =document.getElementById("msg");
//  elDiv.scrollTop = elDiv.scrollHeight-elDiv.offsetHeight;
// }
// scrollEnBas();

// DOM = Representation hierarchique de notre page HTML.

function getAnswer(){
    var know = { "Bonjour" : "Ohayo" , "Aurevoir" : "Bruh!" , "La balle est dans ton camps" : "O.K."};
    var question = document.getElementById("txt").value;
    document.getElementById("txt").value="";

    document.getElementById("msg").innerHTML += "<div class=pregunta>" + question + "</div>";
    if(question in know){
        document.getElementById("msg").innerHTML += "<div class=respuesta>" + know[question] + "</div>";
    } else {
        document.getElementById("msg").innerHTML +=  "<div class=respuesta> Bruh, moi pas comprendre </div>";
    } 
}

// function getAnswer(){
// 	var know = {"Bonjour" : "Ohayo" , "Aurevoir" : "Bruh!"};
// 	var question = document.getElementById("txt").value;
// 	var node = document.createElement(["DIV"]);
//   	var textnode = document.createTextNode([question]);
//   	node.appendChild(textnode);
//   	node.className = "pregunta";
//   	document.getElementById("msg").appendChild(node);
//   	document.getElementById("txt").value="";

//   	if (question in know){
// 		document.getElementById("msg").innerHTML += "<span class=test>" + know[question] + "</span><br/>";
// 	} else {
// 		document.getElementById("msg").innerHTML +=  "<span class=test> Bruh, moi pas comprendre </span><br/>";
// 	}
// }







// // FONCTION PERMETTANT DE DESAVTIVER LA TOUCHE ENTREE SUR LE CHAMPS CONCERNE


function refuserToucheEntree(event)
{
    // Compatibilité IE / Firefox
    if(!event && window.event) {
        event = window.event;
    }
    // IE
    if(event.keyCode == 13) {
        event.returnValue = false;
        event.cancelBubble = true;
    }
    // DOM
    if(event.which == 13) {
        event.preventDefault();
        event.stopPropagation();
    }
}

