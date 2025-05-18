# CHANGELOG

## 2025-05-18

### Refactorización y Limpieza Total del Frontend

- Se eliminó toda la navegación basada en páginas Astro tradicionales (`dashboard.astro`, `clientes.astro`, `articulos.astro`, `cotizaciones.astro`, `paquetes.astro`, `rentas.astro`).
- Se centralizó la navegación en una sola SPA bajo `/app` usando React y Astro (`app.astro`, `app.jsx`).
- Sidebar y Header ahora son componentes fijos y responsivos.
- Sidebar navega entre módulos de manera dinámica sin recarga de página.
- Se eliminaron archivos de ejemplo y bienvenida (`Welcome.astro`, imágenes de Astro, layout antiguo).
- Limpieza de carpetas: sólo quedan los componentes y páginas necesarios.
- Corrección de imports y nombres para evitar conflictos en `app.astro`.
- Limpieza y optimización de `tsconfig.json` para incluir sólo los archivos relevantes.
- Se revisaron y confirmaron dependencias en `package.json`.
- Documentación y estructura alineadas al nuevo enfoque SPA.

---

## Cambios Técnicos Clave

- SPA React/Astro para navegación instantánea entre módulos.
- Sidebar y header fijos, con estilos y experiencia coherente.
- Eliminación de archivos y assets no utilizados.
- Redirección automática de `/` a `/app`.
- Código y estructura listos para escalar y mantener fácilmente.
