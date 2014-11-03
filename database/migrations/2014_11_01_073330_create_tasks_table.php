<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');

            /**
             * Foreign Keys
             */
            $table->unsignedInteger('parent_id');
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('from_milestone_id');
            $table->unsignedInteger('for_milestone_id');
            $table->unsignedInteger('author_id');

            $table->string('name');
            $table->text('description');
            $table->tinyInteger('priority')->unsigned();
            $table->dateTime('due_to_date');
            $table->tinyInteger('percent_done');

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
		Schema::drop('tasks');
	}

}
