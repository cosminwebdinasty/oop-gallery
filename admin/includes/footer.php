  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/dropzone.js"></script>

    <script src="js/scripts.js"></script>

    <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/js/tinymce/init-tinymce.js"></script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Session count',     <?php echo $session->count; ?>],
          ['Photos',      <?php echo Photo::count_all(); ?>],
          ['Users', <?php echo User::count_all(); ?>],
          ['Comments', <?php echo Comment::count_all(); ?>],

        ]);

        var options = {
          title: 'Data Count',
          pieSliceText:'label',
          backgroundColor:'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</body>

</html>
