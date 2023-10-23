CREATE TABLE `users_nm1` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `menu_nm1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `alergens` text,
  `price` decimal(10,2) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `orders_nm1` (
	`id` VARCHAR(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `items_ids` text NOT NULL,
  `items_names` text NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `ordered_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (user_id) REFERENCES users_nm1(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `menu_nm1` (name, description, alergens, price, img_url) VALUES 
('Zdravi Obrok', 'Balansirani obrok bogat proteinima i vitaminima.', 'Orasi', 300.00, 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c'),
('Roštilj Mix', 'Raznovrsna mesa sa roštilja, poslužena sa svežim povrćem.', NULL, 550.00, 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1'),
('Medene Palačinke', 'Slatke palačinke prelivene medom i voćem.', 'Gluten, Laktoza', 200.00, 'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445'),
('Doručak Mix', 'Zdrav doručak sa svežim voćnim sokovima.', 'Citrusi', 400.00, 'https://images.unsplash.com/photo-1493770348161-369560ae357d'),
('Vege Pizza', 'Vegetarijanska pizza sa svežim povrćem.', 'Gluten', 350.00, 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38'),
('Voćni Desert', 'Osvežavajući desert sa svežim voćem i kremom.', 'Laktoza', 280.00, 'https://images.unsplash.com/photo-1565958011703-44f9829ba187'),
('Hrskavi Doručak', 'Bogati doručak sa raznim namirnicama.', NULL, 450.00, 'https://images.unsplash.com/photo-1484723091739-30a097e8f929'),
('Zdrav Ručak', 'Obrok sa svežim povrćem i jajima.', 'Jaja', 320.00, 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe'),
('Pileći Mediteran', 'Piletina pripremljena sa mediteranskim začinima.', 'Luk', 400.00, 'https://images.unsplash.com/photo-1467003909585-2f8a72700288');
