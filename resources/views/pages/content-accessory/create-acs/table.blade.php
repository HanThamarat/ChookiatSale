@component('components.content-card.full-card')
<div class="w-full">
 <table class="w-full">
     <thead>
         <tr class="text-white">
             <th class="bg-orange-300 py-1 rounded-l-md">#</th>
             <th class="bg-orange-300 py-1">Accessory ID</th>
             <th class="bg-orange-300 py-1">Accessory Name</th>
             <th class="bg-orange-300 py-1">Accessory Description</th>
             <th class="bg-orange-300 py-1 rounded-r-md">Action</th>
         </tr>
     </thead>
     <tbody>
         @foreach($acs as $key => $acs)
             <tr class="text-center">
                 <td class="py-2">{{ @$key + 1 }}</td>
                 <td>{{ @$acs->id }}</td>
                 <td>{{ @$acs->AccessorySource }}</td>
                 <td>{{ @$acs->AccessoryDetail }}</td>
                 <td>
                     <div class="flex justify-center">
                         <a href="{{ route('views.index') }}?page={{ 'customer-info' }}&cusId={{ @$acs->id }}"><i class="text-[20px] text-orange-500 hover:text-orange-600 duration-100 ease-in-out fa-solid fa-circle-info"></i></a>
                     </div>
                 </td>
             </tr>
         @endforeach
     </tbody>
 </table>
</div>
@endcomponent