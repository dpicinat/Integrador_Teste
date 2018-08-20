



ALTER TABLE produtos DROP COLUMN idSubcategoria_Av2;





ALTER TABLE marcas ADD idCategorias INT;

SELECT * FROM marcas;
INSERT INTO marcas (Nome_Marcas) VALUES ('xxx');


DROP TABLE subcategoria_av2;

CREATE TABLE subcategoria_av2 (
idsubcategoria_av2 INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
Nome_Subcategoria_av2  VARCHAR(80), idsubcategoria_av1 INT );

ALTER TABLE produtos ADD Nome_Produtos VARCHAR(100);
ALTER TABLE produtos DROP COLUMN Nome_Produtos;
ALTER TABLE produtos MODIFY COLUMN idprodutos INT PRIMARY KEY AUTO_INCREMENT NOT NULL;
INSERT INTO marcas VALUES Acer;


USE mydb;

SELECT * FROM produtos;	

TRUNCATE TABLE produtos;

INSERT INTO categorias (Nome_Categorias, idsubcategoria_av1, idsubcategoria_av1) VALUES ('$value[0]', '$value[1]', '$value[2]');