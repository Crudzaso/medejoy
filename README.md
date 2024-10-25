--- Branding: ---
Logo: ![image](https://github.com/user-attachments/assets/1755a47e-8fbc-419f-915c-b88a16415db0)
Slogan: Dream it, Raffle it, Win it!
Color Palette: https://coolors.co/1b3a1b-a4d65e-333333-eaeaea-ffffff

--- Estructura del proyecto ---
Proyecto: Plataforma de Venta de Boletas para Rifas Online.

1. Descripción General
  El proyecto consiste en el desarrollo de una plataforma web que permite la venta de boletas para participar en rifas organizadas por usuarios. Las rifas estarán vinculadas con los sorteos de la Lotería de Medellín, y cada boleta comprada corresponde a un número aleatorio que le da la oportunidad al usuario de ganar.

  La plataforma tendrá tres tipos de usuarios:

  Administrador: Gestiona la plataforma, usuarios y rifas.
  Organizador: Crea rifas, puede comprar boletas y gestionar sus rifas. 
  Cliente: Solo puede comprar boletas para rifas activas y participar en ellas.
  Invitados (no registrados): Pueden explorar la plataforma y ver información de rifas, pero deberán registrarse para participar.
  
2. Objetivo del Proyecto
  El propósito es ofrecer una plataforma de rifas en línea segura y sencilla, que permita:

  A los organizadores, crear rifas personalizadas.
  A los usuarios, comprar boletas y participar en múltiples rifas.
  A los administradores, supervisar las rifas y gestionar el comportamiento de los usuarios.
  
3. Funcionalidades Principales
  3.1. Funcionalidades de Usuario por Rol
  Administrador:
  Gestionar rifas (activar, desactivar, eliminar).
  Gestionar usuarios (suspender cuentas, cambiar roles).
  Visualizar reportes de ventas de boletas.
  Supervisar rifas activas y finalizadas.
  Organizador:
  Crear rifas indicando:
  Nombre, descripción y precio por boleta.
  Cantidad máxima de boletas disponibles.
  Fecha límite de participación.
  Ver estadísticas de participación en sus rifas.
  Comprar boletas para cualquier rifa como cliente.
  Cliente:
  Ver rifas disponibles.
  Comprar boletas (una o más) para participar en rifas activas.
  Consultar historial de compras y rifas en las que ha participado.
  Invitado (sin registro):
  Ver rifas activas y estadísticas generales.
  Registrarse para poder comprar boletas y participar en rifas.
5. Flujo de Procesos
4.1. Flujo de Creación de Rifa (Organizador)
Login del organizador.
Accede al dashboard donde tiene la opción de "Crear Rifa".
Completa los datos de la rifa:
Nombre, descripción, precio por boleta, fecha límite, cantidad de boletas.
La rifa queda visible para los usuarios clientes.
El organizador puede monitorear las estadísticas de su rifa (boletas vendidas).
4.2. Flujo de Compra de Boletas (Cliente u Organizador)
El usuario (cliente/organizador) accede a la rifa desde el listado.
Selecciona la cantidad de boletas a comprar.
Se genera un número aleatorio por boleta.
El usuario realiza el pago.
La boleta queda registrada en el sistema y vinculada al usuario.
4.3. Flujo de Gestión (Administrador)
Login del administrador.
Accede al panel de gestión donde puede:
Ver rifas activas, finalizadas o suspendidas.
Ver el listado de usuarios y editar roles o suspender cuentas.
Desactivar rifas o eliminar las que incumplan las reglas.
4.4. Flujo de Registro y Acceso de Usuarios
Un invitado visita la web y explora las rifas.
Si desea participar, debe registrarse como cliente u organizador.
Tras registrarse, accede al dashboard correspondiente a su rol.
