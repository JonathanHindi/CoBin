<?php

class Update_Snippets_To_Snippet_On_Snippets_Table {    

	public function up()
    {
		Schema::table('snippets', function($table) 
		{
			$table->drop_column('snippets');
			$table->text('snippet');
		});

    }    

	public function down()
    {
		Schema::table('snippets', function($table) 
		{	
			$table->drop_column('snippet');
			$table->text('snippets');

		});

    }

}