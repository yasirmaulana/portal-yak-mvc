<?php
// require 'authentication.php';

// $thnBLn = date('Ym');
// $thnBLnMin1 = date('Ym')-1  ;

// $thnBulan = date('M Y');
// $thnBulanMin1 = date('M Y', strtotime("-1 month", strtotime(date("M Y"))));

// $thnSekarang = date('Y');
// $thnKemarin = date('Y')-1;

// $mutasi1 = querySelect("SELECT thn_bln, sum(amount) amount FROM `V_DASHBOARD_MUTASI_AMOUNT_DATE` WHERE `thn` = '$thnSekarang' GROUP BY thn_bln");
// $mutasi1 = json_encode($mutasi1);

// $mutasi2 = querySelect("SELECT thn_bln, sum(amount) amount FROM `V_DASHBOARD_MUTASI_AMOUNT_DATE` WHERE `thn` = '$thnKemarin' GROUP BY thn_bln");
// $mutasi2 = json_encode($mutasi2);

// $dayToDay = querySelect("SELECT * FROM `V_DASHBOARD_MUTASI_AMOUNT_DATE` WHERE `thn_bln` = '$thnBLn'");
// $dayToDay = json_encode($dayToDay);

// $dayToDay2 = querySelect("SELECT * FROM `V_DASHBOARD_MUTASI_AMOUNT_DATE` WHERE `thn_bln` = '$thnBLnMin1'");
// $dayToDay2 = json_encode($dayToDay2);

// $resultDashboardMtMamount = querySelect("SELECT * FROM `V_DASHBOARD_MUTASI_AMOUNT_MONTH` WHERE `thn` IN ('$thnSekarang', '$thnKemarin')");

// $resultDashboardMtMqty = querySelect("SELECT * FROM `V_DASHBOARD_MUTASI_QTY_MONTH` WHERE `thn` IN ('$thnSekarang', '$thnKemarin')");

?>

<div class="wrapper">

