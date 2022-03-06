@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Badges</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Badges</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Badges</h5>

            <span class="badge bg-primary">Primary</span>
            <span class="badge bg-secondary">Secondary</span>
            <span class="badge bg-success">Success</span>
            <span class="badge bg-danger">Danger</span>
            <span class="badge bg-warning text-dark">Warning</span>
            <span class="badge bg-info text-dark">Info</span>
            <span class="badge bg-light text-dark">Light</span>
            <span class="badge bg-dark">Dark</span>
          </div>
        </div><!-- End Default Badges -->

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pill Badges</h5>
            <span class="badge rounded-pill bg-primary">Primary</span>
            <span class="badge rounded-pill bg-secondary">Secondary</span>
            <span class="badge rounded-pill bg-success">Success</span>
            <span class="badge rounded-pill bg-danger">Danger</span>
            <span class="badge rounded-pill bg-warning text-dark">Warning</span>
            <span class="badge rounded-pill bg-info text-dark">Info</span>
            <span class="badge rounded-pill bg-light text-dark">Light</span>
            <span class="badge rounded-pill bg-dark">Dark</span>
          </div>
        </div><!-- End Pill Badges -->

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Icon Badges</h5>
            <span class="badge bg-primary"><i class="bi bi-star me-1"></i> Primary</span>
            <span class="badge bg-secondary"><i class="bi bi-collection me-1"></i> Secondary</span>
            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Success</span>
            <span class="badge bg-danger"><i class="bi bi-exclamation-octagon me-1"></i> Danger</span>
            <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle me-1"></i> Warning</span>
            <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i> Info</span>
            <span class="badge bg-light text-dark"><i class="bi bi-star me-1"></i> Light</span>
            <span class="badge bg-dark"><i class="bi bi-folder me-1"></i> Dark</span>
          </div>
        </div><!-- End Icon Badges -->

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Border Badges</h5>
            <span class="badge border-primary border-1 text-primary">Primary</span>
            <span class="badge border-secondary border-1 text-secondary">Secondary</span>
            <span class="badge border-success border-1 text-success">Success</span>
            <span class="badge border-danger border-1 text-danger">Danger</span>
            <span class="badge border-warning border-1 text-warning">Warning</span>
            <span class="badge border-info border-1 text-info">Info</span>
            <span class="badge border-light border-1 text-black-50">Light</span>
            <span class="badge border-dark border-1 text-dark">Dark</span>
          </div>
        </div><!-- End Border Badges -->

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Button Badges</h5>

            <button type="button" class="btn btn-primary mb-2">
              Primary <span class="badge bg-white text-primary">4</span>
            </button>
            <button type="button" class="btn btn-secondary mb-2">
              Secondary <span class="badge bg-white text-secondary">4</span>
            </button>
            <button type="button" class="btn btn-success mb-2">
              Success <span class="badge bg-white text-success">4</span>
            </button>
            <button type="button" class="btn btn-danger mb-2">
              Danger <span class="badge bg-white text-danger">4</span>
            </button>
            <button type="button" class="btn btn-warning mb-2">
              Warning <span class="badge bg-white text-warning">4</span>
            </button>
            <button type="button" class="btn btn-info mb-2">
              Info <span class="badge bg-white text-info">4</span>
            </button>
            <button type="button" class="btn btn-light mb-2">
              Light <span class="badge bg-secondary text-light">4</span>
            </button>
            <button type="button" class="btn btn-dark mb-2">
              Dark <span class="badge bg-white text-dark">4</span>
            </button>
          </div>
        </div><!-- End Button Badges -->

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Heading Badges</h5>

            <h1>Example h1 heading <span class="badge bg-primary">Primary</span></h1>
            <h2>Example h2 heading <span class="badge bg-secondary">Secondary</span></h2>
            <h3>Example h3 heading <span class="badge bg-success">Success</span></h3>
            <h4>Example h4 heading <span class="badge bg-danger">Danger</span></h4>
            <h5>Example h5 heading <span class="badge bg-warning">Warning</span></h5>
            <h6>Example h6 heading <span class="badge bg-info">Info</span></h6>
          </div>
        </div><!-- End Heading Badges -->

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