@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>List Group</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">List Group</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default List Group</h5>

            <!-- Default List group -->
            <ul class="list-group">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul><!-- End Default List group -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Links and buttons</h5>

            <!-- List group with Links and buttons -->
            <div class="list-group">
              <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                The current button
              </button>
              <button type="button" class="list-group-item list-group-item-action">A second item</button>
              <button type="button" class="list-group-item list-group-item-action">A third button item</button>
              <button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
              <button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
            </div><!-- End List group with Links and buttons -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">With Icons</h5>

            <!-- List group With Icons -->
            <ul class="list-group">
              <li class="list-group-item"><i class="bi bi-star me-1 text-success"></i> An item</li>
              <li class="list-group-item"><i class="bi bi-collection me-1 text-primary"></i> A second item</li>
              <li class="list-group-item"><i class="bi bi-check-circle me-1 text-danger"></i> A third item</li>
              <li class="list-group-item"><i class="bi bi-exclamation-octagon me-1 text-warning"></i> A fourth item</li>
            </ul><!-- End List group With Icons -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Numbered</h5>

            <!-- List group Numbered -->
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Cras justo odio</li>
            </ol><!-- End List group Numbered -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">With badges</h5>

            <!-- List group With badges -->
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                A list item
                <span class="badge bg-primary rounded-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                A second list item
                <span class="badge bg-primary rounded-pill">2</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                A third list item
                <span class="badge bg-primary rounded-pill">1</span>
              </li>
            </ul><!-- End List With badges -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">With Contextual Classes</h5>

            <!-- List group With Contextual classes -->
            <ul class="list-group">
              <li class="list-group-item">A simple default list group item</li>

              <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
              <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
              <li class="list-group-item list-group-item-success">A simple success list group item</li>
              <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
              <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
              <li class="list-group-item list-group-item-info">A simple info list group item</li>
              <li class="list-group-item list-group-item-light">A simple light list group item</li>
              <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
            </ul><!-- End List Group With Contextual classes -->

          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">With active and disabled items</h5>

            <!-- List group with active and disabled items -->
            <ul class="list-group">
              <li class="list-group-item active" aria-current="true">An active item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
            </ul><!-- End ist group with active and disabled items -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Clean list group</h5>
            <p>Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>

            <!-- List group with active and disabled items -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
            </ul><!-- End Clean list group -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">With custom content</h5>

            <!-- List group with custom content -->
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Subheading</div>
                  Cras justo odio
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Subheading</div>
                  Cras justo odio
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Subheading</div>
                  Cras justo odio
                </div>
                <span class="badge bg-primary rounded-pill">14</span>
              </li>
            </ol><!-- End with custom content -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Advanced Content</h5>

            <!-- List group with Advanced Contents -->
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
              </a>
            </div><!-- End List group Advanced Content -->

          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">With Checkboxes and radios</h5>

            <!-- List group With Checkboxes and radios -->
            <ul class="list-group">
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                First checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Second checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Third checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Fourth checkbox
              </li>
              <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Fifth checkbox
              </li>
            </ul><!-- End List Checkboxes and radios -->

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