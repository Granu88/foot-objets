<?php

namespace Models;

class Coach extends Model
{
  public function getCoach($idCoach)
  {
    $stmt = $this->db->prepare('SELECT
      coachs.*,
      teams.id AS team_id,
      teams.name AS team_name
      FROM coachs
      INNER JOIN coachs_has_teams
      ON coachs_has_teams.id_coach = coachs.id
      INNER JOIN teams
      ON teams.id = coachs_has_teams.id_team
      WHERE coachs_has_teams.id_coach = :id_coach
    ');

    $stmt->bindValue(':id_coach', $idCoach);

    $stmt->execute();

    return $stmt->fetch();
  }
}
