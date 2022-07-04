<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Population data from (DATA BASE)') }}
        </h2>
    </x-slot>

    <?php if($table){ ?>

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
                                <tr class="bg-gradient-to-r from-cyan-500 to-blue-500 ... text-white">
                                    <th class="w-1/2 p-4">Years</th>
                                    <th class="w-1/2 p-4">Population</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($table as $val)
                                    <tr>
                                        <td class="border border-slate-300 ... p-2 text-center">{{ $val['year']}}</td>
                                        <td class="border border-slate-300 ... p-2 text-center">{{ number_format($val['population'], 0) }}</td>
                                    </tr>
                                @endforeach                        
                            </tbody>
                        </table>
                    </div>                
                </div>
            </div>
        </div>
    
    <?php }else{ ?>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-gray-200 text-center">
                        <p class="text-2xl text-gray-400">There's no data in Data Base.</p>
                    </div>
                    <div class="flex items-center justify-center pt-1 pb-10">
                        <img class="object-center" src="/img/no_data.png" alt="population" width="250px;">
                    </div>         
                    <p class="text-2xl text-center pb-10 text-gray-400">make sure to run the command to extract data from the REST API.</p>      
                </div>
            </div>
        </div>

    <?php } ?>
    
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
          backgroundColor: 'rgb(16, 81, 255)',
          borderColor: 'rgb(16, 81, 255)',
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
