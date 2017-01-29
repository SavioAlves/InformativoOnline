CREATE TABLE postagem (
                cod_post INT AUTO_INCREMENT NOT NULL,
                titulo   VARCHAR(50) NOT NULL,
                descricao VARCHAR(150) NOT NULL,
                data_post DATETIME NOT NULL,   
                PRIMARY KEY (cod_post)
);


CREATE TABLE foto (
                cod_foto INT AUTO_INCREMENT NOT NULL,
                foto_nome VARCHAR(25) NOT NULL,
                foto_tamanho VARCHAR(25) NOT NULL,
                foto_tipo VARCHAR(25) NOT NULL,
                foto LONGBLOB NOT NULL,
                PRIMARY KEY (cod_telefone)
);

CREATE TABLE categoria(
                cod_categoria INT AUTO_INCREMENT NOT NULL,
                nome VARCHAR(30) NOT NULL,
                PRIMARY KEY (cod_categoria)
);


ALTER TABLE foto ADD CONSTRAINT cod_foto_fk
FOREIGN KEY (cod_foto)
REFERENCES foto (cod_foto)
ON DELETE NO ACTION
ON UPDATE NO ACTION;