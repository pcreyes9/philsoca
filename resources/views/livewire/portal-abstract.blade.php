<div>
    <x-loading-indicator/>
    <script>
        window.livewire.on('notifySuccess', message => {
            notify().success(message, 'Approval Success!');
        });
    </script>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-white">
                <div class="p-5">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class ="flex-col space-y-4 bg-white">
                            <table class="w-full text-sm text-left rtl:text-right  ">
                                {{-- {{ $sort }} --}}
                                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                    Abstract Portal
                                    <div class="mt-3">Fellow: {{$fcounter}} | Resident:{{$rcounter}} </div>
                                    
                                    {{-- <p class="mt-1 text-sm font-normal text-gray-500 ">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                                    {{-- <button  style="text-transform: uppercase" id="dropdownRadioButton" data-dropdown-toggle="dropdownDefaultRadio" class="text-black bg-gray-300 hover:bg-gray-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Sort: {{ $sortName }} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                        </svg>
                                    </button>
                                        
                                        <!-- Dropdown menu -->
                                    <div  id="dropdownDefaultRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton" >
                                            <li>
                                                <div class="flex items-center">
                                                    <input wire:model.live='sort' id="regNew" type="radio" value="regNew" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="regNew" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Registration ID (newest)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input wire:model.live='sort' id="regOld" type="radio" value="regOld" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="regOld" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Registration ID (oldest)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input wire:model.live='sort' checked id="psaIDNew" type="radio" value="psaIDNew" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="psaIDNew" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">PSA ID (newest)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input wire:model.live='sort' checked id="psaIDOld" type="radio" value="psaIDOld" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="psaIDOld" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">PSA ID (oldest)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input wire:model.live='sort' id="dateNew" type="radio" value="dateNew" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="dateNew" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date (newest)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center">
                                                    <input wire:model.live='sort' id="dateOld" type="radio" value="dateOld" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="dateOld" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date (oldest)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </caption>
                                
                                <thead class="text-sm text-gray-700 uppercase bg-gray-100  ">
                                    <tr>
                                        {{-- <th scope="col" class="px-6 py-3 text-center ">
                                            ID
                                        </th> --}}
                                        <th scope="col" class="px-6 py-3">
                                           Brief Title
                                        </th>
                                        <th scope="col" class="px-6 py-3 ">
                                            Category
                                        </th>
                                        {{-- <th scope="col" class="px-6 py-3 ">
                                            Country
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Email
                                        </th> --}}
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($reg as $regs)
                                        <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-100">
                                            {{-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center ">
                                                {{ $regs->id }}    
                                            </th> --}}
                                            <td class="px-6 py-4 text-left">
                                                <div>
                                                    <span class="text-lg"><strong> {{ $regs->title }}</strong></span>
                                                </div>
                                                <div class="mt-3">
                                                    <span class="text-base">{{ $regs->author }} | {{ $regs->email }} | {{ $regs->contact }} | {{ $regs->country }} | {{ $regs->hospital }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 uppercase">
                                                {{ $regs->category }}    
                                            </td>
                                            {{-- <td class="px-6 py-4 ">
                                                {{ $regs->country }}    
                                            </td> --}}
                                            {{-- <td class="px-6 py-4 text-center">
                                                {{ $regs->email }}    
                                            </td> --}}
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                                                <a href="#" wire:click.prevent="download('{{ $regs->fileName }}', '{{ $regs->category }}')" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">Download</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="m-2 flex ">
                                <div class="m-2 pb-4 flex-grow">
                                    {{ $reg->onEachSide(0)->links() }}
                                </div>
                                <div class="text-right mb-5 ml-auto">
                                    {{-- <button class="mt-2 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 ml-3 rounded inline-flex items-center" wire:click="export">
                                        <svg wire:loading.remove class="mr-1 w-[19px] h-[19px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
                                        </svg>
                                        <svg wire:loading class="mr-1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                                        <span>Export Excel</span>
                                    </button> --}}
                                    {{-- onclick="location.href='{{ url('admin/dashboard/export-pdf') }}'" --}}
                                </div>
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
                            <button wire:loading.attr="disabled" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                                <div wire:loading.remove>
                                    Print
                                </div>    
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div>



 