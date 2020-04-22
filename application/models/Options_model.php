<?php
    class Options_model extends CI_Model
    {
        protected $table = 'options';
        protected $primaryKey = 'options.options_id';
        protected $options_title ;
        protected $options_contents ;
        protected $options_seo ;
        protected $options_parent ;
        protected $options_timestamp ;

        public function get($field=NULL,$key=NULL)
        {
            if ( $field ) {
                $this->db->where($field,$key);
            }

            return $this->db->get( $this->table )->result_object();
        }

        public function store($id=NULL)
        {
            if ( $id ) { # update
                # initialize
                $this->options_contents = $this->post['options_contents'];
                $data = array(
                    'options_contents' => $this->options_contents
                );

                $this->db->where( $this->primaryKey, $id );
                $result = $this->db->update( $this->table, $data );
            } else { # insert
                $result = FALSE;
            }

            return $result;
        }
         
    }
    