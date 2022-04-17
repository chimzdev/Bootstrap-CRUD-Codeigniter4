<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_post' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'judul_post' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'detail_post' => [
                'type' => 'TEXT'
            ],
        ]);
        $this->forge->addKey('id_post', TRUE);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        //
    }
}
