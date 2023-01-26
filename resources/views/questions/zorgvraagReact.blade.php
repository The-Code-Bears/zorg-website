@include('includes.head')

@yield('head')
<x-app-layout>
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('question.store') }}" method="POST">
                @csrf
                    <div class="mx-16">
                        onderwerp:
                        <input type="text" name="subject">
                        vraag:
                        <textarea name="question" id="question" cols="75" rows="10"></textarea>
                    </div>
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-default text-right bg-yellow-400 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">aanmaken</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
