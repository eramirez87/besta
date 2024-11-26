# Examen Técnico - BESTA

Este proyecto es el desarrollo de una prueba técnica solicitada por la empresa BESTA. Consiste en la implementación de un sistema CRUD básico para la gestión de productos o entidades, utilizando **CodeIgniter 4 (CI4)**, **jQuery** y **procedimientos almacenados en MySQL**. Además, se incluyen reportes relacionados con órdenes de pago, facturas, clientes y carteras, cumpliendo con los requerimientos establecidos.

---

## **Requisitos del Proyecto**

1. **CRUD con Ajax**:
   - Crear, editar y listar elementos utilizando llamadas asíncronas con jQuery y AJAX.
   - Modal para agregar y editar registros.
   - Al menos 3 campos requeridos para cada registro.

2. **Base de Datos**:
   - Utilizar procedimientos almacenados en MySQL.
   - Aplicar `ON DUPLICATE KEY UPDATE` para inserciones y actualizaciones.
   - Relaciones entre tablas: órdenes de pago, facturas, clientes y carteras.

3. **Consultas MySQL**:
   - Uso de funciones como `CONCAT`, `FORMAT`, `SUBSTRING`, `REPLACE`.
   - Aplicar cláusulas `LEFT JOIN`, `INNER JOIN`, `HAVING`, `UNION`, y `FIND_IN_SET`.
   - Generar reportes que incluyan conciliaciones entre órdenes de pago y facturas.
   - Calcular la cobranza efectiva por cartera y detallar pagos y facturas por cliente.

4. **Entorno**:
   - Implementar en CodeIgniter 4.
   - Base de datos con diseño adecuado y relaciones entre tablas.

---

## **Instalación**

1. Clonar este repositorio:
   ```bash
   git clone https://github.com/tu-usuario/examen-besta.git
   cd examen-besta
