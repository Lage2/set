DROP TABLE IF EXISTS Programa;
DROP TABLE IF EXISTS Oradores;
DROP TABLE IF EXISTS Oportunidades;
DROP TABLE IF EXISTS Contribuicoes;
DROP TABLE IF EXISTS Empresa;

CREATE TABLE Empresa (
	nif VARCHAR(10),
	nome VARCHAR(255) NOT NULL UNIQUE,
	morada VARCHAR(255),
	localidade VARCHAR(30),
	cp VARCHAR(8),
	telefone VARCHAR(14) NOT NULL UNIQUE,
	fax VARCHAR(14),
	email VARCHAR(30) NOT NULL,
	site VARCHAR(30) NOT NULL,
	PRIMARY KEY (nif)
);

CREATE TABLE Contribuicoes (
	nif VARCHAR(10),
	ano YEAR,
	montante DECIMAL(8, 2),
	PRIMARY KEY (nif, ano),
	FOREIGN KEY (nif) REFERENCES Empresa(nif)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);

CREATE TABLE Oportunidades (
	id MEDIUMINT AUTO_INCREMENT,
	nif VARCHAR(10) NOT NULL,
	titulo VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	oportunidade TEXT NOT NULL,
	data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	FOREIGN KEY (nif) REFERENCES Empresa(nif)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);


CREATE TABLE Oradores (
	nifempresa VARCHAR(10),
	nome VARCHAR(255),
	descricao TEXT NOT NULL,
	PRIMARY KEY (nifempresa, nome),
	FOREIGN KEY (nifempresa) REFERENCES Empresa(nif)
	ON DELETE CASCADE
	ON UPDATE CASCADE
);

CREATE TABLE Programa (
	sala VARCHAR(15),
	data DATE,
	horainicio TIME,
	horafim TIME,
	tipo ENUM('Apresentação Empresa', 'Coffee Break', 'Almoço', 'Orador','Workshop') NOT NULL,
	nifempresa VARCHAR(10),
	nome VARCHAR(255) NOT NULL,
	descricao TEXT NOT NULL,
	PRIMARY KEY (sala, data, horainicio, horafim)
);


DROP TABLE IF EXISTS Noticias;

CREATE TABLE Noticias (
	id INTEGER AUTO_INCREMENT,
	titulo VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	carrossel BOOLEAN NOT NULL DEFAULT 0,
	PRIMARY KEY (id)
);


-- Views

DROP VIEW IF EXISTS carousel_news;

CREATE VIEW carousel_news AS
(SELECT * FROM Noticias WHERE carrossel=TRUE)
UNION
(SELECT * FROM Noticias)
LIMIT 5;


DROP VIEW IF EXISTS noncarousel_news;

CREATE VIEW noncarousel_news AS
SELECT * FROM Noticias WHERE (id)
NOT IN
(SELECT id FROM carousel_news);




DROP VIEW IF EXISTS allslots;

CREATE VIEW allslots AS
(SELECT DISTINCT horainicio, horafim, data FROM Programa);


DROP VIEW IF EXISTS allrooms;

CREATE VIEW allrooms AS
(SELECT DISTINCT sala FROM Programa);


DROP VIEW IF EXISTS schedule;

CREATE VIEW schedule AS
SELECT DATE_FORMAT(S.horainicio, '%H:%i') AS horainicio, DATE_FORMAT(S.horafim, '%H:%i') AS horafim, S.data, R.sala, P.tipo, P.nome, P.descricao
FROM
	allslots S
	CROSS JOIN
	allrooms R
	LEFT JOIN
	Programa P
	ON P.horainicio=S.horainicio AND P.sala=R.sala AND P.horafim=S.horafim AND P.data=S.data
ORDER BY horainicio, sala;


DROP VIEW IF EXISTS chances;

CREATE VIEW chances AS
SELECT * FROM Oportunidades
ORDER BY RAND()
LIMIT 2;

-- Exemplos para teste

INSERT INTO Empresa VALUES ('501507930', 'Instituto Superior Técnico - Taguspark', 'Av. Prof. Dr. Cavaco Silva nº1', 'Porto Salvo', '2744-016', '214233200', '214233268', 'dsi@tecnico.ulisboa.pt', 'www.ist.utl.pt');
INSERT INTO Empresa VALUES ('123456789', 'Instituto Superior Técnico - Alameda', 'Av. Não-sei-quantas nº1', 'Lisboa', '1234-567', '213456789', '213456789', 'alameda@tecnico.ulisboa.pt', 'www.tecnico.ulisboa.pt');

INSERT INTO Contribuicoes VALUES ('123456789', 2014, 1);
INSERT INTO Contribuicoes VALUES ('123456789', 2013, 1);
INSERT INTO Contribuicoes VALUES ('123456789', 2012, 1);

INSERT INTO Oportunidades(nif, titulo, descricao, oportunidade) VALUES ('501507930', 'Anúncio', 'É uma empresa e gostaria de anunciar aqui? Este espaço pode ser seu, contacte-nos.', 'Mais info');



