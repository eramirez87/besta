CREATE DEFINER=`root`@`localhost` PROCEDURE `updateOrCreateInvoice`(
	IN p_cliente_id INT UNSIGNED,
    IN p_numero_factura VARCHAR(100), -- Llave unica
    IN p_fecha_emision DATE,
    IN p_monto_total DECIMAL(10,2),
    IN p_estatus VARCHAR(50),
    IN p_created_at DATETIME,
    IN p_updated_at DATETIME)
BEGIN
INSERT INTO facturas (cliente_id, numero_factura, fecha_emision, monto_total, estatus, created_at, updated_at)
    VALUES (p_cliente_id, p_numero_factura, p_fecha_emision, p_monto_total, p_estatus, p_created_at, p_updated_at)
    ON DUPLICATE KEY UPDATE
        cliente_id = VALUES(cliente_id),
        fecha_emision = VALUES(fecha_emision),
        monto_total = VALUES(monto_total),
        estatus = VALUES(estatus),
        updated_at = VALUES(updated_at);
END