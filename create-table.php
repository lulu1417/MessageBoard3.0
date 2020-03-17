<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

Manager::schema()->dropIfExists('users');
Manager::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('password');
    $table->timestamps();
});


Manager::schema()->dropIfExists('posts');
Manager::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('subject');
    $table->string('content');
    $table->integer('user_id')->unsigned();
    $table->timestamps();
});

Manager::schema()->dropIfExists('comments');
Manager::schema()->create('comments', function ($table) {
    $table->increments('id');
    $table->string('content');
    $table->integer('user_id')->unsigned();
    $table->integer('post_id')->unsigned();
    $table->timestamps();
});

Manager::schema()->dropIfExists('replies');
Manager::schema()->create('replies', function ($table) {
    $table->increments('id');
    $table->string('content');
    $table->integer('user_id')->unsigned();
    $table->integer('comment_id')->unsigned();
    $table->timestamps();
});

Manager::schema()->dropIfExists('likes');
Manager::schema()->create('likes', function ($table) {
    $table->increments('id');
    $table->integer('user_id')->unsigned();
    $table->integer('post_id')->unsigned();
    $table->timestamps();
});