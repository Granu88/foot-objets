<?php

namespace Controllers;


use Models\Player as ModelPlayer;

class Player extends Controller
{
  public function showPlayer($id)
  {
    $model = new ModelPlayer;
    $player = $model->getPlayer($id);
    $this->render('views/showPlayer.php', [
      'player' => $player,
    ]);
  }
}
