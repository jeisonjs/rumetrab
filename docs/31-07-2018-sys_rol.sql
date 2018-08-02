
-- Asignando la clave primaria
ALTER TABLE `sys_rol` ADD PRIMARY KEY(`Seq_Rol`);

-- Y que el campo sea autoincrementable
ALTER TABLE `sys_rol` CHANGE `Seq_Rol` `Seq_Rol` INT(11) NOT NULL AUTO_INCREMENT;