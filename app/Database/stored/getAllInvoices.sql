CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllInvoices`()
BEGIN
SELECT 
        f.id AS factura_id,
        f.numero_factura,
        DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') AS fecha_emision_LATAM,
        f.fecha_emision,
        FORMAT(f.monto_total, 2) AS monto_total_LATAM,
        f.monto_total,
        f.estatus,
        c.id AS cliente_id,
        c.nombre AS cliente_nombre,
        c.email AS cliente_email,
        c.telefono AS cliente_telefono,
        c.direccion AS cliente_direccion,
        FORMAT(IFNULL((SELECT SUM(monto_pago) 
                       FROM ordenes_pago 
                       WHERE factura_id = f.id), 0), 2) AS ABONADO
    FROM facturas f
    INNER JOIN clientes c ON f.cliente_id = c.id
    HAVING f.estatus = 'pendiente';
END