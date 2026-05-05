<x-layout>
    <x-slot:title>
        lab10
    </x-slot:title>
    {{$table}}
    <table border="1">
        @foreach ($table as $elem)
        <tr>
        @foreach ($elem as $key => $elem)
        <td>
            <a href="http://mdsafxa-m1.prof.ru/public/post/all">{{$key}}</a>
        </td>
        <td>{{$elem}}</td>
        @endforeach      
        </tr>
        @endforeach
    </table>
    
</x-layout>