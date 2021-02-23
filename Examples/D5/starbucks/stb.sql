CREATE DATABASE starbucks character set UTF8 collate utf8_vietnamese_ci;
USE starbucks;

CREATE TABLE menu (
    id char(8) PRIMARY KEY,
    img varchar (128),
    name varchar (128),
    sizeX double ,
    sizeM double ,
    sizeL double
);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('63911178', 'https://www.starbucks.vn/media/hazelnut-macchiato_tcm90-24778_w1024_n.jpg', 'Hazelnut Macchiatob', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('37623548', 'https://www.starbucks.vn/media/ristretto-bianco_tcm90-24779_w1024_n.jpg', 'Ristretto Bianco', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('76238998', 'https://www.starbucks.vn/media/asian-dolce-latte_tcm90-24780_w1024_n.jpg','Asian Dolce Latte', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('23456761', 'https://www.starbucks.vn/media/Caffe-Americano_tcm90-2059_w1024_n.jpg', 'Americano', 4.50, 5.25, 5.75);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('23423642', 'https://www.starbucks.vn/media/caffee-latte_tcm90-2062_w1024_n.jpg', 'Cà phê sữa', 4.50, 5.25, 5.75);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('78642981', 'https://www.starbucks.vn/media/caffee-mocha_tcm90-24781_w1024_n.jpg', 'Cà phê Mocha', 4.50, 5.25, 5.75);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('78236492', 'https://www.starbucks.vn/media/Asset-Vanilla-Latte_tcm90-10180_w1024_n.jpg', 'Cà phê sữa có Hương vị', 4.50, 5.25, 5.75);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('26874598', 'https://www.starbucks.vn/media/Skinny-Flavored-Latte_tcm90-2121_w1024_n.jpg', 'Cà phê sữa Không thức uống có Hương vị', 4.50, 5.25, 5.75);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('47659280', 'https://www.starbucks.vn/media/Cappuccino_tcm90-2066_w1024_n.jpg', 'Cappuccino', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('38493711', 'https://www.starbucks.vn/media/caramel-macchiato-thumb_tcm90-11384_w1024_n.jpg', 'Caramel Macchiato', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('91766762', 'https://www.starbucks.vn/media/Espresso_tcm90-2090_w1024_n.jpg', 'Espresso', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('18734850', 'https://www.starbucks.vn/media/EspressoConPanna_tcm90-2091_w1024_n.jpg', 'Espresso Con Panna', 4.25, 5.00, 5.50);
INSERT INTO menu(id, img, name, sizeX, sizeM, sizeL) VALUE ('82987482', 'https://www.starbucks.vn/media/EspressoMacchiato_tcm90-2092_w1024_n.jpg', 'Espresso Macchiato', 4.25, 5.00, 5.50);