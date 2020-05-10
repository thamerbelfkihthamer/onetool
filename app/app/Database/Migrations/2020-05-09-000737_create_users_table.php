<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
        $this->forge->addField([
               'id' => [
                   'type' => 'INT',
                   'unsigned' => TRUE,
                   'auto_increment' => TRUE,
                   'null' => FALSE,
               ],
               'username' => [
                   'type' => 'VARCHAR',
                   'constraint' => '50',
                   'null' => FALSE
               ],
               'email' => [
                   'type' => 'VARCHAR',
                   'constraint' => '255',
                   'null' => FALSE
               ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
	}

	public function down()
	{
        $this->forge->dropTable('users');
	}
}
