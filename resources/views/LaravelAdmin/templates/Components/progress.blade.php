@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Progress</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Progress</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default</h5>

            <!-- Default Progress Bars-->
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div><!-- End Default Progress Bars-->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Labels</h5>

            <!-- Progress Bars with labels-->
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div><!-- End Progress Bars with labels -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Backgrounds</h5>

            <!-- Progress Bars with Backgrounds-->
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div><!-- End Progress Bars with Backgrounds -->

          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Height</h5>
            <p>We only set a height value on the .progress, so if you change that value the inner .progress-bar will automatically resize accordingl</p>

            <!-- Progress Bars with heights-->
            <div class="progress" style="height: 10px;">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3" style="height: 15px;">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3" style="height: 20px;">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3" style="height: 25px;">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div><!-- End Progress Bars with heights -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Striped Backgrounds</h5>

            <!-- Progress Bars with Striped Backgrounds-->
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div><!-- End Progress Bars with Striped Backgrounds -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Striped Animated Backgrounds</h5>

            <!-- Progress Bars with Striped Backgrounds-->
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress mt-3">
              <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div><!-- End Progress Bars with Striped Animated Backgrounds -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

@include('LaravelAdmin.layouts.adminFooter')

@endsection

@push('scripts')
<script>
  window.setTimeout(function() {
    $(".alert-success").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 2000);

  document.addEventListener("DOMContentLoaded", () => {
    new ApexCharts(document.querySelector("#reportsChart"), {
      series: [{
        name: 'Sales',
        data: [31, 40, 28, 51, 42, 82, 56],
      }, {
        name: 'Revenue',
        data: [11, 32, 45, 32, 34, 52, 41]
      }, {
        name: 'Customers',
        data: [15, 11, 32, 18, 9, 24, 11]
      }],
      chart: {
        height: 350,
        type: 'area',
        toolbar: {
          show: false
        },
      },
      markers: {
        size: 4
      },
      colors: ['#4154f1', '#2eca6a', '#ff771d'],
      fill: {
        type: "gradient",
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.3,
          opacityTo: 0.4,
          stops: [0, 90, 100]
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 2
      },
      xaxis: {
        type: 'datetime',
        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
      },
      tooltip: {
        x: {
          format: 'dd/MM/yy HH:mm'
        },
      }
    }).render();
  });

  document.addEventListener("DOMContentLoaded", () => {
    echarts.init(document.querySelector("#trafficChart")).setOption({
      tooltip: {
        trigger: 'item'
      },
      legend: {
        top: '5%',
        left: 'center'
      },
      series: [{
        name: 'Access From',
        type: 'pie',
        radius: ['40%', '70%'],
        avoidLabelOverlap: false,
        label: {
          show: false,
          position: 'center'
        },
        emphasis: {
          label: {
            show: true,
            fontSize: '18',
            fontWeight: 'bold'
          }
        },
        labelLine: {
          show: false
        },
        data: [{
            value: 1048,
            name: 'Search Engine'
          },
          {
            value: 735,
            name: 'Direct'
          },
          {
            value: 580,
            name: 'Email'
          },
          {
            value: 484,
            name: 'Union Ads'
          },
          {
            value: 300,
            name: 'Video Ads'
          }
        ]
      }]
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
      legend: {
        data: ['Allocated Budget', 'Actual Spending']
      },
      radar: {
        // shape: 'circle',
        indicator: [{
            name: 'Sales',
            max: 6500
          },
          {
            name: 'Administration',
            max: 16000
          },
          {
            name: 'Information Technology',
            max: 30000
          },
          {
            name: 'Customer Support',
            max: 38000
          },
          {
            name: 'Development',
            max: 52000
          },
          {
            name: 'Marketing',
            max: 25000
          }
        ]
      },
      series: [{
        name: 'Budget vs spending',
        type: 'radar',
        data: [{
            value: [4200, 3000, 20000, 35000, 50000, 18000],
            name: 'Allocated Budget'
          },
          {
            value: [5000, 14000, 28000, 26000, 42000, 21000],
            name: 'Actual Spending'
          }
        ]
      }]
    });
  });
</script>
@endpush