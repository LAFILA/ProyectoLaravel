# ProyectoLaravel

Una vez dentro, para hacer cualquier cosa has de ir hasta la carpeta "test" que es como se llama el proyecto.
Si no estás dentro de la carpeta ProyectoLaravel -> cd proyectolaravel/test  o  si estás -> cd test

Iniciamos el XAMPP ( Apache y MySql )

Lanzamos las migraciones y los seeders -> php artisan migrate:fresh --seed

Y luego lanzamos -> php artisan serve  , nos dirigimos al link y para entrar al login utilizaremos  -> /login o /home 

Una vez en el login puedes registrarte pero no tendrás permisos de administrador.

He creado dos usuarios uno con administrador y otro sin administrador :

Administrador : alfredo@alfredo.es  , contraseña : laravel
No Administrador : david@david.es , contraseña : laravel

El usuario Alfredo podrá Editar , Eliminar y Crear
El usuario David solo podrá visualizar

( Solo he puesto rol de administrador en el apartado de Usuarios ya que en los otros lo he hecho de otro tema distinto y no iba a poner un objeto de administrador )

Una vez ingresado el usuario o registrado, te aparecerá un perfil , el cual puedes cerrar en la esquina superior derecha para finalizar sesión.

Hay una lista de links la cuál indica las tres tablas, Usuarios, Botines y Teclados

Iconos :

Ojo -> Para observar el Usuario, Botin, Teclado
Lapiz -> Para editar el Usuario, Botin, Teclado
Papelera -> Para eliminar el Usuario, Botin, Teclado

( También puedes moverte por el encabezado donde he colocado las 3 tablas ) 

Para ir al perfil puedes pulsar en ( Volver al perfil ) y te dirigirá hacia el perfil , donde podrás volver a seleccionar tabla o desloguearte en la parte superior derecha.




LA BASE DE DATOS SE LLAMA  ( test )
