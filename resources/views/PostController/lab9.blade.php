<x-layout>
    <x-slot:title>
        lab 9
    </x-slot:title>
    <table border="1">
        @foreach ($users1 as $item)
        <tr>
        @foreach  ($item as $key => $item1)
        <td>
            {{$item1}}
        </td>
        @endforeach
        </tr>
        @endforeach
    </table>
    <p>{{$user2}}</p>
    <p>{{$user3}}</p>
    <p>{{$user4}}</p>
    <p>{{$user5}}</p>
</x-layout>