<x-app-layout>
    <x-slot name="header">
        <x-nav-link class="pr-3" href="{{ route('ledger') }}" :active="request()->routeIs('ledger')">
            {{ __('Membership Dues') }}
        </x-nav-link>
        <x-nav-link class="pr-3" href="{{ route('paymentHistory') }}" :active="request()->routeIs('paymentHistory')">
            {{ __('Payment History') }}
        </x-nav-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                Membership Dues
                                {{-- <p class="mt-1 text-sm font-normal text-gray-500 ">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p> --}}
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Fiscal Year
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Charge
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Credit
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Balance
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ledger as $ledgers)
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $ledgers->fiscal_year }}    
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $ledgers->tran_desc }}    
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $ledgers->dbit }}    
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $ledgers->cbit }}    
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $ledgers->bal }}    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
