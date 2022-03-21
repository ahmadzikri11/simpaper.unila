@extends('side-bar')
@section('title', 'Iframe')
@section('content')
    <div class="flex px-12 mt-5">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <!-- component -->
                    <div class="h-auto flex bg-gray-200">

                        <!-- Card -->
                        <div class="bg-white p-8 w-[32rem]">
                            @foreach ($transaction as $transaction)
                            @endforeach
                            <iframe src="/storage/{{ $transaction->file1 }}" frameborder="10" width="600"
                                height="400"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
