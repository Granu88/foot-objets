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

    return $stmt->fetchAll();
  }

  public function getTeam($id)
  {
    $stmt = $this->db->prepare('SELECT
    teams.* ,
    coachs.name AS coachs_name,
    coachs.id AS coachs_id,
    stadiums.name AS stadiums_name,
    stadiums.id AS stadiums_id
    FROM teams
    INNER JOIN coachs_has_teams
    ON coachs_has_teams.id_team = teams.id
    INNER JOIN coachs
    ON coachs.id = coachs_has_teams.id_coach
    INNER JOIN stadiums
    ON stadiums.id = teams.id
    WHERE teams.id = :id');
    $stmt->bindValue(':id', $id);

    $stmt->execute();

    return $stmt->fetch();
  }

  public function getPlayers($id)
  {
    $stmt = $this->db->prepare('SELECT
    players.*
    FROM players
    INNER JOIN players_has_teams
    ON players_has_teams.id_player = players.id
    WHERE players_has_teams.id_team = :id_team
  ');
    $stmt->bindValue(':id_team', $id);

    $stmt->execute();

    return $stmt->fetchAll();
  }

  function getMatchs($id)
  {
    $stmt = $this->db->prepare('SELECT
      matchs.*,
      th.short_name AS th_short_name,
      ta.short_name AS ta_short_name
      FROM matchs
      INNER JOIN teams AS th
      ON th.id = matchs.id_team_home
      INNER JOIN teams AS ta
      ON ta.id = matchs.id_team_away
      WHERE(th.id = :id OR ta.id = :id)
    ');

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    return $stmt->fetchAll();
  }
}
