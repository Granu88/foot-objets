<?php

namespace Models;

class Player extends Model
{
  public function getPlayer($idPlayer)
  {
    $stmt = $this->db->prepare('SELECT
      players.*,
      teams.id AS team_id,
      teams.name AS team_name
      FROM players
      INNER JOIN players_has_teams
      ON players_has_teams.id_player = players.id
      INNER JOIN teams
      ON teams.id = players_has_teams.id_team
      WHERE players_has_teams.id_player = :id_player
    ');



    $stmt->bindValue(':id_player', $idPlayer);

    $stmt->execute();

    return $stmt->fetch();
  }
}
