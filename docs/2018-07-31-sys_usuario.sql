
-- Agregar clave foranea de sys_rol
ALTER TABLE `sys_usuario` ADD `sys_rol_id` INT(11) NOT NULL AFTER `Departamento_Seq`;

-- Asignar valores por defecto - Administrador
UPDATE `sys_usuario` SET `sys_rol_id` = 1;

-- Constraints for table `reseller`
ALTER TABLE `sys_usuario`
  ADD CONSTRAINT `sys_usuario_sys_rol_id_fk` FOREIGN KEY (`sys_rol_id`) REFERENCES `sys_rol` (`Seq_Rol`);
