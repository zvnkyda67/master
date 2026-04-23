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
   
    <p>{{$user14 -> id}}</p>
    <p>{{$user14 -> age}}</p>
    <p>{{$user14 -> email}}</p>
    <p>{{$user15 -> email}}</p>
    <p><b>zadanie 22</b></p>
    <ul>
    @foreach ($user22 as $user)
    <li>{{$user}}</li>
    @endforeach
    </ul>
    <p><b>zadanie 23</b> {{$user23}}</p>
    <p><b>zadanie 24</b> {{$user24}}</p>
    <p><b>zadanie 26</b> {{$user26}}</p>
    <p><b>zadanie 27</b> {{$user27}}</p>
    <p><b>zadanie 28</b> {{$user28}}</p>
    <p><b>zadanie 29</b> {{$user29}}</p>
    <p><b>zadanie 33</b> {{$user33}}</p>
    <p><b>zadanie 34</b> {{$user34}}</p>
    <p><b>zadanie 35</b> {{$user35}}</p>
    <p><b>zadanie 40</b> {{$user40}}</p>
    <p><b>zadanie 41</b> {{$user41}}</p>
    <p><b>zadanie 42</b> {{$user42}}</p>
</x-layout>