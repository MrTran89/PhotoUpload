use uploadImage;

create table images(
	id int auto_increment,
	link varchar(255),
	width_img int,
	height_img int,
	primary key (id)
);