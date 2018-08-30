
CREATE TABLE sys_auditoria_usuario (
  id INTEGER(6) NOT NULL AUTO_INCREMENT,
  usuario_id INTEGER(11) NOT NULL,
  session_start TIMESTAMP DEFAULT NOW(),
  session_finish TIMESTAMP,
  CONSTRAINT `auditoria_usuario_id` PRIMARY KEY (`id`),
  CONSTRAINT `usuario_id_fk` FOREIGN KEY (`usuario_id`) REFERENCES `sys_usuario` (`Seq_Usuario`)
) ENGINE=InnoDB COMMENT='Registro de inicio de sesión de usuarios';