create database music;

use music;

create table album(
    album_id int(5) not null auto_increment,
    album_name varchar(50)  not null,
    album_artist varchar(50),
    album_genre varchar(50),
    album_year varchar(4),
    primary key(album_id)
);

create table track(
    track_id int(5) not null auto_increment,
    track_number int(2),
    track_name varchar(50) not null,
    track_artist varchar(50),
    album_id int(5),
    track_url varchar(100) not null,
    primary key(track_id),
    foreign key (album_id) references album(album_id)
);


INSERT INTO album (album_id, album_name,album_artist,album_genre,album_year) 
values (1,'The First','Verzameling','Pop',2004);

INSERT INTO track (track_name,track_artist,album_id,track_number,track_url) 
values ('Home again','Ed Sheran',1,1,'audio/song1.mp3'),
	   ('I am lost','Pete Johnson',1,2,'audio/song2.mp3');