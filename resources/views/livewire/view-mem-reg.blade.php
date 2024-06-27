<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-xl sm:rounded-lg bg-white">
            <div class="p-5">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class ="flex-col space-y-4 bg-white">
                        <table class="w-full text-sm text-left rtl:text-right  ">
                            {{-- {{ $sort }} --}}
                            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                Membership Registration
                                
                                {{-- <p class="mt-1 text-sm font-normal text-gray-500 ">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                                <button  id="dropdownRadioButton" data-dropdown-toggle="dropdownDefaultRadio" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown radio <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                    
                                    <!-- Dropdown menu -->
                                <div  id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton" >
                                        <li>
                                            <div class="flex items-center">
                                                <input wire:model.live='sort' id="default-radio-1" type="radio" value="id" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Registration ID</label>
                                            </div>
                                            </li>
                                            <li>
                                            <div class="flex items-center">
                                                <input wire:model.live='sort' checked id="default-radio-2" type="radio" value="psa_id" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">PSA ID</label>
                                            </div>
                                            </li>
                                            <li>
                                            <div class="flex items-center">
                                                <input wire:model.live='sort' id="default-radio-3" type="radio" value="created_at" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="default-radio-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date (recent)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </caption>
                            
                            <thead class="text-sm text-gray-700 uppercase bg-gray-100  ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center ">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        PSA ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Last Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        First Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Middle Initial
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3 text-center">
                                        Hospital Name
                                    </th>
                                    <th scope="col" class="px-6 py-3" >
                                        Hospital Address
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3 ">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Membership
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Proof if Senior/Trainee
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3 ">
                                        Senior Citizen
                                    </th> --}}
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($reg as $regs)
                                    <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-100">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center ">
                                            {{ $regs->id }}    
                                        </th>
                                        <td class="px-6 py-4 text-center">
                                            {{ $regs->psa_id }}    
                                        </td>
                                        <td class="px-6 py-4 ">
                                            {{ $regs->last_name }}    
                                        </td>
                                        <td class="px-6 py-4 ">
                                            {{ $regs->first_name }}    
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $regs->middle_name }}    
                                        </td>
                                        <td class="px-6 py-4 ">
                                            {{ $regs->email }}    
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $regs->membership }}    
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a data-modal-toggle="view-modal" data-modal-target="view-modal" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        </td>
                                        {{-- @if ($regs->membership == 'TM')
                                        <td class="px-6 py-4 ">
                                            {{ $regs->trainee_cert }}    
                                        </td>
                                        @else
                                        <td class="px-6 py-4 ">
                                            {{ $regs->senior_citizen }}    
                                        </td>
                                        <div class="p-4 md:p-5">
                                            <img src="{{ url('storage/photos/trainee cert/'.$regs->trainee_cert) }}" alt=""/>
                                        </div>
                                        @endif --}}
                                    </tr>

                                    <div id="view-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                        {{ $regs->last_name }}
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="view-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5 space-y-4">
                                                    <div class="p-4 md:p-5">
                                                        <img src="{{ url('storage/photos/trainee cert/'.$regs->trainee_cert) }}" alt=""/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <div class="text-right m-2">
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 ml-3 rounded inline-flex items-center" onclick="location.href='{{ url('admin/dashboard/export-excel') }}'">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span>Export Excel</span>
                            </button>
                            {{-- onclick="location.href='{{ url('admin/dashboard/export-pdf') }}'" --}}
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 ml-3 rounded inline-flex items-center" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span>Export PDF</span>
                            </button>
                        </div>
                        <div class="m-2 pb-4">
                            {{ $reg->onEachSide(0)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Enter Range to print in PDF
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" wire:submit.prevent="exportPDF">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From ID</label>
                            <input type="number" wire:model='from'  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">To ID</label>
                            <input type="number" wire:model='to' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Print</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div> 
 