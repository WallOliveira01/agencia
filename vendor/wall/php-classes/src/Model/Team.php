<?php

namespace Wall\Model;

use \Wall\DB\Sql;
use \Wall\Model;
use \Wall\Mailer;

class Team extends Model{
    public static function listAll()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_team ORDER BY desteam");
    }
}

?>