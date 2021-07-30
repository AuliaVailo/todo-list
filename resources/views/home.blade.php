<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center align-center bg-blue-500 h-screen">
        <div class="bg-white m-5 w-full md:w-80 rounded-xl">
            <div class="font-bold p-5">Todo List Application</div>
            <hr>
            <div class="p-5">
                <form action="{{ $action }}" method="post">
                    @csrf
                    <div class="mb-2">Todo</div>
                    <div>
                        <input type="text" name="todo" id="todo" value="{{ $todo->todo ?? '' }}" placeholder="Create simple web app..." class="bg-gray-200 w-full p-3 rounded-lg" required>
                    </div>
                </form>
            </div>
            <div class="p-3">
                <div class="mb-2 p-2">Todo-list</div>
                @foreach ($todos as $item)
                    <div class="flex justify-between">
                        <div class="bg-blue-500 p-2 text-white rounded-lg m-2 w-full">
                            {{ $item->todo }}
                        </div>
                        <div class="flex">
                            <a href="{{ route('edit', ['id' => $item->id]) }}" class="bg-blue-500 p-2 text-white rounded-lg m-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <a href="{{ route('delete', ['id' => $item->id]) }}" class="bg-red-500 p-2 text-white rounded-lg m-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
