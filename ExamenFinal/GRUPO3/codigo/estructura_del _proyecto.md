## 📁 Estructura del Proyecto

```txt
C:.
│   docker-compose.yml
│   Dockerfile
│   home.php
│   index.php
│   login.php
│
├───.vscode
│       launch.json
│
├───administracion
│   │   index.php
│   │
│   └───Pages
│           cambiarEstado.php
│           cambiarRol.php
│           editarRoles.php
│           eliminarUsuario.php
│           modificarSalario.php
│           modificarUsuario.php
│           parametrosRoles.php
│           registro.php
│           verUsuarios.php
│
├───cafeteria
│   │   index.php
│   │
│   └───Pages
│           modificarProducto.php
│           registrarInventarioService.php
│           registrarProductoService.php
│           registrarVentasService.php
│           registroInventario.php
│           registroProductos.php
│           registroVentas.php
│           verIngresos.php
│           verProductos.php
│           verVentas.php
│
├───css
│       administracion_index.css
│       administracion_login.css
│       administracion_registro.css
│       administracion_ver_usuarios.css
│       cafeteria_index.css
│       cafeteria_registro.css
│       cafeteria_ver.css
│       dash_index.css
│       home.css
│       hostal_index.css
│       hostal_registro.css
│       hotas_registrar.css
│       hotas_ver_datos.css
│
├───dashboard
│       index.php
│
├───hostal
│   │   index.php
│   │
│   └───Pages
│           checkin.php
│           checkout.php
│           eliminarCliente.php
│           eliminarHabitacionOcupadaService.php
│           eliminarHabitacionService.php
│           eliminarReservaAJAX.php
│           habitaciones.php
│           habitacionService.php
│           modificarCliente.php
│           modificarReservaAJAX.php
│           registrarCheckIN.php
│           registrarCheckOUT.php
│           registrarCliente.php
│           registrarClienteService.php
│           registrarHabitacion.php
│           registrarReserva.php
│           registrarReservaService.php
│           registroHabitacion.php
│           registroIngresos.php
│           verCliente.php
│           verHabitacionesDisponibles.php
│           verHabitacionesOcupadas.php
│           verHabitacionesReservadas.php
│           verReservas.php
│
├───includes
│   │   requeriments_administracion.php
│   │   requeriments_cafeteria.php
│   │   requeriments_dashboard.php
│   │   requeriments_hospedaje.php
│   │   requeriments_ingreso.php
│   │   requeriments_registro.php
│   │
│   └───DAOS
│       │   administradorDAO.php
│       │   checkDAO.php
│       │   clienteDAO.php
│       │   coordinadorDAO.php
│       │   db.php
│       │   empleadoDAO.php
│       │   habitacionDAO.php
│       │   historialDAO.php
│       │   inventarioDAO.php
│       │   parametrosDAO.php
│       │   productoDAO.php
│       │   reservaDAO.php
│       │   rolDAO.php
│       │   usuarioDAO.php
│       │   usuarioFacturacionDAO.php
│       │   ventaDAO.php
│       │
│       └───objets
│               Administrador.php
│               Check.php
│               Cliente.php
│               Coordinador.php
│               Empleado.php
│               Habitacion.php
│               Historial.php
│               Inventario.php
│               Producto.php
│               Reserva.php
│               Rol.php
│               Usuario.php
│               Usuario_Facturacion.php
│               Venta.php
│
└───mysql-init
        casa_del_caf__ (7).sql
        init.sql
