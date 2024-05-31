create database knihovna;
use knihovna;

create table users(
id int primary key auto_increment,
username varchar(50),
password varchar(250)
);

delimiter //
create procedure adduser( _name varchar(50), _password varchar(250))
begin
insert into users(username,password) values(_name,_password);
end //
delimiter ;

create table author(
id int primary key auto_increment,
name varchar(30),
surename varchar(30)
);

create table genre(
id int primary key auto_increment,
name varchar(40)
);

create table book(
id int primary key auto_increment,
name varchar(70),
author_id int,
foreign key(author_id) references author(id),
genre_id int,
foreign key(genre_id) references genre(id),
release_date date
);


delimiter //
create procedure addbook(_genre varchar(40), _authorname varchar(30), _authorsurename varchar(30), _name varchar(70),_date date)
begin
declare genre_id int;
declare author_id int;
select id into genre_id from genre where name = _genre;
select id into author_id from author where name = _authorname and surename = _authorsurename;
insert into book(name,author_id,genre_id,release_date) values(_name,author_id,genre_id,_date);
end //
delimiter ;

create view allbooks
as
select b.name as bookname,a.name as authorname,a.surename as authorsurename,g.name as genrename,b.release_date
from book as b inner join author as a on b.author_id = a.id
					    inner join genre as g on b.genre_id = g.id;

create table borrow(
id int primary key auto_increment,
users_id int,
foreign key(users_id) references users(id),
book_id int,
foreign key(book_id) references book(id),
datum_od date,
datum_do date
);

delimiter //
create procedure addborrow(_username varchar(50),_bookname varchar(70))
begin
declare user_id int;
declare book_id int;
select id into user_id from users where username = _username;
select id into book_id from book where name = _bookname;
insert into borrow(users_id,book_id,datum_od,datum_do) values(user_id,book_id,CURDATE(),DATE_ADD(CURDATE(), INTERVAL 1 MONTH));
end //
delimiter ;

delimiter //
create procedure usersborrow(_username varchar(50))
begin
declare user_id int;
select id into user_id from users where username = _username;
select  bo.name,br.datum_od,br.datum_do
from borrow as br inner join users as u on br.users_id = u.id
			      inner join book as bo on br.book_id = bo.id
where u.id = user_id and br.datum_do>CURDATE();
end //
delimiter ;

delimiter //
create procedure addgenre(_name varchar(40))
begin
insert into genre(name) values(_name);
end //
delimiter ;

delimiter //
create procedure addauthor(_authorname varchar(30), _authorsurename varchar(30))
begin
insert into author(name,surename) values(_authorname,_authorsurename);
end //
delimiter ;