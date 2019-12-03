<?php

namespace Controllers;

use Models\Teams as ModelTeams;

class Teams extends Controller
{
  public function listTeams()
  {
    $model = new ModelTeams;
    $teams = $model->getTeams();
    $this->render('views/listTeams.php', [
      'teams' => $teams,
    ]);

  }
  public function showTeam($id)
  {
    $model = new ModelTeams;
    $team = $model->getTeam($id);
    $players = $model->getPlayers($id);
    $matchs = $model->getMatchs($id);
    $this->render('views/showTeam.php', [
      'team' => $team,
      'players' => $players,
      'matchs' => $matchs
    ]);

  }

}
