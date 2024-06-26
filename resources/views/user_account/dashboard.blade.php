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
                        Personal Information
                    </h1>
                    
                    {{-- <form>
                        @foreach ($info as $infos )
                            <div class="grid gap-6 mb-6  md:grid-cols-3">
                                
                                <div>
                                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First name</label>
                                    <input value="{{ $infos->first_name }}" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  required disabled readonly>
                                </div>
                                <div>
                                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last name</label>
                                    <input value="{{ $infos->last_name }}" type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required disabled readonly> 
                                </div>
                                <div>
                                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">Middle Initial</label>
                                    <input value="{{ $infos->mem_middle_name }}" type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  requ disabled readonly>
                                </div> 
                                <div>
                                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">PSA ID</label>
                                    <input value="{{ $infos->PSA_ID }}" type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  requ disabled readonly>
                                </div>  
                                <div>
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Membership Type</label>
                                    <input value="{{ $infos->MEMBERSHIP }}" type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  pa disabled readonlyttern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                </div>
                                <div>
                                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 ">PSA Chapter</label>
                                    <input type="url" value="{{ $infos->psa_chapter_code }}" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "   disabled  required>
                                </div>
                                
                                
                                <div>
                                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">Citizenship<label>
                                    <input type="url" value="{{ $infos->mem_citizenship }}" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  disabled  required>                          
                                </div>
                                <div>
                                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">Date of Birth<label>
                                    <input  value="{{ $infos->mem_birth_date}}" type="url" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required disabled >                          
                                </div>
                                <div>
                                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">Religion<label>
                                    <input type="url" value="{{ $infos->mem_religion}}" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required disabled >                          
                                </div>
                                <div>
                                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">Civil Status<label>
                                    <input type="url" value="{{ $infos->mem_civil_status}}" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required disabled >                          
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Home Address</label>
                                <input value="{{ $infos->mem_home_address }}" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " disabled required>
                            </div> 
                            <div class="mb-6">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required disabled readonlyuired>
                            </div> 
                            <div class="mb-6">
                                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm password</label>
                                <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  required disabled readonlyuired>
                            </div> 
                        @endforeach
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
