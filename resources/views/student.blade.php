@extends('base')

@section('content')
    <div class="text-white">        
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        @foreach($tableColumns as $names)
                        <th scope="col" class="px-6 py-3">
                            {{$names}}
                        </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$student->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$student->created_at}}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->updated_at}}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$student->email}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection