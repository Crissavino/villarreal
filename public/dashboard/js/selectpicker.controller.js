/*
Info: Controlador para convertir un select con una longitud mayor de 10 options en un selectpicker
Uso: Agregar cdn al html en el que lo usaremos
     Agregar id a los selects que le agregaremos la clase selectpicker y agregarle data-live-search="true" a los selects
     Llamar a la clase y pasarle los parámetros [] array del id de los selects y el string de la traducción de 'Sin resultados encontrados'
*/
class SelectpickerController {

    constructor(selectpickers, noneResults) {
        for(let i=0, max=selectpickers.length;i<max; ++i) {
            $("#"+selectpickers[i]).selectpicker({
                noneResultsText: noneResults,
                liveSearchNormalize: true,
                size: 10
            });
        }
    }
}