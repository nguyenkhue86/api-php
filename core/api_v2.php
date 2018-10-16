<?php
    class API_V2 {
        public $_count = '';
        public $_data = '';
        public $_type = '';

        public function setCount($count) {
            $this->_count = $count;
        }

        public function setData($data) {
            $this->_data = $data;
        }

        public function setType($type) {
            $this->_type = $type;
        }

        public function getMetaData(){
            $meta = array ('count'=>$this->_count,'type'=>$this->_type);
            $res = array ('data'=>$this->_data,'meta'=>$meta);
            return json_encode($res);
        }

    }