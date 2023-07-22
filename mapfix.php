CREATE TABLE fabricante (
cnpj char(14) NOT NULL,
nome varchar(100) NOT NULL,
PRIMARY KEY (cnpj)
);
CREATE TABLE modelo (
codigo int NOT NULL,
descricao varchar(100) NOT NULL,
fabricante char(14) NOT NULL,
PRIMARY KEY (codigo),
FOREIGN KEY (fabricante) REFERENCES fabricante (cnpj)
);
CREATE TABLE proprietario (
cpf char(11) NOT NULL,
nome char(100) NOT NULL,
PRIMARY KEY (cpf),
);
CREATE TABLE carro (
chassi char(20) NOT NULL,
placa char(7) NOT NULL,
modelo int NOT NULL,
cpf_proprietario char(11) NOT NULL,
PRIMARY KEY (chassi),
FOREIGN KEY (modelo) REFERENCES modelo (codigo),
FOREIGN KEY (cpf_proprietario) REFERENCES proprietario (cpf)
);