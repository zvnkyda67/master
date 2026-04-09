<x-layout>
    <x-slot:title>
        lab 5
    </x-slot:title>
    <p>{{$name}}</p>
    <p>{{$age}}</p>
    <p>{{$salary}}</p>
    <p class="{{ $class }}">badi</p>
    <p><input value="{{ $var }}"></p>
    <p><input value="{{ $var1 }}"></p>
    <p><input value="{{ $var2 }}"></p>
    <p style="{{ $color }}">Красни Текст</p>
    <a href="{{ $silka }}">{{ $text }}</a>
    {{--<p>Текущая дата: {{ date('d.m.Y') }}</p>--}}
    <p>{{ $arr['name'] }}</p>
    <p>{{ $arr['age'] }}</p>
    <p>{{ $arr['salary'] }}</p>
    <p>{{ count($arr2) }}</p>
    <p>{{ $city?:'Moskov' }}</p>
    <p>{{ $location['country']?:'Россия'}}</p>
    <p>{{ $location['city1']?:'Омск' }}</p>
    <p>Дата: {{ $year ?: date('Y') }}.{{ $month ?: date('m')}}.{{ $day ?: date('d')}}</p>
    <p>{!!$str!!}</p>
    @if ($age1 > 18)
    вам больше 18
    @elseif ($age1 = 18)
    вам ровно 18
    @else
    вам нет 18!
    @endif
    @unless ($isVzrosli)
    <p>vam ne 18</p>
    @endunless
    @if (count($numbers) > 0)
    <p>{{$numbers[0]+$numbers[1]+$numbers[2]}}</p>
    @else (count($numbers) = 0)
    <p>Массив пуст</p>
    @endif
    <ul>
    @foreach ($numbers as $elem)
    <li>{{$elem}} Квадрат числа = {{ $elem*$elem }}</li>
    @endforeach
    </ul>
    <ul>
        @foreach ($stroki as $key => $elem)
        <li>{{ $key + 1}} {{ $elem }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($num as $elem)
        @if ($elem % 2 == 0)
        <li>{{ $elem }}</li>
        @endif
        @endforeach
    </ul>
    @if (is_array($data))
    <ul>
        @foreach ($data as $elem)
        <li>{{ $elem }}</li>
        @endforeach
    </ul>
    @else
    <p>{{ $data }}</p>
    @endif
    <ul>
        @foreach ($users as $user)
        <li>{{ $user['name'] }}-{{ $user['age'] }}</li>
        @endforeach
    </ul>
    <table border="1">
        @foreach ($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['age'] }}</td>
        </tr>
        @endforeach
    </table>
    <ul>
        @foreach ($employees as $worker)
        <li>{{ $worker['name'] }} {{ $worker['surname'] }} salary = {{ $worker['salary'] }}</li>
        @endforeach
    </ul>
    <table border="1">
        @foreach ($employees as $worker)
        <tr>
            <td>{{ $worker['name'] }}</td>
            <td>{{ $worker['surname'] }}</td>
            <td>{{ $worker['salary'] }}</td>
        </tr>
        @endforeach
    </table>
    @forelse ($mas as $elem)
    <p>{{ $elem }}</p>
    @empty
    <P>В массиве нет юзеров</P>
    @endforelse
</x-layout>