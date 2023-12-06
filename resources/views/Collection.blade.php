@extends('base')

@section('content')
    <div class="text-white">        
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400">
                <tbody>
                    @foreach($students as $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$student['name']}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$student['hobby']}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$student['score']}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex text-center flex-col text-xl">
                <h2>average score is {{$average}}</h2>
                <h2>lowest score is {{$min}}</h2>
                <h2>highest score is {{$max}}</h2>
            </div>
        </div>
    </div>
@endsection