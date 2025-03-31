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
                        To be constructed...
                    </h1>
                    
                    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                        <table class="w-full text-sm text-left rtl:text-right  ">
                            {{-- {{ $sort }} --}}
                            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                Registration Summary
                            </caption>
                            
                            <thead class="text-sm text-gray-700 uppercase bg-gray-100  ">
                                <tr>
                                    <th scope="col" class="px-6 py-3  ">
                                        Membership
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center ">
                                        Online
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Face to Face
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
    
                                <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        Regular Member
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{ $onlineRM }}   
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $faceRM }}  
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{ $totRM }}  
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                        Life Member
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{ $onlineLM }}   
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $faceLM }}  
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{ $totLM }}  
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                        Trainee Member
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{ $onlineTM }}   
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $faceTM }}  
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{ $totTM }}  
                                    </td>
                                </tr>
                                <thead class="text-sm text-gray-700 uppercase bg-gray-100  ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3  ">
                                            Total PSA Members
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center ">
                                            {{ $onlineTM + $onlineRM + $onlineLM}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            {{ $faceTM + $faceRM + $faceLM}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            {{ $totTM + $totLM + $totRM}}
                                        </th>
                                    </tr>
                                </thead>
                                <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-100">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                        Non-Member
                                    </th>
                                    <td class="px-6 py-4 text-center">
                                        {{ $onlineNM }}   
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $faceNM }}  
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{ $totNM }}  
                                    </td>
                                </tr>
                                <thead class="text-sm text-gray-700 uppercase bg-gray-100  ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3  ">
                                            Total Registrants
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center ">
                                            {{ $onlineTM + $onlineRM + $onlineLM + $onlineNM}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            {{ $faceTM + $faceRM + $faceLM + $faceNM}}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            {{ $totTM + $totLM + $totRM + $totNM}}
                                        </th>
                                    </tr>
                                </thead>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
