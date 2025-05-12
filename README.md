# Plataforma de Rentas para Eventos

Este proyecto es una plataforma web diseñada para empresas que ofrecen servicios y artículos para eventos (audiovisuales, bodas, pistas de baile, decoración, flores, mobiliario, etc). Permite gestionar clientes, inventario, agenda, cotizaciones, contratos, reportes y usuarios.

## Tabla de Contenidos
- [Resumen](#resumen)
- [Tecnologías](#tecnologías)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Instalación y Uso](#instalación-y-uso)
- [Fases del Proyecto](#fases-del-proyecto)
- [Contribuciones](#contribuciones)
- [Licencia](#licencia)

## Resumen
La plataforma busca digitalizar y optimizar la gestión de rentas de eventos, facilitando el seguimiento de clientes, artículos y servicios, automatizando la generación de cotizaciones y contratos, y mejorando la administración de inventario y agenda.

## Tecnologías
- **Frontend:** Astro JS
- **Backend:** Laravel
- **Base de datos:** MySQL o PostgreSQL
- **Comunicación:** API REST

## Estructura del Proyecto
```
crm-project/
├── backend/        # Laravel
├── frontend/       # Astro JS
├── project-idea/   # Imágenes y documentos de referencia
├── PROJECT-PLAN.md # Plan detallado del proyecto
└── README.md       # Este archivo
```

## Instalación y Uso

### 1. Clonar el repositorio
```bash
git clone git@github.com:Edenml264/events-crm.git
cd events-crm
```

### 2. Configurar el backend (Laravel)
- Instalar dependencias:
  ```bash
  cd backend
  composer install
  cp .env.example .env
  php artisan key:generate
  # Configura la conexión a la base de datos en .env
  php artisan migrate
  php artisan serve
  ```

### 3. Configurar el frontend (Astro JS)
- Instalar dependencias:
  ```bash
  cd ../frontend
  npm install
  npm run dev
  ```

### 4. Acceso
- Frontend: `http://localhost:3000`
- Backend API: `http://localhost:8000`

## Fases del Proyecto
Consulta el archivo [PROJECT-PLAN.md](./PROJECT-PLAN.md) para ver el plan detallado, fases, diagrama de Gantt y módulos.

## Contribuciones
¡Las contribuciones son bienvenidas! Por favor, abre un issue o pull request para sugerir mejoras o reportar bugs.

## Licencia
Este proyecto está bajo la licencia MIT.

---

> Para más detalles, ideas y recursos visuales, revisa la carpeta `/project-idea` y el archivo `PROJECT-PLAN.md`.
