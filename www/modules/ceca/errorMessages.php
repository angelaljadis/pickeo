<?php
/**
 * 2011-2017 OBSOLUTIONS WD S.L. All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of OBSOLUTIONS WD S.L. and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to OBSOLUTIONS WD S.L.
 * and its suppliers and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from OBSOLUTIONS WD S.L.
 *
 *  @author    OBSOLUTIONS WD S.L. <http://addons.prestashop.com/en/65_obs-solutions>
 *  @copyright 2011-2016 OBSOLUTIONS WD S.L.
 *  @license   OBSOLUTIONS WD S.L. All Rights Reserved
 *  International Registered Trademark & Property of OBSOLUTIONS WD S.L.
 */

$errorMessages = array(
	'0' => 'Operación aprobada',
	'1' => 'COMUNICACION ON-LINE INCORRECTA',
	'2' => 'ERROR AL CALCULAR FIRMA',
	'5' => 'ERROR. Error en el SELECT COMERCIOS <%d>',
	'6' => 'ERROR. Faltan campos obligatorios',
	'7' => 'ERROR. MerchantID inexistente <%d>',
	'9' => 'ERROR. No se pudo conectar a ORACLE <%d>',
	'10' => 'ERROR. Tarjeta errónea',
	'12' => 'FIRMA: %s-%s',
	'13' => 'OPERACION INCORRECTA',
	'14' => 'ERROR. Error en el SELECT OPERACIONES <%d>',
	'15' => 'ERROR. Operación inexistente <%d>',
	'16' => 'ERROR. Operación ya anulada <%d>',
	'17' => 'ERROR AL OBTENER CLAVE',
	'18' => 'ERROR. El ETILL no acepta el pedido',
	'19' => 'ERROR. Datos no numéricos',
	'20' => 'ERROR. Datos no alfa-numéricos',
	'21' => 'ERROR en el calculo del MAC ',
	'22' => 'ERROR en el calculo delMAC [%s-%s][cadena:%s]',
	'23' => 'ERROR. Usuario o password no valido.',
	'24' => 'ERROR. Tipo de moneda no valido. La operación debe realizarse en Euros.',
	'25' => 'ERROR. Importe no Integer.',
	'26' => 'ERROR. Operación no realizable 100.',
	'27' => 'ERROR. Formato CVV2/CVC2 no valido.',
	'28' => 'ERROR. Debe especificar el CVV2/CVC2 de su tarjeta.',
	'29' => 'ERROR. CVV2 no Integer.',
	'30' => 'ERROR. En estos momentos no es posible continuar sin cvc2/cvv2',
	'31' => 'ERROR. ERROR en la operatoria del comercio.',
	'32' => 'ERROR. Tipo de moneda no valido. La operación debe realizarse en Euros.',
	'33' => 'ERROR. El comercio solo puede realizar pagos en Euros',
	'34' => 'ERROR. Moneda o conversión no valida para esta tarjeta.[%d]',
	'35' => 'ERROR. Moneda o conversión no valida.[%d]',
	'36' => 'ERROR. Conversión a Euros no válida [%s][%s].',
	'37' => 'ERROR. El comercio no dispone de esta opción.',
	'38' => 'ERROR. Respuesta Errónea del Gestor de operaciones. [%d][%s].',
	'39' => 'ERROR. No es posible continuar con la preautorizacion.',
	'40' => 'ERROR. Error de comunicaciones Lu ́s. No es posible finalizar la operación.',
	'41' => 'ERROR. TimeOut SEP.No es posible finalizar la operación.',
	'42' => 'ERROR. SEP devuelve un 20 ERROR. No es posible finalizar la operación.',
	'43' => 'ERROR. Error inesperado. No es posible finalizar la operación [%d].',
	'44' => 'ERROR. Respuesta Errónea de SEP. No es posible finalizar la operación.',
	'45' => 'ERROR. No es posible continuar con la preautorización.',
	'46' => 'ERROR. Error en el proceso de Autentificación. No retroceda en el navegador. Debe volver al comercio y reintentar el pago.',
	'47' => 'ERROR. Entidad no disponible. Inténtelo dentro de unos minutos',
	'48' => 'ERROR. Error en el proceso de Autentificación. Respuesta PAREQ no valida [%d]. No retroceda en el navegador. Debe volver al comercio y reintentar el pago.',
	'49' => 'ERROR. Error en el proceso de Autentificación. Respuesta PAREQ de su entidad no valida: %s,TXSTATUS',
	'50' => 'ERROR. Fallo en el proceso de Autentificación. Es necesario una identificación positiva para finalizar el proceso de compra: %s,TXSTATUS',
	'51' => 'ERROR. Fallo en el proceso de Autentificación. El comercio no acepta pagos no seguros: %s. Póngase en contacto con la entidad emisora de su tarjeta.,TXSTATUS',
	'52' => 'ERROR. En estos momentos no es posible iniciar un pago seguro',
	'53' => 'ERROR. Comercio seguro. Su tarjeta no admite autentificación y no puede operar en este comercio [%s]. Póngase en contacto con la entidad emisora de su tarjeta.',
	'54' => 'ERROR. No es posible iniciar un pago seguro y el importe supera el máximo permitido (%f <= %s). [Resultado: %s]',
	'55' => 'ERROR. En este momento no es posible iniciar un pago seguro. [Resultado: %s]',
	'56' => 'ERROR. No es posible iniciar un pago seguro y el importe supera el máximo permitido (%f <= %s). [Resultado: %s]',
	'57' => 'ERROR. En este momento no es posible iniciar un pago seguro y el importe supera el máximo permitido (%f <= %s). [Resultado: %s]',
	'58' => 'ERROR. En este momento no es posible iniciar un pago seguro. [Resultado: %s]',
	'59' => 'ERROR. El comercio tiene un filtro que no permite esta operación.',
	'60' => 'ERROR. El Comercio solo admite pago seguro. Necesita autentificarse para continuar.',
	'61' => 'ERROR. Operación segura no permitida. Importe (%14.2f) mayor del limite establecido (%14.2f).',
	'62' => 'ERROR. El comercio tiene un filtro que no permite esta operación.(Filtro2:%d)',
	'63' => 'ERROR. El comercio no acepta pagos Visa no autentificados. Póngase en contacto con su entidad para activar este tipo de pago.',
	'64' => 'ERROR. El comercio no acepta pagos MasterCard no autentificado. Póngase en contacto con su entidad para activar este tipo de pago.',
	'65' => 'ERROR. El comercio no acepta pagos no autentificados. Póngase en contacto con su entidad para activar este tipo de pago.',
	'66' => 'ERROR. Error de proceso. El comercio no acepta pagos no autentificados. Póngase en contacto con su entidad para activar este tipo de pago.',
	'67' => 'ERROR. Operación segura no autorizada. Importe (%14.2f) mayor del limite establecido (%14.2f).',
	'68' => 'ERROR.Respuesta Errónea del Gestor de operaciones. Operación anulada [%s].Gestor: [%d][%s].',
	'69' => 'ERROR. Operatoria UCAF no valida. Póngase en contacto con su comercio o caja.',
	'70' => 'El comercio tiene un filtro que no permite esta operación.[Bines por países].',
	'71' => 'Este comercio solo admite el pago con tarjetas EURO 6000.',
	'72' => 'El comercio tiene un filtro que no permite esta operación.[Gestor de Bines].',
	'73' => 'El comercio tiene un filtro que no permite esta operación.[Operaciones por día e IP].',
	'74' => 'El comercio tiene un filtro que no permite esta operación.[Operaciones por día y tarjeta].',
	'100' => 'Tarjeta no válida (en negativos)',
	'101' => 'Tarjeta caducada',
	'104' => 'Tarjeta no válida (electrón)',
	'106' => 'Tarjeta no válida (reintentos de PIN)',
	'111' => 'Número de tarjeta mal tecleado (check)',
	'112' => 'Tarjeta no válida (se exige PIN)',
	'114' => 'No admitida la forma de pago solicitada',
	'116' => 'Saldo insuficiente',
	'118' => 'Tarjeta no válida (no existente en ficheros)',
	'120' => 'Tarjeta no válida en este comercio',
	'121' => 'Disponible sobrepasado',
	'123' => 'Número máximo de operaciones superado',
	'125' => 'La tarjeta todavía no es operativa',
	'180' => 'Tarjeta no soportada por el sistema',
	'190' => 'Operación no realizable (resto de casos)',
	'400' => 'Anulación aceptada',
	'480' => 'Anulación por TO aceptada sin encontrar la operación original',
	'900' => 'Devolución aceptada',
	'904' => 'Operación no realizable (error de formato)',
	'908' => 'Tarjeta desconocida',
	'909' => 'Operación no realizable (error de sistema)',
	'912' => 'Su entidad no está disponible',
	'913' => 'Operación no realizable (clave duplicada)',
	'914' => 'No existe la operación a anular',
	'930' => 'Operación no realizable (caja merchant no válida)',
	'931' => 'Operación no realizable (comercio no dado de alta)',
	'932' => 'Operación no realizable (bin merchant no existe)',
	'933' => 'Operación no realizable (sector desconocido)',
	'940' => 'Ya recibida una anulación 944 Operación no realizable (sesión no válida)',
	'948' => 'Operación no realizable (fecha/hora inválida)',
	'950' => 'Devolución no aceptada',
	'999' => 'Operación no realizable (resto de casos)'
);