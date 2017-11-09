<div class="container" id="wo">
  <h4><?php echo date('F j, Y',strtotime($response->forecast->date)); ?></h4>
  <h4 style="margin-left: 15px;">Today's High: <?php echo $response->forecast->day_max_temp; ?><sup>&deg;</sup> F</h4>
  <h4 style="margin-left: 15px;">Today's Low: <?php echo $response->forecast->night_min_temp; ?><sup>&deg;</sup> F</h4>
</div>