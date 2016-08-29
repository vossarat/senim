<?php
class model_default extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_viewdata()
    {
/*        $stmt_h = $this->db->prepare('SELECT id, alias, title, introtext, attach_file, created FROM content WHERE cat_id = 2 ORDER BY created DESC LIMIT 8');
        $stmt_h->execute();
        $stmt["h"] = $stmt_h->fetchall(PDO::FETCH_ASSOC);
        
        $stmt_v = $this->db->prepare('SELECT id, alias, title, introtext, attach_file, created FROM content WHERE cat_id = 2 ORDER BY created DESC LIMIT 8, 12');
        $stmt_v->execute();
        $stmt["v"] = $stmt_v->fetchall(PDO::FETCH_ASSOC);
        
        foreach ($stmt["v"] as $n) {
            $newsdata["v"][] = array("alias"      => $n["alias"],
                "id" => $n["id"],
                "created"      => $n["created"],                
                "title"      => trim($n["title"]),
                "introtext"  => func::cutstr($n["introtext"]),
                "attach_file"=> $n["attach_file"]);
        }
        
        foreach ($stmt["h"] as $n) {
            $newsdata["h"][] = array("alias"      => $n["alias"],
                "id" => $n["id"],
                "created"      => $n["created"],                
                "title"      => trim($n["title"]),
                "introtext"  => func::cutstr($n["introtext"]),
                "attach_file"=> $n["attach_file"]);
        }*/
        
        return $newsdata;
        
    }
    
}
?>