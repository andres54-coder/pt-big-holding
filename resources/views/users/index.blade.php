<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>show</title>
    
</head>

<body class="antialiased">
    <h1>users</h1>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">name</th>
                                <th scope="col" class="px-6 py-4">username</th>
                                <th scope="col" class="px-6 py-4">email</th>
                                <th scope="col" class="px-6 py-4">actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @forelse ($users as $user)
                                <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$user['id']}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$user['name']}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$user['username']}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$user['email']}}</td>
                                    <td class="whitespace-nowrap px-6 py-4"><a href="{{route('user-transactions',['userId' => $user['id']])}}"><strong>ver</strong></a></td>
                                </tr>
                            @empty
                                <p>No users</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
