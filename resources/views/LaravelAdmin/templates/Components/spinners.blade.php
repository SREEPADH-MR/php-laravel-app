@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Spinners</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Spinners</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Border spinner</h5>
            <p>Use the border spinners for a lightweight loading indicator.</p>

            <!-- Border spinner -->
            <div class="spinner-border" role="status">
              <span class="visually-hidden">Loading...</span>
            </div><!-- End Border spinner -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Colors</h5>

            <!-- Color spinners -->
            <div class="spinner-border text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-secondary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-success" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-danger" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-warning" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-info" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-light" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-dark" role="status">
              <span class="visually-hidden">Loading...</span>
            </div><!-- End Color spinners -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Alignment</h5>
            <p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>

            <!-- Center aligned spinner -->
            <div class="d-flex justify-content-center">
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div><!-- End Center aligned spinner -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Buttons</h5>
            <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>

            <!-- Button spinners -->
            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>

            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button class="btn btn-primary" type="button" disabled>
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
            <!-- End Button spinners -->

          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Growing spinner</h5>
            <p>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>

            <!-- Growing spinner -->
            <div class="spinner-grow" role="status">
              <span class="visually-hidden">Loading...</span>
            </div><!-- End Growing spinner -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Growing Color spinners</h5>

            <!-- Growing Color spinnersr -->
            <div class="spinner-grow text-primary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-info" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-light" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-dark" role="status">
              <span class="visually-hidden">Loading...</span>
            </div><!-- End Growing Color spinners -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sizes</h5>
            <p>Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components. Or, use custom CSS or inline styles to change the dimensions as needed.</p>

            <!-- Sized spinners -->
            <div class="spinner-border spinner-border-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-border" style="width: 30px; height: 30px;" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-border" style="width: 40px; height: 40px;" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-border" style="width: 50px; height: 50px;" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-grow spinner-grow-sm" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-grow" style="width: 30px; height: 30px;" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-grow" style="width: 40px; height: 40px;" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>

            <div class="spinner-grow" style="width: 50px; height: 50px;" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <!-- End Sized spinners -->

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