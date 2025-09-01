<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="220" alt="Laravel Logo">
  </a>
</p>

# 🎓 Laravel Cursos – Plataforma de Práctica Escolar

**Laravel Cursos** es una aplicación desarrollada como parte de una **práctica escolar**, cuyo objetivo es simular una página web que ofrece servicios de cursos en línea.  
El proyecto se centra en el aprendizaje de **frameworks modernos**, integración de herramientas y buenas prácticas de desarrollo full-stack.

[![Repo](https://img.shields.io/badge/GitHub-TodTete-blue?logo=github)](https://github.com/TodTete/Laravel-Cursos)
[![Status](https://img.shields.io/badge/status-en%20desarrollo-orange)](#estado)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

---

## 📋 Acerca del Proyecto

El proyecto busca:

- Simular un **sistema de cursos online**.  
- Practicar con **Laravel** y su ecosistema.  
- Integrar librerías externas para mejorar la UI/UX.  
- Aplicar conceptos de backend, frontend y bases de datos.  

---

## 🧱 Tecnologías utilizadas

- 🟥 **Laravel** – Framework backend principal  
- 🎨 **Tailwind CSS** <img src="https://img.icons8.com/color/48/000000/tailwind-css.png" width="20" /> – Estilos modernos  
- 🎉 **Confetti.js** <img src="https://img.icons8.com/fluency/48/000000/javascript.png" width="20" /> – Animaciones interactivas  
- 🎀 **Bootstrap** <img src="https://img.icons8.com/color/48/000000/bootstrap.png" width="20" /> – Componentes responsivos  
- 🗄️ **MySQL** <img src="https://img.icons8.com/fluency/48/000000/mysql-logo.png" width="20" /> – Base de datos relacional  
- 🟢 **Node.js** <img src="https://img.icons8.com/color/48/000000/nodejs.png" width="20" /> – Dependencias frontend  

---

## 📂 Estructura del Proyecto

```

Laravel-Cursos/
├─ app/             # Lógica principal del proyecto
├─ bootstrap/       # Configuración inicial
├─ config/          # Archivos de configuración
├─ database/        # Migraciones y seeders
├─ public/          # Archivos públicos
├─ resources/       # Vistas Blade, CSS, JS
├─ routes/          # Rutas de la aplicación
├─ storage/         # Archivos generados
├─ tests/           # Pruebas
├─ artisan          # CLI de Laravel
├─ composer.json    # Dependencias PHP
├─ package.json     # Dependencias Node.js
├─ server.php       # Punto de entrada
└─ webpack.mix.js   # Configuración de compilación

````

---

## 🚀 Instalación y Ejecución

1. Clona el repositorio:
   ```bash
   git clone https://github.com/TodTete/Laravel-Cursos.git
   cd Laravel-Cursos

2. Instala dependencias de PHP y Node.js:

   ```bash
   composer install
   npm install && npm run dev
   ```

3. Copia el archivo de entorno:

   ```bash
   cp .env.example .env
   ```

4. Genera la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

5. Configura la base de datos en `.env` y ejecuta migraciones:

   ```bash
   php artisan migrate --seed
   ```

6. Levanta el servidor:

   ```bash
   php artisan serve
   ```

7. Abre en tu navegador:
   👉 `http://localhost:8000`

---

## 🎯 Objetivo Académico

Este proyecto permite a los estudiantes:

* Practicar el desarrollo con **Laravel** y **MySQL**.
* Explorar el uso de **frameworks de frontend**.
* Aprender a integrar librerías externas en un flujo full-stack.
* Simular un sistema **realista de cursos online**.

---

## 📬 Contacto

* 💼 **LinkedIn:** [Ricardo Vallejo Sánchez](https://www.linkedin.com/in/ricardo-vallejo-sanchez-8034a9199/)
* 📧 **Correo Electrónico:** [vallejoricardo3@gmail.com](mailto:vallejoricardo3@gmail.com)

---

## 👨‍💻 Autor

Creado por **Ricardo Vallejo Sánchez**
🔗 [Repositorio oficial](https://github.com/TodTete/Laravel-Cursos)

---

## 📜 Licencia

Este proyecto está bajo la licencia **MIT**.
Consulta el archivo [`LICENSE`](LICENSE) para más información.
