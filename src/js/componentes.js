/**
 * logica del proyecto
 */

//obtener valores de url (utm's)

window.addEventListener('load', () => {
    const url = new URLSearchParams(window.location.search),
          check = document.getElementById('utm'),
          form = document.getElementById('form');

    url.forEach( (value, key) => {
        //console.log(key, value);

        let input = `<input type="hidden" id="${key}" value="${value}">`;
        //console.log(input);
        check.insertAdjacentHTML('beforeend', input);

        //document.cookie = `${key}=${value};expires=Thu, 31 Dec 2022 12:00:00 UTC;`;
    });

})
const botonEnviar = document.getElementById('boton');

botonEnviar.addEventListener('click', (e)=>{
    const inputsForm  = document.querySelectorAll('input');

    const datos = [];

    for( const {id, value} of inputsForm ){

        return id, value;
    }

    console.log(id);


    //enviaDatos( datos );

    
    e.preventDefault();
});

const enviaDatos = ( pros )=>{
    //importaPeticiones().then( module => {
        import(/*webpackChunkName: "peticiones" */  './services/peticiones').then( module =>{
        const enviarNombre = module.registraProspecto( pros );
        enviarNombre.then( resp =>{
            //resp.registro === true ? window.location.href = 'registro.html' :  console.error('no se registro');
            console.log();
        });
    
    });
}