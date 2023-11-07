INSERT INTO `Usuario` (nome, email, senha, adm) VALUES ('admin', 'adm@adm', 'adminpass', 1);

CREATE VIEW vw_user_adm
AS
SELECT * FROM `Usuario` WHERE adm = 1;