<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: [<?php while ($ko=mysqli_fetch_array($sql)) { echo "'".$ko["bulan"]."',"; }?>],
                    datasets: [
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [<?php while ($gor=mysqli_fetch_array($res)) { echo $gor["harga_jual"].","; } ?>]
                        }
                    ]
                };
            new Chart(document.getElementById(" linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>