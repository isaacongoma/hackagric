<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_AddFarmdetails extends CI_Migration {

        public function up(){
        
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                                'constraint' => 11,

                        ),
                          
                       'image' => array(
                                'type' => 'VARCHAR',
                                'null' => TRUE,
                                'constraint' => '255',

                        ),
                     'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                     'location' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                     'roi' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                     'name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                                
                        ),
                     
                     
                ));
                
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('farms');
        }

        public function down()
        {
                $this->dbforge->drop_table('farms');
        }
}