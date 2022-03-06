@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Cards</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">Cards</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row align-items-top">
      <div class="col-lg-6">

        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Card</h5>
            Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
            Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
            Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
          </div>
        </div><!-- End Default Card -->

        <!-- Card with header and footer -->
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h5 class="card-title">Card with header and footer</h5>
            Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas. Corrupti inventore consequatur nisi necessitatibus modi consequuntur soluta id. Enim autem est esse natus assumenda. Non sunt dignissimos officiis expedita. Consequatur sint repellendus voluptas.
            Quidem sit est nulla ullam. Suscipit debitis ullam iusto dolorem animi dolorem numquam. Enim fuga ipsum dolor nulla quia ut.
            Rerum dolor voluptatem et deleniti libero totam numquam nobis distinctio. Sit sint aut. Consequatur rerum in.
          </div>
          <div class="card-footer">
            Footer
          </div>
        </div><!-- End Card with header and footer -->

        <!-- Card with an image on left -->
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card with an image on left</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div><!-- End Card with an image on left -->

      </div>

      <div class="col-lg-3">

        <!-- Card with an image on top -->
        <div class="card">
          <img src="assets/img/card.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card with an image on top</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div><!-- End Card with an image on top -->

        <!-- Card with an image on bottom -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card with an image on bottom</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <img src="assets/img/card.jpg" class="card-img-bottom" alt="...">
        </div><!-- End Card with an image on bottom -->

      </div>

      <div class="col-lg-3">

        <!-- Card with an image overlay -->
        <div class="card">
          <img src="assets/img/card.jpg" class="card-img-top" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Card with an image overlay</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div><!-- End Card with an image overlay -->

        <!-- Card with titles, buttons, and links -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card with titles, buttons, and links</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text"><a href="#" class="btn btn-primary">Button</a></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div><!-- End Card with titles, buttons, and links -->

        <!-- Special title treatmen -->
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div><!-- End Special title treatmen -->

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