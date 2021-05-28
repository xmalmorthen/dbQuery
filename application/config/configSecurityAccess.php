<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Autor: Xmal Morthen
* Fecha: 30-01-2020
* Descripción: Archivo para configurar los accesos anónimos al sistema
* Configuración:
*	Array: 
*           anonymousAccess : nombre base del arreglo
*           directory       : Directorio donde se encuentra el controlador [ / en caso de que se encuentr en raíz ]
*           controller      : Nombre del controlador
*           action          : Nombre de la acción
* Nota:
*           El acceso anónimo es por controlador y acción, esto permite tener acciones de controlador
*           que no necesariamente sean accesibles anínimamente.
*/

/*
* Autor: Xmal Morthen
* Fecha: 30-01-2020
* Descripción: Enumerador de tipos de seguridad de acceso a los scripts
*/
abstract class securityMethods
{
    const unknown       = 0;
    const session       = 1;
    const userSession   = 2;    
    const anonymous     = 3;
}

/*
* Autor: Xmal Morthen
* Fecha: 30-01-2020
* Descripción: Variable de configuración general de acceso
*/
$config['securityAccess']['general'] = TRUE;

/*
* Autor: Xmal Morthen
* Fecha: 30-01-2020
* Descripción: Variable de configuración general de privilegios
*/
$config['securityAccess']['privilegios'] = FALSE;

/*
* Autor: Xmal Morthen
* Fecha: 30-01-2020
* Descripción: Arreglo de configuración de accesos
*/

$config['securityAccess']['/']['error']['all']= securityMethods::anonymous;
$config['securityAccess']['/']['usersession']['all']= securityMethods::anonymous;
$config['securityAccess']['/']['sesion']['all']= securityMethods::anonymous;
// $config['securityAccess']['/']['log']['all']= securityMethods::anonymous;
// $config['securityAccess']['pantalla_principal/']['index']['all']= securityMethods::anonymous;
// $config['securityAccess']['pantalla_principal/']['about']['all']= securityMethods::anonymous;
// $config['securityAccess']['recuperar_contrasenia/']['index']['all']= securityMethods::anonymous;
// $config['securityAccess']['solicitudes/']['linea']['all']= securityMethods::anonymous;

// $config['securityAccess']['test/']['index']['cachepage'] = securityMethods::userSession; //controlador raiz log, todos las acciones