# Sistema de Gestión de Proyectos en Laravel

## Descripción
Este sistema permite gestionar proyectos de manera eficiente. Incluye funciones CRUD para proyectos y la generación de informes en PDF.

---

## Requisitos del Sistema
- **PHP:** 8.1 o superior
- **Laravel:** 9 o superior
- **Base de Datos:** MySQL
- **Servidor Web:** Apache (XAMPP)

---

## Instalación
1. Clonar el repositorio:
```bash
git clone https://github.com/RoValladares/practica-final.git
```

2. Acceder al directorio del proyecto:
```bash
cd practica-final
```

3. Instalar las dependencias:
```bash
composer install
```

4. Copiar el archivo de entorno:
```bash
cp .env.example .env
```

5. Configurar la base de datos en el archivo `.env`.

6. Generar la clave de la aplicación:
```bash
php artisan key:generate
```

7. Ejecutar las migraciones:
```bash
php artisan migrate
```

8. Iniciar el servidor de desarrollo:
```bash
php artisan serve
```

---

## Uso del Sistema
- Acceder al sistema en `http://127.0.0.1:8000`.
- CRUD de Proyectos: Crear, leer, actualizar y eliminar proyectos.
- Generar informes en PDF: Presionar el botón **Generar PDF** en la vista principal.

---

## Estructura de Carpetas
- **app/Http/Controllers:** Controladores del sistema.
- **app/Models:** Modelos de la base de datos.
- **resources/views:** Vistas del sistema (Blade).
- **routes/web.php:** Definición de rutas.

---

## Rutas Disponibles
- `/proyectos` - Listar proyectos.
- `/proyectos/create` - Crear un nuevo proyecto.
- `/proyectos/{id}/edit` - Editar un proyecto.
- `/proyectos/pdf` - Generar informe en PDF.

---

## Generación de PDF
El sistema usa la librería `barryvdh/laravel-dompdf` para generar informes. El archivo Blade para el PDF se encuentra en:
```plaintext
resources/views/proyectos/pdf.blade.php
```

---

## Contacto
- **Estudiante:** Rodrigo Humberto Valladares Reyes
- **Correo Electrónico:** rodrigo_valladares94@hotmail.com

---

© 2025

