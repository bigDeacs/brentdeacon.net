<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('file');
			$table->integer('status')->default(1);
			$table->timestamps();
		});
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->string('url')->unique();
			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('types');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->string('link')->nullable();
			$table->integer('status')->default(0);
			$table->longText('meta')->nullable();
			$table->longText('head')->nullable();
			$table->longText('scripts')->nullable();
			$table->timestamps();
		});
		Schema::create('image_product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('image_id')->unsigned();
			$table->foreign('image_id')->references('id')->on('images');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('types');
		Schema::drop('categories');
		Schema::drop('images');
		Schema::drop('products');
		Schema::drop('image_product');
	}

}
