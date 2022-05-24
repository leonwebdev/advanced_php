drop table if exists users;
create table users(
    id INTEGER NOT NULL PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255)
);
insert INTO users (first_name, last_name, email, phone)
VALUES ('Amy', 'First', 'amy@test.ca', '123-123-1234'),
    ('Bob', 'Seconf', 'bob@test.ca', '234-567-1463'),
    (
        'Cindy',
        'Third',
        'cindy@test.ca',
        '345-986-0476'
    ),
    ('Frank', 'Wow', 'frank@test.ca', '222-222-2222'),
    ('Lorem', 'Haha', 'lorem@test.ca', '333-333-3344');