# Sistema de Facturación - Grupo 3

Proyecto desarrollado en **Laravel 12** como parte de la materia de Arquitectura de Software.  
Implementa un **Sistema de Facturación** con base de datos MySQL, modelos y migraciones relacionadas, uso de factories y seeders para generar datos de prueba automáticamente.

---

## Requerimientos

Antes de ejecutar el proyecto tener instalado:

- PHP 8.2.12
- Composer
- Laravel 12
- XAMPP 8.2.12
- Node.js

---

## Instalación del proyecto

En **Visual Studio Code** abrir una terminal y ubicarse en el directorio donde se desea guardar el proyecto usando el comando **cd**, después seguir los siguientes pasos:

1. Clonar este repositorio desde GitHub:
   git clone https://github.com/EderJAndrade/sistema-facturacion-grupo3.git

2. Ingresar al directorio del proyecto:
   cd sistema-facturacion-grupo3

3. Instalar las dependencias de Laravel:
   composer install

4. Copiar el archivo de entorno y configurarlo:
   cp .env.example .env

5. Generar la clave de aplicación:
   php artisan key:generate

---

## Configuración de la base de datos

1. Crear la base de datos en MySQL:
   CREATE DATABASE sistema_facturacion_grupo3 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

2. Crear un usuario con permisos:
   CREATE USER 'facturacion_g3_user'@'localhost' IDENTIFIED BY 'Gr3Fac';
   GRANT ALL PRIVILEGES ON sistema_facturacion_grupo3.* TO 'facturacion_g3_user'@'localhost';
   FLUSH PRIVILEGES;

3. En el archivo `.env` configurar la conexión:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sistema_facturacion_grupo3
   DB_USERNAME=facturacion_g3_user
   DB_PASSWORD=Gr3Fac

---

## Migraciones y Datos de Prueba

El proyecto incluye los siguientes modelos y migraciones relacionadas:

- **Cliente**
- **Producto**
- **Factura**
- **DetalleFactura**

Cada modelo tiene su **Factory** para generar datos y su **Seeder** correspondiente.

Para crear las tablas e insertar datos de prueba:
   php artisan migrate:fresh --seed

Este comando:
- Limpia y vuelve a crear todas las tablas.
- Ejecuta automáticamente los seeders en orden.
- Genera 100 clientes, 100 productos, 100 facturas y sus detalles (entre 1 y 5 por factura).

---

## Estructura del proyecto

**app/Models/**

- Cliente.php  
- Producto.php  
- Factura.php  
- DetalleFactura.php  

**database/factories/**

- ClienteFactory.php  
- ProductoFactory.php  
- FacturaFactory.php  
- DetalleFacturaFactory.php  

**database/seeders/**

- ClienteSeeder.php  
- ProductoSeeder.php  
- FacturaSeeder.php  
- DetalleFacturaSeeder.php  
- DatabaseSeeder.php  

**database/migrations/**

- create_clientes_table.php  
- create_productos_table.php  
- create_facturas_table.php  
- create_detalle_facturas_table.php

---

## Autores

**Grupo 3 - Arquitectura de Software**  
- Aguilar Mijas Laura Estefanía
- Andrade Alvarado Eder Jonathan
- Bucay Pallango Carlos Avelino
- Cisneros Cárdenas Freddy Gabriel
- Pita Clemente Karina Annabel

*Universidad de las Fuerzas Armadas ESPE*

Docente: *Vilmer David Criollo Chanchicocha*

**2025**

---