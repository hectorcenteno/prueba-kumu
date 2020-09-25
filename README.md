# prueba-kumu
Este repo incluye lo necesario para el ejercicio de programación para contratación en Kumu

### Instalación, clona o descarga el zip

Para inicializar el proyecto correo el comando:

```
composer dump-autoload
```


## Requerimientos

Crear un administrador de pagos que opere lo siguientes elementos:

1. Accounts
2. Client
3. Charge

Este administrador de pagos me debe permitir realizar las siguientes actividades:

1. Crear una cuenta, esta cuenta la conoceremos como "Cuenta de cobranza".
2. Cada cuenta creada debe estar ligada a un Cliente.
3. Dentro de cada cuenta puedo agregar diferentes "cargos" pendientes de pago

---

El resultado esperado de esta prueba es que el código en el archivo `public/Enterprise.php`
corra correctamente al ajecutar el siguiente comando:

```
php public/enterprise.php
```

En este archivo encontrarás el código con la implementación final de tu tarea, tu misión es asegurarte de que mi código corra correctamente.

El código es el siguiente:

``` php

$cliente = new Customer('Hector');

$charge1 = new Charge('iPad Pro 64 Gb', 24000, 1);
$charge2 = new Charge('SSD 500 Gb', 3500, 5);
$charge3 = new Charge('Magic Mouse', 1200, 15);

$account = new Account();

$account->setClient( $cliente);

$account->addCharge( $charge1);
$account->addCharge( $charge2);
$account->addCharge( $charge3);


```
*El resultado de correr el código anterior en la consola debe ser:*

```
Resumen de la cuenta del cliente Hector.
Hay 3 conceptos de cobranza.
la cuenta es por un total de $ 28700
```

___

Encontrarás un ejemplo de la tarea que realizamos en nuestra entrevista al correr el archivo:

```
php public/task_manager.php
```

El resultado al correr este script es:

```
Hay 1 tareas en la lista.
```
