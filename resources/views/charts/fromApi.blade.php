<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Population data from (REST API)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-center text-xl">In this graph you can see all the changes in the population that have occurred in the last few years.</h1><br>
                    <canvas id="myChart" height="100px"></canvas>
                </div>                
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table w-full border-separate lg:border-collapse table-fixed">
                        <thead>
                            <tr class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ... text-white">
                                <th class="w-1/2 p-4">Years</th>
                                <th class="w-1/2 p-4">Population</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($populationData as $val)
                                <tr>
                                    <td class="border border-slate-300 ... p-2 text-center">{{ $val['Year']}}</td>
                                    <td class="border border-slate-300 ... p-2 text-center">{{ number_format($val['Population'], 0) }}</td>
                                </tr>
                            @endforeach                          
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>
    
</x-app-layout>
  
<!-- CDN de chart,js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
      var years =  {{ Js::from($years) }};
      var population =  {{ Js::from($population) }};
  
      const data = {
        labels: years,
        datasets: [{
          label: 'Population',
          backgroundColor: 'rgb(254, 48, 142)',
          borderColor: 'rgb(254, 48, 142)',
          data: population,
        }]
      };
  
      const config = {
        type: 'line',
        data: data,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  
</script>
