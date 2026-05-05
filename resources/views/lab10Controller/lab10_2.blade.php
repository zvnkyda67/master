<x-layout>
    <x-slot:title>
        lab10
    </x-slot:title>
    <p>{{$post}}</p>
    <table border="1">
        <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>    
        <td>{{$post->slug}}</td>
        <td>{{$post->likes}}</td>   
        </tr>
    </table>
    
</x-layout>