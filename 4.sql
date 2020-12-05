
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `dekripsi` text NOT NULL,
  `nutrisi` varchar(255) NOT NULL,
  `serving_size` varchar(255) NOT NULL,
  `id_distributor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

--menambahkan data product

INSERT INTO `product` (`id`, `name`, `photo`, `dekripsi`, `nutrisi`, `serving_size`, `id_distributor`) VALUES (NULL, 'Animal Nuggets', 'gambar3.jpeg', 'Original Chicken Nugget Premium', 'kalori 5 per sajian', '500 gram', '3');

-- menampilkan tabel product
--
SELECT * FROM product;

-- menampilkan 1 data product dengan distributor tertentu

SELECT product.*,distributor.nama FROM product,distributor WHERE name ='Spicy Chicken Strip' AND product.id_distributor = distributor.id

--edit data product
UPDATE `distributor` SET `address` = 'Jakarta - Banten' WHERE `distributor`.`id` = 4;