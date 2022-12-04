<?php
// En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones siguientes: los
// libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los datos que se ingresan
// para cada tipo de artículo son: la cantidad pedida, el precio unitario y el tipo de pago. Si el pago es al contado,
// se tiene un descuento de 6% en cualquiera de los casos. Calcular e imprimir el costo total del pedido
// considerando el tipo de pago para cada cliente y el total que pagan al final del día N clientes.



do {
    echo "\n----------------------------\n";
$contador++;
    echo "\n-----------Informaciòn del cliente #".$contador ."-----------------\n";
    do {
        $descuento==;
//menu

echo "\n----------------------------\n";
echo "1. Libros \n";
echo "2. Revistas \n";
echo "3. cuadernos \n";
$opcion= readline("Seleccione una opcion");
echo "\n----------------------------\n";
$cantidad=readline("Cantidad: ");
$precio=readline("Precio: ");
$subtotal= $cantidad*$precio;
switch ($variable) {
    case '1':
        # code...
        break;
$descuento= $subtotal*0.22;
        case '2':
            $descuento= $subtotal*0.16;
            break;
    
            case '3':
                $descuento=$subtotal*0.1;
                break;
            
    default:
        echo "Opcion no valida"
        break;
}
echo "\n----------------------------\n";
echo"subtotal: $".$subtotal;
echo"descuento: $".$descuento;
echo"subtotal: $".$tot;

        //articulos
        $respuesta = readline("¿Desea seleccionar otro articulo? SI=s/No=n");

    }  while (strtoupper($resp) =='S');






//clientes
    $respuesta = readline("¿Desea hacer pedido de otro cliente? SI=s/No=n");
} while (strtoupper($respuesta)) == 'S';

?>