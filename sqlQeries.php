<?php

const SQL_GET_MOVIES = '
    SELECT * FROM movie ORDER BY title 
';

const SQL_GET_STARS = '
    SELECT * FROM star 
';

const SQL_GET_MOVIE = '
    SELECT * FROM movie WHERE id = ?
';

const SQL_GET_STAR = '
    SELECT * FROM star WHERE id = ?
';

const SQL_GET_MOVIE_NAME = '
    SELECT * FROM `movie` WHERE title = ?
';

const SQL_GET_MOVIE_WHERE_STAR ='
    SELECT * FROM movie WHERE id=( 
	    SELECT movie_id FROM movie_star WHERE star_id=( 
	    SELECT id FROM star WHERE name = ? ) )
';

const SQL_INSERT_MOVIE = '
    INSERT INTO movie ( title, release_year, format) VALUES (:title, :release_year, :format)
';

const SQL_INSERT_STAR = '
    INSERT INTO star ( name, surname, description) VALUES (:name, :surname, :description)
';

const SQL_DELETE_MOVIE = '
DELETE FROM movie WHERE movie . id = ?
';

const SQL_DELETE_STAR = '
DELETE FROM star WHERE star . id = ?
';


