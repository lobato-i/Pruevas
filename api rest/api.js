
let texto ='';
let imp = '';
//funcion acincrona
const GET = async() => {
    //try catch para manejo de errores
    try{
        //los datos de la api son guardados en respuesta y desglosamos parametros 
        const respuesta = await axios.get('https://api.trello.com/1/boards/615e121e55742a5a6ba346bc/cards',{
            params: {
                key:'8b326737f43e5a629e80b9c95b0a6016',
                token:'fcd44ca66295583ff083eb88f93ef882c4836355b6edce681b2b9fc631c15517'

            }
        })
        //si la coneccion por medio de la api fue correcta
        if(respuesta.status == 200){
            // almacenamos en texto la primera pocion de la data
            texto = respuesta.data[0].name;

            
            texto = `
					<div">
                    <label for="">TI     </label> <label id="lb" for="">Test</label>
                    
                    <li id="dv">${texto.slice(0,32)}</li>
					

					</div>
				`;
        }
        //imprimimos en html 
        document.getElementById('div').innerHTML = texto;
    }catch(error){
        console.log(error);

    }
}
GET()








