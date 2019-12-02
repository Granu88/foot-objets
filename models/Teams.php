<?php

namespace Models;

class Teams extends Model
{
  const REQUEST = '
    SELECT *,
    id_stadium AS idStadium,
    short_name AS shortName,
    fundation_date AS fundationDate
    FROM teams
  ';
  /**
   * @return array[EntityTeam]
   */
  public function getTeams()
  {
    $stmt = $this->db->prepare('SELECT * FROM teams');
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Teams');
  }
}
