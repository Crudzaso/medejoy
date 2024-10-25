--- Branding: ---
Logo: ![image](https://github.com/user-attachments/assets/1755a47e-8fbc-419f-915c-b88a16415db0)
Slogan: Dream it, Raffle it, Win it!
Color Palette: https://coolors.co/1b3a1b-a4d65e-333333-eaeaea-ffffff

--- Estructura del proyecto: ---
# 🎟️ Plataforma de Venta de Boletas para Rifas Online

## 1. Descripción General
El proyecto consiste en el desarrollo de una plataforma web que permite la venta de boletas para participar en rifas organizadas por usuarios. Las rifas estarán vinculadas con los sorteos de la Lotería de Medellín, y cada boleta comprada corresponde a un número aleatorio que le da la oportunidad al usuario de ganar.

*Tipos de usuarios en la plataforma:*
- 👑 *Administrador*: Gestiona la plataforma, usuarios y rifas.
- 🌟 *Organizador*: Crea rifas, compra boletas y gestiona sus rifas.
- 👤 *Cliente*: Compra boletas para rifas activas y participa en ellas.
- 👥 *Invitados*: Exploran la plataforma, pero deben registrarse para participar.

## 2. Objetivo del Proyecto
Ofrecer una plataforma segura y sencilla que permita:  
- A los organizadores, *crear rifas* personalizadas.  
- A los clientes, *comprar boletas* y participar en rifas.  
- A los administradores, *supervisar* rifas y gestionar usuarios.  

## 3. Funcionalidades Principales

### 3.1. Funcionalidades por Rol
- *Administrador* 👑  
  - Gestionar rifas (activar, desactivar, eliminar).
  - Gestionar usuarios (suspender cuentas, cambiar roles).
  - Ver reportes 📊 de ventas.
  - Supervisar rifas activas y finalizadas.

- *Organizador* 🌟  
  - Crear rifas indicando:
    - Nombre, descripción, precio por boleta.
    - Cantidad máxima de boletas y fecha límite.
  - Ver estadísticas 📈 de participación.
  - Comprar boletas como cliente.

- *Cliente* 👤  
  - Ver rifas disponibles.
  - Comprar boletas para rifas activas.
  - Consultar historial de compras.

- *Invitado* 👥  
  - Explorar rifas activas y estadísticas generales.
  - Registrarse para participar.

## 4. Flujo de Procesos

### 4.1. Flujo de Creación de Rifa
1. Login del organizador.
2. Accede al dashboard.
3. Crea una rifa con los datos requeridos.
4. La rifa queda visible para los usuarios.
5. El organizador monitorea las ventas.

### 4.2. Flujo de Compra de Boletas
1. El cliente selecciona una rifa.
2. Escoge la cantidad de boletas.
3. Se generan números aleatorios por boleta.
4. Realiza el pago 💳.
5. La boleta se vincula al usuario.

### 4.3. Flujo de Gestión por el Administrador
1. Login del administrador.
2. Accede al panel de gestión.
3. Administra rifas y usuarios.

### 4.4. Registro y Acceso
1. El invitado explora la plataforma.
2. Se registra para comprar boletas.
3. Accede al dashboard correspondiente.

## 5. Estructura de la Base de Datos
- *Tabla users* 👤  
  id, name, email, password, role, created_at, updated_at

- *Tabla rifas* 🎟️  
  id, nombre, descripcion, precio_boleta, cantidad_boletas, organizador_id, fecha_limite

- *Tabla boletas* 🛒  
  id, rifa_id, usuario_id, numero_boleta, created_at

- *Tabla compras* 💳  
  id, boleta_id, usuario_id, created_at

## 6. Requerimientos Técnicos
- *Backend*: Laravel
- *Autenticación*: Jetstream con roles y permisos
- *Frontend*: Blade + TailwindCSS
- *Base de Datos*: MySQL
- *Pagos*: Integración con pasarelas (PayU/Stripe)

## 7. Seguridad y Validaciones
- *Autenticación segura* con Fortify y 2FA opcional.
- *Control de acceso* mediante Gates o Policies.
- Validación de formularios.
- *Pagos seguros* a través de pasarelas.

## 8. UI/UX
- *Pantalla de inicio*: Rifas activas y botones de registro/login.
- *Dashboard*:
  - *Cliente*: Historial de compras.
  - *Organizador*: Rifas y estadísticas.
  - *Administrador*: Gestión completa.
- *Compra de Boletas*: Proceso sencillo y seguro.

## 9. Casos de Uso
1. Un organizador crea una rifa con 100 boletas y se venden todas.
2. Un administrador desactiva una rifa por incumplir las políticas.
3. Un cliente participa en varias rifas.
4. Un usuario no registrado se registra y compra boletas.

## 10. Conclusión
Este proyecto busca desarrollar una plataforma robusta y segura para rifas en línea, permitiendo a los organizadores gestionar rifas y a los usuarios participar fácilmente. La supervisión por parte de los administradores garantiza la transparencia y la correcta operación del sistema.
