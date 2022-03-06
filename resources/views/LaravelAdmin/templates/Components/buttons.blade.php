@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Buttons</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Buttons</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Buttons</h5>

            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Rounded Buttons</h5>

            <button type="button" class="btn btn-primary rounded-pill">Primary</button>
            <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
            <button type="button" class="btn btn-success rounded-pill">Success</button>
            <button type="button" class="btn btn-danger rounded-pill">Danger</button>
            <button type="button" class="btn btn-warning rounded-pill">Warning</button>
            <button type="button" class="btn btn-info rounded-pill">Info</button>
            <button type="button" class="btn btn-light rounded-pill">Light</button>
            <button type="button" class="btn btn-dark rounded-pill">Dark</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Icon Buttons</h5>

            <button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i> With Text</button>
            <button type="button" class="btn btn-secondary"><i class="bi bi-collection"></i></button>
            <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
            <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
            <button type="button" class="btn btn-warning"><i class="bi bi-exclamation-triangle"></i></button>
            <button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button>
            <button type="button" class="btn btn-dark"><i class="bi bi-folder"></i></button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Button Groups</h5>

            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary">Left</button>
              <button type="button" class="btn btn-primary">Middle</button>
              <button type="button" class="btn btn-primary">Right</button>
            </div>

            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-danger">Left</button>
              <button type="button" class="btn btn-warning">Middle</button>
              <button type="button" class="btn btn-success">Right</button>
            </div>

            <div class="btn-group" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn btn-outline-primary">Left</button>
              <button type="button" class="btn btn-outline-primary">Middle</button>
              <button type="button" class="btn btn-outline-primary">Right</button>
            </div>

          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Outline Buttons</h5>

            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Button Sizes</h5>

            <button type="button" class="btn btn-primary btn-sm">Small</button>
            <button type="button" class="btn btn-secondary">Normal</button>
            <button type="button" class="btn btn-success btn-lg">Large</button>

            <button type="button" class="btn btn-outline-danger btn-sm">Small</button>
            <button type="button" class="btn btn-outline-warning">Normal</button>
            <button type="button" class="btn btn-outline-info btn-lg">Large</button>

            <div class="d-grid gap-2 mt-3">
              <button class="btn btn-primary" type="button">Block Button</button>
            </div>

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Button States</h5>

            <button type="button" class="btn btn-primary">Normal</button>
            <button type="button" class="btn btn-primary" disabled>Disabled</button>
            <button type="button" class="btn btn-outline-primary">Normal</button>
            <button type="button" class="btn btn-outline-primary" disabled>Disabled</button>
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