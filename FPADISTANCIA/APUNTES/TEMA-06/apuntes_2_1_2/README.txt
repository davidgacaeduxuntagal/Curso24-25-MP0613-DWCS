Esta carpeta se corresponde con los apartados de los apuntes:

2.1.2.- Utilización de un servicio web (III)
 -> uso de Wsdl2PhpGenerator


2.1.3.- Utilización de un servicio web (IV)

AVISO: RECUERDA!!!:
Al programar un servicio web, es importante cambiar en el fichero
 "php.ini" la directiva "soap.wsdl_cache_enabled" a "0". 
 En caso contrario, con su valor por defecto ("1") 
 los cambios que realices en los ficheros WSDL no tendrán 
 efecto de forma inmediata.

  También se puede hacer por cada archivo, sin modificar el php.ini con la siguiente instrucción al comienzo del script php:
 ini_set('soap.wsdl_cache_enabled',0);