CREATE TABLE devs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    devweb VARCHAR(20) NOT NULL,
    senioridade VARCHAR(20) NOT NULL,
    tecnologias VARCHAR(255),
    experiencia TEXT
);