INSERT INTO Oradores VALUES ('501507930', 'António Miguel Ferreira', 'CEO e co-fundador ultadde servidores.');
INSERT INTO Oradores VALUES ('501507930', 'Luís Gameiro da Silva', 'Luís Gameiro da Silva, licenciado em Eng. Electrotécnica, um profissional com vastos anos de experiência nas áreas da banca, seguros e utilities, actualmente administrador da Glintt.
A operar na Europa, África e América Latina, com presença forte nos sectores da Banca, Telecomunicações, Saúde, Comércio, Indústria e Administração Pública, a Glintt é uma das maiores empresas tecnológicas Portuguesas, cotada na NYSE Euronext Lisbon.');
INSERT INTO Oradores VALUES ('501507930','Cláudia Queirós','Cláudia Queirós trabalha há diversos anos na Ericsson e é actualmente gestora de Mobile Broadband Solutions para a região mediterrânica, com especial enfoque nas soluções de Rádio GSM, WCDMA e LTE da Ericsson.');


-- INSERT INTO Programa VALUES ('Sala 1 - 0.71', '2014-03-05', '11:00', '11:45', 'Apresentação Empresa', '501507930','Deloitte','Apresentação da Empresa Deloitte');
-- INSERT INTO Programa VALUES ('Sala 2', '2014-03-06', '11:00', '11:45', 'Apresentação Empresa', '501507930', 'Alfredio Josrefido', 'Empresa2', 'A Empresa 2 vai apresentar-se.');
-- INSERT INTO Programa VALUES ('Sala 1', '2014-03-06', '11:45', '12:00', 'Coffee Break', '501507930', 'Alfredio Josrefido', 'Coffee Break', 'Os que assistiram às apresentações anteriores têm direito a um Coffee Break.');
-- INSERT INTO Programa VALUES ('Sala 2', '2014-03-06', '11:45', '12:00', 'Coffee Break', '501507930', 'Alfredio Josrefido', 'Coffee Break', 'Os que assistiram às apresentações anteriores têm direito a um Coffee Break.');
-- INSERT INTO Programa VALUES ('Sala 1', '2014-03-06', '12:00', '12:45', 'Apresentação Empresa', '501507930', 'Alfredio Josrefido', 'Empresa3', 'A Empresa 3 vai apresentar-se.');
-- INSERT INTO Programa VALUES ('Sala 2', '2014-03-06', '12:00', '12:45', 'Apresentação Empresa', '501507930', 'Alfredio Josrefido', 'Empresa4', 'A Empresa 4 vai apresentar-se.');
-- INSERT INTO Programa VALUES ('Sala 1', '2014-03-06', '12:45', '13:30', 'Almoço', '501507930', 'Alfredio Josrefido', 'Almoço', 'Os que assistiram às apresentações anteriores têm direito a um almoço.');
-- INSERT INTO Programa VALUES ('Sala 2', '2014-03-06', '12:45', '13:30', 'Almoço', '501507930', 'Alfredio Josrefido', 'Almoço', 'Os que assistiram às apresentações anteriores têm direito a um almoço.');
-- INSERT INTO Programa VALUES ('Anfiteatro', '2014-03-06', '12:45', '13:30', 'Almoço', '501507930', 'Alfredio Josrefido', 'Almoço', 'Os que assistiram às apresentações anteriores têm direito a um almoço.');
-- INSERT INTO Programa VALUES ('Anfiteatro', '2014-03-06', '13:30', '14:30', 'Orador', '501507930', 'Alfredio Josrefido', 'Orador1', 'O orador 1 vai falar sobre o tema 1.');
-- INSERT INTO Programa VALUES ('Anfiteatro', '2014-03-06', '14:30', '14:45', 'Coffee Break', '501507930', 'Alfredio Josrefido', 'Coffee Break', 'Os que assistiram aos oradores anteriores têm direito a um Coffee Break.');
-- INSERT INTO Programa VALUES ('Anfiteatro', '2014-03-06', '14:45', '15:45', 'Orador', '501507930', 'Alfredio Josrefido', 'Orador2', 'O orador 2 vai falar sobre o tema 2.');
-- INSERT INTO Programa VALUES ('Sala 1', '2014-03-06', '15:45', '16:00', 'Coffee Break', '501507930', 'Alfredio Josrefido', 'Coffee Break', 'Os que assistiram aos oradores anteriores têm direito a um Coffee Break.');
-- INSERT INTO Programa VALUES ('Sala 2', '2014-03-06', '15:45', '16:00', 'Coffee Break', '501507930', 'Alfredio Josrefido', 'Coffee Break', 'Os que assistiram aos oradores anteriores têm direito a um Coffee Break.');
-- INSERT INTO Programa VALUES ('Anfiteatro', '2014-03-06', '15:45', '16:00', 'Coffee Break', '501507930', 'Alfredio Josrefido', 'Coffee Break', 'Os que assistiram aos oradores anteriores têm direito a um Coffee Break.');
-- INSERT INTO Programa VALUES ('Sala 1', '2014-03-06', '16:00', '18:00', 'Workshop', '501507930', 'Alfredio Josrefido', 'Workshop1', 'Workshop 1 sobre 1.');
-- INSERT INTO Programa VALUES ('Sala 2', '2014-03-06', '16:00', '18:00', 'Workshop', '501507930', 'Alfredio Josrefido', 'Workshop2', 'Workshop 2 sobre 2.');


INSERT INTO Noticias(titulo, descricao, carrossel) VALUES ('Bem-Vindo', 'Bem-vindo ao website da 11ª Edição da SET!', TRUE);
INSERT INTO Noticias(titulo, descricao, carrossel) VALUES ('SET', 'De 5 a 7 de Março de 2014 no Instituto Superior Técnico (Taguspark)', TRUE);
INSERT INTO Noticias(titulo, descricao, carrossel) VALUES ('Submete o teu CV', 'Podes submeter aqui o teu CV que será entregue às empresas participantes!', TRUE);
