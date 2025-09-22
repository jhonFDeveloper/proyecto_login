# 🔐 Proyecto Login  

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)  
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)  
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)  

Aplicación web desarrollada en **PHP** con conexión a **MySQL** para la gestión de usuarios mediante un sistema de **login seguro**.  
Este proyecto permite autenticarse y, una vez dentro, realizar operaciones de administración de usuarios con funcionalidades **CRUD**.  

---

## ✨ Funcionalidades principales  
- 🔑 **Iniciar sesión** con credenciales registradas.  
- ➕ **Agregar nuevos usuarios** al sistema.  
- ✏️ **Actualizar información de usuarios** existentes.  
- 🗑️ **Eliminar usuarios** de la base de datos.  
- 📂 **Persistencia de datos** con **MySQL**.  

---

## 🛠️ Tecnologías utilizadas  
- **Lenguaje:** PHP 💻  
- **Base de datos:** MySQL 🗄️  
- **Servidor local:** XAMPP ⚡  

---

## 🚀 Instrucciones de uso  
1. Clona o descarga este repositorio.  
2. Importa el archivo **`login_usuario.sql`** en **phpMyAdmin** para crear la base de datos y tablas.  
3. Abre el archivo **`conexion.php`** y actualiza los datos de conexión según tu entorno.  
   ```php
   $conexion = mysqli_connect("localhost", "usuario", "contraseña", "login_usuario");