<?php 
//   include 'par-header.php'; 
//   include 'par-sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Portal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Mutasi Bank (perSejuta)</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:300px"></canvas>
                <div id="btnShow" style="display:block">
                  <button class="btn btn-success" onclick="showTbl()">show data</button>
                </div>
                <div id="btnHide" style="display:none">
                  <button class="btn btn-info" onclick="hideTbl()">hide data</button>
                </div>
                <div id="tblData" style="display:none">
                <p>
                  <table id="example1" class="table table-bordered table-hover" >
                  <thead>
                    <tr>
                    <th>Tahun</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mar</th>
                    <th>Apr</th>
                    <th>Mei</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Agu</th>
                    <th>Sep</th>
                    <th>Okt</th>
                    <th>Nov</th>
                    <th>Des</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr><td>Nominal</td></tr>
                    <?php foreach ($resultDashboardMtMamount as $data) : ?>
                    <tr>
                    <td><?= $data['thn']; ?></td>
                      <td><?= number_format($data['1']); ?></td>
                      <td><?= number_format($data['2']); ?></td>
                      <td><?= number_format($data['3']); ?></td>
                      <td><?= number_format($data['4']); ?></td>
                      <td><?= number_format($data['5']); ?></td>
                      <td><?= number_format($data['6']); ?></td>
                      <td><?= number_format($data['7']); ?></td>
                      <td><?= number_format($data['8']); ?></td>
                      <td><?= number_format($data['9']); ?></td>
                      <td><?= number_format($data['10']); ?></td>
                      <td><?= number_format($data['11']); ?></td>
                      <td><?= number_format($data['12']); ?></td>
                    </tr>
                    <?php endforeach; ?>

                    <tr><td>Jml Transaksi</td></tr>
                    <?php foreach ($resultDashboardMtMqty as $data) : ?>
                    <tr>
                    <td><?= $data['thn']; ?></td>
                      <td><?= number_format($data['1']); ?></td>
                      <td><?= number_format($data['2']); ?></td>
                      <td><?= number_format($data['3']); ?></td>
                      <td><?= number_format($data['4']); ?></td>
                      <td><?= number_format($data['5']); ?></td>
                      <td><?= number_format($data['6']); ?></td>
                      <td><?= number_format($data['7']); ?></td>
                      <td><?= number_format($data['8']); ?></td>
                      <td><?= number_format($data['9']); ?></td>
                      <td><?= number_format($data['10']); ?></td>
                      <td><?= number_format($data['11']); ?></td>
                      <td><?= number_format($data['12']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Mutasi Bank (perSejuta)</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="dayToDayChart" style="height:300px"></canvas>
                <!-- <button class="btn btn-success">show data</button>
                <button class="btn btn-info">hide data</button>
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($resultDashboardDtDamount as $data) : ?>
                <tr>
                  <td><?= $data['thn_bln']; ?></td>
                  <td><?= number_format($data['1']/1000); ?></td>
                  <td><?= number_format($data['2']/1000); ?></td>
                  <td><?= number_format($data['3']/1000); ?></td>
                  <td><?= number_format($data['4']/1000); ?></td>
                  <td><?= number_format($data['5']/1000); ?></td>
                  <td><?= number_format($data['6']/1000); ?></td>
                  <td><?= number_format($data['7']/1000); ?></td>
                  <td><?= number_format($data['8']/1000); ?></td>
                  <td><?= number_format($data['9']/1000); ?></td>
                  <td><?= number_format($data['10']/1000); ?></td>
                  <td><?= number_format($data['11']/1000); ?></td>
                  <td><?= number_format($data['12']/1000); ?></td>
                  <td><?= number_format($data['13']/1000); ?></td>
                  <td><?= number_format($data['14']/1000); ?></td>
                  <td><?= number_format($data['15']/1000); ?></td>
                  <td><?= number_format($data['16']/1000); ?></td>
                  <td><?= number_format($data['17']/1000); ?></td>
                  <td><?= number_format($data['18']/1000); ?></td>
                  <td><?= number_format($data['19']/1000); ?></td>
                  <td><?= number_format($data['20']/1000); ?></td>
                  <td><?= number_format($data['21']/1000); ?></td>
                  <td><?= number_format($data['22']/1000); ?></td>
                  <td><?= number_format($data['23']/1000); ?></td>
                  <td><?= number_format($data['24']/1000); ?></td>
                  <td><?= number_format($data['25']/1000); ?></td>
                  <td><?= number_format($data['26']/1000); ?></td>
                  <td><?= number_format($data['27']/1000); ?></td>
                  <td><?= number_format($data['28']/1000); ?></td>
                  <td><?= number_format($data['29']/1000); ?></td>
                  <td><?= number_format($data['30']/1000); ?></td>
                  <td><?= number_format($data['31']/1000); ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'par-footer.php'; ?>


</div>
<!-- ./wrapper -->
<script>

  function showTbl() {
    document.getElementById("tblData").style.display="block";
    document.getElementById("btnHide").style.display="block";
    document.getElementById("btnShow").style.display="none";
  }

  function hideTbl() {
    document.getElementById("tblData").style.display="none";
    document.getElementById("btnHide").style.display="none";
    document.getElementById("btnShow").style.display="block";

  }

</script>


<!-- jQuery 3 -->
<script src="<?= BASEURL ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= BASEURL ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= BASEURL ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BASEURL ?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
  var mutasiThnIni = '<?= $mutasi1; ?>'
  var mutasiThnIni = JSON.parse(mutasiThnIni)
  var arrMutasiThnIni = []
  for(var i = 0; i < mutasiThnIni.length; i++){
    arrMutasiThnIni.push(parseInt(mutasiThnIni[i].amount)/1000000)
  } 
  
  var mutasiThnKemarin = '<?= $mutasi2; ?>'
  var mutasiThnKemarin = JSON.parse(mutasiThnKemarin)
  var arrMutasiThnKemarin = []
  for(var i = 0; i < mutasiThnKemarin.length; i++){
    arrMutasiThnKemarin.push(parseInt(mutasiThnKemarin[i].amount)/1000000)
  } 

  let barChart = document.getElementById('barChart').getContext('2d')
  let mutasiChart = new Chart(barChart, {
    type: 'bar', 
    data: {
      labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Dec'],
      datasets: [
        {
          label: '<?= $thnKemarin ?>',
          data: arrMutasiThnKemarin,
          backgroundColor: '#4cd0b2'
        },
        {
          label: '<?= $thnSekarang ?>',
          data: arrMutasiThnIni,
          backgroundColor: '#db7093'
        },
      ]
    },
    options: {
      title:{
        display:true,
        text:'Perolehan Donasi Month by Month',
        fontSize: 16
      }
    }
  })

  // GRAFIK MUTASI DAY TO DAY 
  var mutasidayToDay = '<?= $dayToDay; ?>'
  var mutasidayToDay = JSON.parse(mutasidayToDay)
  var arrMutasiDayToDay = []
  for(var i = 0; i < mutasidayToDay.length; i++){
    arrMutasiDayToDay.push(parseInt(mutasidayToDay[i].amount)/1000000)
  } 

  var mutasidayToDay2 = '<?= $dayToDay2; ?>'
  var mutasidayToDay2 = JSON.parse(mutasidayToDay2)
  var arrMutasiDayToDay2 = []
  for(var i = 0; i < mutasidayToDay2.length; i++){
    arrMutasiDayToDay2.push(parseInt(mutasidayToDay2[i].amount)/1000000)
  } 

  let dayToDayChart = document.getElementById('dayToDayChart').getContext('2d')
  let mutasidayToDay2Chart = new Chart(dayToDayChart, {
    type: 'bar', 
    data: {
      labels  : ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','22','22','23','24','25','26','27','28','29','30','31'],
      datasets: [
        {
          label: '<?= $thnBulanMin1 ?>',
          data: arrMutasiDayToDay2,
          backgroundColor: '#c9b1b6'
        },
        {
          label: '<?= $thnBulan ?>',
          data: arrMutasiDayToDay,
          backgroundColor: '#56b7c2'
        },
      ]
    },
    options: {
      title:{
        display:true,
        text:'Perolehan Donasi Day by Day',
        fontSize: 16
      }
    }
  })
</script>
</body>
</html>