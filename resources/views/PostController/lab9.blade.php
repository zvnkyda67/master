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
    <p><b>zadanie 6</b> {{$user2}}</p>
    <p><b>zadanie 7</b> {{$user3}}</p>
    <p><b>zadanie 8</b> {{$user4}}</p>
    <p><b>zadanie 9</b> {{$user5}}</p>
    <p><b>zadanie 10</b> {{$user6}}</p>
    <p><b>zadanie 11</b> {{$user7}}</p>
    <p><b>zadanie 12</b> {{$user8}}</p>
    <p><b>zadanie 13</b> {{$user9}}</p>
    <p><b>zadanie 14</b> {{$user10}}</p>
    <p><b>zadanie 15</b> {{$user11}}</p>
    <p><b>zadanie 16</b> {{$user12}}</p>
    <p><b>zadanie 17</b> {{$user13}}</p>
    <p><b>zadanie 18</b> {{$user14}}</p>
    @if (id == 3)
    <p>{{$}}</p>
</x-layout>