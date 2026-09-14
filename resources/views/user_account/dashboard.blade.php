<x-app-layout>
  <x-slot name="header">
      <x-nav-link class="pr-3" href="{{ route('admin') }}" :active="request()->routeIs('admin')">
          {{ __('Summary') }}
      </x-nav-link>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                  {{-- <x-application-logo class="block h-12 w-auto" />    --}}
              
                  <h1 class="mb-8 text-2xl font-medium text-gray-900">
                  Report
                  </h1>
                  <div class="columns-3">
                      <div class=" bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6 aspect-square">
                          <div class="flex justify-between mb-3">
                              <div class="flex justify-center items-center">
                                  <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Total Registrants</h5>
                              </div>
                          </div>
                          <!-- Donut Chart -->
                          <div class="py-6" id="donut-chart"></div>
                      </div>
                      
                      <div class=" bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6">
                          <div class="flex justify-between mb-3">
                              <div class="flex justify-center items-center">
                                  <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pe-1">Monthly Registrants</h5>
                              </div>
                          </div>
                          <!-- bar Chart -->
                        <div id="column-chart"></div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <script>
      const seriesData = @json($series);
      const getChartOptions = () => {
        return {
          series: seriesData,
          colors: [ "#FDBA8C", "#E74694", "#64748B", "#1C64F2", "#16BDCA",],
          chart: {
            height: 320,
            width: "100%",
            type: "donut",
          },
          stroke: {
            colors: ["transparent"],
            lineCap: "",
          },
          plotOptions: {
            pie: {
              donut: {
                labels: {
                  show: true,
                  name: {
                    show: true,
                    fontFamily: "Inter, sans-serif",
                    offsetY: 20,
                  },
                  total: {
                    showAlways: true,
                    show: true,
                    label: "ACA Registrants",
                    fontFamily: "Inter, sans-serif",
                    formatter: function (w) {
                      const sum = w.globals.seriesTotals.reduce((a, b) => {
                        return a + b
                      }, 0)
                      return sum
                    },
                  },
                  value: {
                    show: true,
                    fontFamily: "Inter, sans-serif",
                    offsetY: -20,
                    formatter: function (value) {
                      return value 
                    },
                  },
                },
                size: "80%",
              },
            },
          },
          grid: {
            padding: {
              top: -2,
            },
          },
          labels: ["Foreign Delegates Member", "Foreign Delegates Non-Member", "Life Member", "Regular Member", "Trainee Member"],
          dataLabels: {
            enabled: false,
          },
          legend: {
            position: "bottom",
            fontFamily: "Inter, sans-serif",
          },
          yaxis: {
            labels: {
              formatter: function (value) {
                return value
              },
            },
          },
          xaxis: {
            labels: {
              formatter: function (value) {
                return value
              },
            },
            axisTicks: {
              show: false,
            },
            axisBorder: {
              show: false,
            },
          },
        }
      }
      
      if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
        chart.render();

      }
</script>

<script>
  const RM = @json($RM);
  const TM = @json($TM);
  const LM = @json($LM);
  const FDA = @json($FDA);
  const FDN = @json($FDN);

  const options = {
    colors: ["#1A56DB", "#16BDCA", "#64748B", "#FDBA8C", "#E74694"],
    series: [
      {
          name: "Regular Members",
          color: "#1A56DB", 
          data: RM
      },
      {
          name: "Trainee Members",
          color: "#16BDCA", 
          data: TM
      },
      {
          name: "Life Members",
          color: "#64748B", 
          data: LM
      },
      {
          name: "Foreign Delegates Members",
          color: "#FDBA8C", 
          data: FDA
      },
      {
          name: "Foreign Delegates Non-Members",
          color: "#E74694", 
          data: FDN
      },
    ],
    chart: {
      type: "bar",
      height: "400px",
      fontFamily: "Inter, sans-serif",
      toolbar: {
        show: true,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "85%",
        borderRadiusApplication: "end",
        borderRadius: 8,
        
      },
    },
    tooltip: {
      shared: true,
      intersect: false,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },  
    states: {
      hover: {
        filter: {
          type: "darken",
          value: 1,
        },
      },
    },
    stroke: {
      show: true,
      width: 0,
      colors: ["transparent"],
    },
    grid: {
      show: false,
      strokeDashArray: 4,
      padding: {
        left: 2,
        right: 2,
        top: -14
      },
    },
    dataLabels: {
      enabled: true,
    },
    legend: {
      show: true,
    },
    xaxis: {
      floating: false,
      labels: {
        show: true,
        style: {
          fontFamily: "Inter, sans-serif",
          cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
        }
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
  }
  
  if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("column-chart"), options);
    chart.render();
  }
</script>
</x-app-layout>
