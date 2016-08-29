<?php
class model_header extends model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_viewdata()
    {
        return "РГУ «Центр социально-психологической реабилитации наркозависимых лиц»";
    }
}
?>