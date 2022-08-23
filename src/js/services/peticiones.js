/**
 * archivo para peticiones fetch...
 */

const url = '../php/procesa-datos.php';


const registraProspecto = async( datos )=>{

    if(!datos) throw 'no hay datos';

    try {

        const response = await fetch(url, {
            method: 'POST',
            headers: {
                "Accept"       : "application/json",
                "Content-Type" : "application/json"
            },
            body: JSON.stringify({datos})
        });
    
        if( !response.ok ) throw 'Error al enviar los datos';
        return await response.json();
        
    } catch (error) {

        throw error;
        
    }

};

export{ registraProspecto };