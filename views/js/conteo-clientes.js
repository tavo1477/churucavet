/*=============================================
CLIENTES
=============================================*/

let cont1 = document.getElementById("cont1"),
    cont2 = document.getElementById("cont2")

 let cant1=0, 
 	 cant2=0,
 	 tiem =25

let tiempo1 = setInterval( () =>{

	cont1.textContent = cant1+=1

	if (cant1 === 300) {

		clearInterval(tiempo1)
	}

}, 20)

let tiempo2 = setInterval( () =>{

	cont2.textContent = cant2+=1

	if (cant2 === 350) {

		clearInterval(tiempo2)
	}

}, 20)