<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Plataforma de Rentas para Eventos

### API RESTful Backend (Laravel)

Este backend provee una API REST para gestionar clientes, artículos/servicios, paquetes, rentas y cotizaciones para un sistema de renta de eventos.

---

## Documentación de Endpoints

### Recursos principales:
- **Clientes** (`/api/clientes`)
- **Artículos/Servicios** (`/api/articulos`)
- **Paquetes** (`/api/paquetes`)
- **Rentas** (`/api/rentas`)
- **Cotizaciones** (`/api/cotizaciones`)

---

### Ejemplo de endpoints y métodos

#### Clientes
| Método | Endpoint                | Descripción           |
|--------|-------------------------|-----------------------|
| GET    | /api/clientes           | Listar clientes       |
| POST   | /api/clientes           | Crear cliente         |
| GET    | /api/clientes/{id}      | Ver cliente           |
| PUT    | /api/clientes/{id}      | Actualizar cliente    |
| DELETE | /api/clientes/{id}      | Eliminar cliente      |

#### Artículos/Servicios
| Método | Endpoint                | Descripción           |
|--------|-------------------------|-----------------------|
| GET    | /api/articulos          | Listar artículos      |
| POST   | /api/articulos          | Crear artículo        |
| GET    | /api/articulos/{id}     | Ver artículo          |
| PUT    | /api/articulos/{id}     | Actualizar artículo   |
| DELETE | /api/articulos/{id}     | Eliminar artículo     |

#### Paquetes
| Método | Endpoint                | Descripción           |
|--------|-------------------------|-----------------------|
| GET    | /api/paquetes           | Listar paquetes       |
| POST   | /api/paquetes           | Crear paquete         |
| GET    | /api/paquetes/{id}      | Ver paquete           |
| PUT    | /api/paquetes/{id}      | Actualizar paquete    |
| DELETE | /api/paquetes/{id}      | Eliminar paquete      |

#### Rentas
| Método | Endpoint                | Descripción           |
|--------|-------------------------|-----------------------|
| GET    | /api/rentas             | Listar rentas         |
| POST   | /api/rentas             | Crear renta           |
| GET    | /api/rentas/{id}        | Ver renta             |
| PUT    | /api/rentas/{id}        | Actualizar renta      |
| DELETE | /api/rentas/{id}        | Eliminar renta        |

#### Cotizaciones
| Método | Endpoint                | Descripción           |
|--------|-------------------------|-----------------------|
| GET    | /api/cotizaciones       | Listar cotizaciones   |
| POST   | /api/cotizaciones       | Crear cotización      |
| GET    | /api/cotizaciones/{id}  | Ver cotización        |
| PUT    | /api/cotizaciones/{id}  | Actualizar cotización |
| DELETE | /api/cotizaciones/{id}  | Eliminar cotización   |

---

### Ejemplo de petición para crear un cliente
```json
POST /api/clientes
{
  "nombre": "Juan Pérez",
  "email": "juan@demo.com",
  "telefono": "555-1234",
  "direccion": "Calle Falsa 123"
}
```

### Respuesta exitosa
```json
{
  "data": {
    "id": 1,
    "nombre": "Juan Pérez",
    "email": "juan@demo.com",
    "telefono": "555-1234",
    "direccion": "Calle Falsa 123",
    "created_at": "2025-05-12T22:00:00.000000Z",
    "updated_at": "2025-05-12T22:00:00.000000Z"
  }
}
```

---

### Notas
- Todas las respuestas siguen el formato `{ "data": ... }` o `{ "message": ... }` para errores.
- Se recomienda usar herramientas como Postman o Insomnia para probar los endpoints.
- Para detalles de validación y campos requeridos, ver los Form Requests en `app/Http/Requests`.

---


Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
