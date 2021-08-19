<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Transaction &raquo; #{{ $transaction->id }} {{ $transaction->name }}
        </h2>
    </x-slot>

    
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                Transaction Details
            </h2>

            <div class="bg-white overflow-hidden shadow sm:rounded-lg mb-10">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <th class="border px-6 py-4 text-right">Name</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->name }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Email</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->email }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Address</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->address }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Phone</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->phone }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Courier</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->courier }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Payment</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->payment }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Payment URL</th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->payment_url }}</td>
                            </tr>

                            <tr>
                                <th class="border px-6 py-4 text-right">Total Price</th>
                                <td class="border px-6 py-4 text-right">{{ number_format($transaction->total_price) }}</td>
                            </tr>   

                            <tr>
                                <th class="border px-6 py-4 text-right">Status </th>
                                <td class="border px-6 py-4 text-right">{{ $transaction->status }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>
    </div>
</x-app-layout>
