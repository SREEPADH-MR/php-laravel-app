@extends('LaravelAdmin.layouts.adminLayout')

@section('title', 'Admin')

@section('content')

@include('LaravelAdmin.layouts.adminHeader')

@include('LaravelAdmin.layouts.adminSidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Frequently Asked Questions</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Frequently Asked Questions</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section faq">
    <div class="row">
      <div class="col-lg-6">

        <div class="card basic">
          <div class="card-body">
            <h5 class="card-title">Basic Questions</h5>

            <div>
              <h6>1. Nisi ut ut exercitationem voluptatem esse sunt rerum?</h6>
              <p>Saepe perspiciatis ea. Incidunt blanditiis enim mollitia qui voluptates. Id rem nulla tenetur nihil in unde rerum. Quae consequatur placeat qui cumque earum eius omnis quos.</p>
            </div>

            <div class="pt-2">
              <h6>2. Reiciendis dolores repudiandae?</h6>
              <p>Id ipsam non ut. Placeat doloremque deserunt quia tenetur inventore laboriosam dolores totam odio. Aperiam incidunt et. Totam ut quos sunt atque modi molestiae dolorem.</p>
            </div>

            <div class="pt-2">
              <h6>3. Qui qui reprehenderit ut est illo numquam voluptatem?</h6>
              <p>Enim inventore in consequuntur ipsam voluptatem consequatur beatae. Nostrum consequuntur voluptates et blanditiis.</p>
            </div>

          </div>
        </div>

        <!-- F.A.Q Group 1 -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Laborum dolorem quam porro</h5>

            <div class="accordion accordion-flush" id="faq-group-1">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                    Debitis adipisci eius?
                  </button>
                </h2>
                <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                  <div class="accordion-body">
                    Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem eos nulla ab dolores est asperiores iure. Quo est quis praesentium aut maiores. Corrupti sed aut expedita fugit vero dolorem. Nemo rerum sapiente. A quaerat dignissimos.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                    Omnis fugiat quis repellendus?
                  </button>
                </h2>
                <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                  <div class="accordion-body">
                    In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                    Et occaecati praesentium aliquam modi incidunt?
                  </button>
                </h2>
                <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                  <div class="accordion-body">
                    Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum fuga quod ut non fuga.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                    Quo unde eaque vero dolor quis ipsam?
                  </button>
                </h2>
                <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                  <div class="accordion-body">
                    Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse">
                    Natus sunt quo atque mollitia accusamus?
                  </button>
                </h2>
                <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                  <div class="accordion-body">
                    Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed. Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam. Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div><!-- End F.A.Q Group 1 -->

      </div>

      <div class="col-lg-6">

        <!-- F.A.Q Group 2 -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Deserunt ut unde corporis</h5>

            <div class="accordion accordion-flush" id="faq-group-2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                    Cumque voluptatem recusandae blanditiis?
                  </button>
                </h2>
                <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem eos nulla ab dolores est asperiores iure. Quo est quis praesentium aut maiores. Corrupti sed aut expedita fugit vero dolorem. Nemo rerum sapiente. A quaerat dignissimos.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                    Provident beatae eveniet placeat est aperiam repellat adipisci?
                  </button>
                </h2>
                <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                    Minus aliquam modi id reprehenderit nihil?
                  </button>
                </h2>
                <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum fuga quod ut non fuga.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                    Quaerat qui est iusto asperiores qui est reiciendis eos et?
                  </button>
                </h2>
                <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                    Laboriosam asperiores eum?
                  </button>
                </h2>
                <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                  <div class="accordion-body">
                    Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed. Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam. Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div><!-- End F.A.Q Group 2 -->

        <!-- F.A.Q Group 3 -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dolore occaecati ducimus quam</h5>

            <div class="accordion accordion-flush" id="faq-group-3">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                    Assumenda doloribus est fugiat sint incidunt animi totam nisi?
                  </button>
                </h2>
                <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                  <div class="accordion-body">
                    Ut quasi odit odio totam accusamus vero eius. Nostrum asperiores voluptatem eos nulla ab dolores est asperiores iure. Quo est quis praesentium aut maiores. Corrupti sed aut expedita fugit vero dolorem. Nemo rerum sapiente. A quaerat dignissimos.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                    Consequatur saepe explicabo odio atque nisi?
                  </button>
                </h2>
                <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                  <div class="accordion-body">
                    In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                    Voluptates vel est fugiat molestiae rem sit eos sint?
                  </button>
                </h2>
                <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                  <div class="accordion-body">
                    Voluptates magni amet enim perspiciatis atque excepturi itaque est. Sit beatae animi incidunt eum repellat sequi ea saepe inventore. Id et vel et et. Nesciunt itaque corrupti quia ducimus. Consequatur maiores voluptatum fuga quod ut non fuga.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsThree-4" type="button" data-bs-toggle="collapse">
                    Ab ipsa cum autem voluptas doloremque velit?
                  </button>
                </h2>
                <div id="faqsThree-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                  <div class="accordion-body">
                    Numquam ut reiciendis aliquid. Quia veritatis quasi ipsam sed quo ut eligendi et non. Doloremque sed voluptatem at in voluptas aliquid dolorum.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" data-bs-target="#faqsThree-5" type="button" data-bs-toggle="collapse">
                    Aliquam magni ducimus facilis numquam dolorum harum eveniet iusto?
                  </button>
                </h2>
                <div id="faqsThree-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                  <div class="accordion-body">
                    Aut necessitatibus maxime quis dolor et. Nihil laboriosam molestiae qui molestias placeat corrupti non quo accusamus. Nemo qui quis harum enim sed. Aliquam molestias pariatur delectus voluptas quidem qui rerum id quisquam. Perspiciatis voluptatem voluptatem eos. Vel aut minus labore at rerum eos.
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div><!-- End F.A.Q Group 3 -->

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