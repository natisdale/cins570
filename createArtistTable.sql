CREATE TABLE IF NOT EXISTS moma.artist (
 id INT,
 name VARCHAR(100),
 bio VARCHAR(100),
 nationality VARCHAR(30),
 gender VARCHAR(12),
 birthYear INT,
 deathYear INT,
 wiki VARCHAR(10),
 ulan INT,
 PRIMARY KEY (id)
);