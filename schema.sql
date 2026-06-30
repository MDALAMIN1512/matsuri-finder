-- schema.sql
CREATE DATABASE IF NOT EXISTS matsuri_finder
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE matsuri_finder;

DROP TABLE IF EXISTS festivals;

CREATE TABLE festivals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    region VARCHAR(100),
    event_month VARCHAR(30),
    event_date VARCHAR(100),
    description TEXT,
    image_url VARCHAR(500),
    latitude DECIMAL(10,6),
    longitude DECIMAL(10,6),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO festivals
(name,city,region,event_month,event_date,description,image_url,latitude,longitude)
VALUES
('Kanda Matsuri','Tokyo','Kanto','May','Weekend closest to May 15','Traditional festival with mikoshi procession.','https://images.unsplash.com/photo-1542640244-7e672d6cef21?auto=format&fit=crop&w=400&q=80',35.6762,139.6503),
('Sanja Matsuri','Tokyo','Kanto','May','Third weekend of May','One of Tokyo''s largest festivals.','https://images.unsplash.com/photo-1503899036084-c55cdd92da26?auto=format&fit=crop&w=400&q=80',35.6762,139.6503),
('Gion Matsuri','Kyoto','Kansai','July','July 1 - July 31','Japan''s most famous festival.','https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=400&q=80',35.0116,135.7681),
('Tenjin Matsuri','Osaka','Kansai','July','July 24-25','River procession and fireworks.','https://images.unsplash.com/photo-1534447677768-be436bb09401?auto=format&fit=crop&w=400&q=80',34.6937,135.5023),
('Sapporo Snow Festival','Sapporo','Hokkaido','February','Early February','World-famous snow festival.','https://images.unsplash.com/photo-1547826039-bfc35e0f1ea8?auto=format&fit=crop&w=400&q=80',43.0618,141.3545);
