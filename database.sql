create table if not exists users
(
    id               bigint(20) unsigned not null auto_increment,
    email            varchar(255)        not null,
    password         varchar(255)        not null,
    age              tinyint(3) unsigned not null,
    country          varchar(255)        not null,
    social_media_url varchar(255)        not null,
    created_at       datetime            not null default current_timestamp(),
    updated_at       datetime            not null default current_timestamp(),
    primary key (id),
    unique key (email)
);


create table if not exists transactions
(
    id          bigint(20)          not null auto_increment,
    description varchar(255)        not null,
    amount      decimal(10, 2)      not null,
    date        datetime            not null,
    created_at  datetime            not null default current_timestamp(),
    updated_at  datetime            not null default current_timestamp(),
    user_id     bigint(20) unsigned not null,
    primary key (id),
    foreign key (user_id) references users (id)
);