$(document).ready(function(){

    //comentario prueba
    $("#btn_calcular").click(function(){
        calcular();
    });
    
    function calcular(){

        //obtenemos el valor de la cantidad de fotos y lo convertimos a numero
        let cantidad = parseInt($('#cantidad').val());
        if (cantidad < 1) {
            swal("La cantidad debe ser mayor a cero");
            return false;
        }
        //obtenemos el valor del radio
        let criptomonedas = $('input:radio[name=criptomonedas]:checked').val();
        if (criptomonedas== undefined) {
            swal("Debes seleccionar la criptomoneda!");
            return false;
        }
    
    
        //calculamos el resultado
        obtenerResultado = calcularPrecio(cantidad, criptomonedas);
        
        //$('#total').val("La cantidad a pagar es $" + obtenerResultado + criptomonedas);
        $('#total').html("Total de Compra $" + obtenerResultado +" "+ criptomonedas);
        

    }
    
    
    function calcularPrecio(cantidad, criptomonedas) {
        let resultado = 0;
        switch (criptomonedas) {
            case "bitcoin":
                resultado = cantidad * 800,000;
                break;
            case "mana":
                resultado = cantidad * 24;
                break;
            case "bat":
                resultado = cantidad * 21;
                break;
            case "etherium":
                resultado = cantidad * 70,000;
                break;
            case "xrp":
                resultado = cantidad * 30;
                break;
        }
        return resultado;
     
    }
    
   

});
function limpiar(){
    $('#frmmonedas')[0].reset();
}

