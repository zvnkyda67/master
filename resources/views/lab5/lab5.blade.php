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
    <p>Текущая дата: {{ date('d.m.Y') }}</p>
    <p>{{ $arr['name'] }}</p>
    <p>{{ $arr['age'] }}</p>
    <p>{{ $arr['salary'] }}</p>
    <p>{{ count($arr2) }}</p>
    <p>{{ $city?:'Moskov' }}</p>
    <p>{{ $location['country']?:'Россия'}}</p>
    <p>{{ $location['city1']?:'Омск' }}</p>
</x-layout>