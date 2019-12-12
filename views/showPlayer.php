<style>
  .row{
    justify-content: center;
  }
  .tableau{
    background-color: black;
    color: white;
  }
</style>


<div class="container text-center mt-4 mb-3">
  <h1><?php echo $player ['name']; ?></h1>
  <div class="row">
    <div class="col-md-6 mt-4 mb-4 text-center">
      <div class="card mt-4" style="width: 20rem;">
        <img src="<?php echo $player['photo']?>" class="card-img-top" alt="photo">
      </div>
    </div>
    <div class="col-md-6 mt-4 mb-4 team">
      <table class="table table-striped mt-4 tableau text-center">
        <tbody>
          <tr>
            <td>Nationalité:</td>
            <th><?php echo $player ['nationality']; ?></th>
          </tr>
          <tr>
            <td>Date de naissance:</td>
            <th><?php echo (new DateTime($player['birthday_date']))->format('d/m/Y'); ?></th>
          </tr>
          <tr>
            <td>Né à:</td>
            <th><?php echo $player ['birthday_place']; ?></th>
          </tr>
          <tr>
            <td>Entraîneur du:</td>
            <th><a href="./teams/<?php echo $player['team_id']; ?>"><?php echo $player['team_name']; ?></a></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
