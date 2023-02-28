<?php
   class Murid extends CI_Migration
   {
      public function up()
      {
         $this->dbforge->add_field(
            array(
               'id_murid' => array(
                  'type' => 'INT',
                  'auto_increment' => true
               ),
               'nama_murid' => array(
                  'type' => 'VARCHAR',
                  'null' => false
               ),
               'kelas' => array(
                  'type' => 'CHAR',
                  'null' => false
               ),
               'jurusan' => array(
                  'type' => 'CHAR',
                  'null' => false
               ),
            )
         );

         $this->dbforge->add_key('id_murid', TRUE);
         $this->dbforge->create_table('murid');
      }

      public function down()
      {
         $this->dbforge->drop_table('murid');
      }
   }
?>