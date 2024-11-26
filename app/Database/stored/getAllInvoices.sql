CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllInvoices`()
BEGIN
SELECT 
        f.id AS factura_id,
        f.numero_factura,
        DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') AS fecha_emision,
        f.monto_total,
        f.estatus,
        c.nombre AS cliente_nombre,
        c.email AS cliente_email,
        c.telefono AS cliente_telefono,
        c.direccion AS cliente_direccion
    FROM facturas f
    INNER JOIN clientes c ON f.cliente_id = c.id
    HAVING f.estatus = 'pendiente';
END