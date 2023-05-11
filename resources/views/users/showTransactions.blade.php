<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>show</title>

</head>

<body class="antialiased">
    @isset ($transactions[0]['userId'])
       <h1>Transactions by user {{$transactions[0]['userId']}}</h1> 
    @else
        <h1>Transactions</h1>
    @endisset
    

    <table class="min-w-full text-left text-sm font-light">
        <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">OrderId</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($transactions as $transaction)
                <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $transaction['userId'] }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $transaction['order'] }}</td>
                </tr>
            @empty
                <p>No Transactions</p>
            @endforelse
        </tbody>
    </table>
    <a href="{{route('users')}}">Regresar a users</a>
</body>

</html>
