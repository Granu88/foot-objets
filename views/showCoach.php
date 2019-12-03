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
  <h1><?php echo $coach ['name']; ?></h1>
  <div class="row">
    <div class="col-md-6 mt-4 mb-4 text-center">
      <div class="card mt-4" style="width: 20rem;">
        <img src="<?php echo $coach['photo']?>" class="card-img-top" alt="photo">
      </div>
    </div>
    <div class="col-md-6 mt-4 mb-4 team">
      <table class="table table-striped mt-4 tableau text-center">
        <tbody>
          <tr>
            <td>Nationalité:</td>
            <th><?php echo $coach ['nationality']; ?></th>
          </tr>
          <tr>
            <td>Date de naissance:</td>
            <th><?php echo (new DateTime($coach['birthday_date']))->format('d/m/Y'); ?></th>
          </tr>
          <tr>
            <td>Né à:</td>
            <th><?php echo $coach ['birthday_place']; ?></th>
          </tr>
          <tr>
            <td>Entraîneur du:</td>
            <th><a href="./team/<?php echo $coach['team_id']; ?>"><?php echo $coach['team_name']; ?></a></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
