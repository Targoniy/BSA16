/*
1. Написать запрос который выведет всех пользователей в возрасте от 20
 лет с количеством книг более 5
 */
SELECT u.*, count(ub.user_id) as amount_of_books FROM users u
	LEFT JOIN users_books ub ON u.id = ub.user_id
	WHERE u.age > 20 GROUP BY u.id 
    HAVING count(ub.user_id) > 5;

/*
2. Написать запрос который выведет
 пользователей в имени которых присутствует число 3
*/
SELECT * FROM users WHERE first_name like '%3%';

/*
3. Написать запрос который
выведет список пользователей 
которые не брали книгу с именем "Book #21"
*/
SELECT * FROM users WHERE id NOT IN
	(SELECT ub.user_id FROM users_books AS ub
    LEFT JOIN books AS b 
    ON b.id = ub.book_id
    WHERE b.title = 'Book #21'
    );


/*
4. Написать запрос который добавит поле is_active в таблицу users
*/
ALTER TABLE users ADD is_active tinyint(1) NOT NULL DEFAULT 0;

/*
5. Написать запрос, который проставит is_active = 1 для пользователей, 
которые взяли как минимум одну книгу
*/

/*1-й вариант предполагает, что в таблице users_books не может
хранится пользователь, который не покупал ни одной книги*/
UPDATE users SET is_active = 1 WHERE id in (SELECT id FROM users_books);

/*2-й вариант предполагает, что в таблице users_books может
хранится пользователь, который не покупал ни одной книги
UPDATE users
SET is_active = 1
WHERE id IN (
  SELECT user_id
  FROM users_books
  GROUP BY user_id
  HAVING count(user_id) > 0
);

*/

/*
6. Написать запрос который добавит
 поле isbestseller (bool) в таблицу books
 */
ALTER TABLE books ADD isbestseller tinyint(1) NOT NULL DEFAULT 0;
	
/*
7. Написать запрос который выставит isbestseller = 1 для книг, 
которые были взяты пользователями более 10 раз	
*/
UPDATE books SET isbestseller = 1 WHERE id IN 
	(SELECT book_id FROM users_books
	 GROUP BY book_id HAVING count(book_id) > 10);