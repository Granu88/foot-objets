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
}
