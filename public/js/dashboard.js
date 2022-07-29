(function($) {
  'use strict';
  $(function() {
    if ($("#earning-report-chart").length) {
      var earningReportData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
        datasets: [{
          label: '# of Votes',
          data: [17, 85, 32, 25, 12, 33],
          backgroundColor: [
            'rgba(7, 102, 198, 1)',
            'rgba(0, 178, 151, 1)',
            'rgba(7, 102, 198, 1)',
            'rgba(0, 178, 151, 1)',
            'rgba(7, 102, 198, 1)',
            'rgba(0, 178, 151, 1)',
          ],
          borderWidth: 0
        }]
      };
      var earningReportOptions = {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
          xAxes: [{
            gridLines: {
              color: '#f3f6f9'
            },
            ticks: {
              display: false,
              min: 0,
              max: 100,
              stepSize: 20
            }
          }],
          yAxes: [{
            gridLines: {
              color: '#f3f6f9'             
            },
            ticks: {
              display: true,
              min: 0,
              max: 100,
              stepSize: 50
            }
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 0
          }
        },
        layout: {
          padding: {
            top: 0,
            bottom: 0
          }
        },
    
      };
      var earningReportChartCanvas = $("#earning-report-chart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var barChart = new Chart(earningReportChartCanvas, {
        type: 'horizontalBar',
        data: earningReportData,
        options: earningReportOptions
      });
    }
    if ($("#issues-chart").length) {
      var issuesChartData = {
        datasets: [{
          data: [60, 30, 10],
          backgroundColor: [
            '#f3f6f9',
            '#0766c6',
            '#00b297'
          ],
          borderWidth: 0
        }],
    
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Closed',
          'In progress',
          'Open'
        ]
      };
      var issuesChartOptions = {
        responsive: true,
        maintainAspectRatio: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: {
          display: false
        },
        legendCallback: function(chart) { 
          var text = [];
          text.push('<ul class="legend'+ chart.id +'">');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span class="legend-label" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('<span class="legend-percentage ml-auto">'+ chart.data.datasets[0].data[i] + '%</span>');
            text.push('</li>');
          }
          text.push('</ul>');
          return text.join("");
        },
        cutoutPercentage: 70     
      };
      var issuesChartCanvas = $("#issues-chart").get(0).getContext("2d");
      var issuesChart = new Chart(issuesChartCanvas, {
        type: 'doughnut',
        data: issuesChartData,
        options: issuesChartOptions
      });
      document.getElementById('issues-chart-legend').innerHTML = issuesChart.generateLegend();
    }
  });
})(jQuery);
