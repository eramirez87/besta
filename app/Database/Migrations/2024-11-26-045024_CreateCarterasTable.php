<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCarterasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('carteras');
    }

    public function down()
    {
        $this->forge->dropTable('carteras');
    }
}
