@include('includes.head')

@yield('head')  
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Questions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">From</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Marco</td>
                        <td>Test Subject</td>
                        <td>dafddsaaaaaaaaaaaaaaaaaaaaaaa...</td>
                        <th>00:00</th>
                        <th><a href="{{ route("zorgvraag.reaction") }}" type="button" class="btn btn-primary bg-primary fs-6">Reageer</a></th>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
