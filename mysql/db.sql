DROP DATABASE IF EXISTS blogsrus;
CREATE DATABASE blogsrus;
USE blogsrus;

CREATE TABLE users (
	id  INTEGER PRIMARY KEY AUTO_INCREMENT,
	username    TEXT,
	password    TEXT
);

INSERT INTO users (username, password) VALUES ("admin", "350040d4374e38133f116bd4e7cf0ffd");
INSERT INTO users (username, password) VALUES ("john", "2829fc16ad8ca5a79da932f910afad1c");
INSERT INTO users (username, password) VALUES ("jane", "2829fc16ad8ca5a79da932f910afad1c");
INSERT INTO users (username, password) VALUES ("user", "ee11cbb19052e40b07aac0ca060c23ee");

CREATE TABLE posts (
	id  INTEGER PRIMARY KEY AUTO_INCREMENT,
	user_id INTEGER NOT NULL,
	title   TEXT NOT NULL,
	content TEXT NOT NULL
);

INSERT INTO posts (user_id, title, content) VALUES (1, "Super Secret Corporate Message", "Hey guys, we have a big corporate event tonight. We are looking at 100M$ in profit. Here is the email of the investors: investor@rich.com");
INSERT INTO posts (user_id, title, content) VALUES (2, "I Love You Jane", "Jane, you are absolutely beautiful. I love you so much girl!");
INSERT INTO posts (user_id, title, content) VALUES (3, "Hey James ;)", "Hey James, you're looking pretty good ;)!");
INSERT INTO posts (user_id, title, content) VALUES (2, "I Hate You Jane", "I know you still look at these Jane. Stop calling me.");
INSERT INTO posts (user_id, title, content) VALUES (4, "Generic Title", "This is a test user. If you are seeing this, call the CEO (438)321-3322.");