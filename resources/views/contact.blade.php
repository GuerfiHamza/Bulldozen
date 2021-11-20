@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container mx-auto mt-20">
    <h2 class="font-2xl">Nous contacter</h2>
    <form action="#" method="post">
        <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <div class="mb-6">
                    <label class="block mb-4 font-bold font-heading text-gray-600" for="">Nom Prénom</label>
                    <input class="block w-full py-4 px-4 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" type="text" name="field-name" placeholder="Write a text"></div>

                <div class="mb-6">
                    <label class="block mb-4 font-bold font-heading text-gray-600" for="">Label for text</label>
                    <input class="block w-full py-4 px-4 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" type="text" name="field-name" placeholder="Write a text">
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                <div class="mb-6">
                    <label class="block mb-4 font-bold font-heading text-gray-600" for="">Email</label>
                    <input class="block w-full py-4 px-4 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" type="text" name="field-name" placeholder="Write a text"></div>

                <div class="mb-6">
                    <label class="block mb-4 font-bold font-heading text-gray-600" for="">Label for text</label>
                    <input class="block w-full py-4 px-4 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" type="text" name="field-name" placeholder="Write a text">
                </div>
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-4 font-bold font-heading text-gray-600" for="">Label for textarea</label>
            <textarea class="block w-full py-4 px-4 border border-gray-200 focus:ring-blue-300 focus:border-blue-300 rounded-md" name="field-name" rows="5" placeholder="Write something..."></textarea>
        </div>
        <button class="inline-block bg-yellow-300 hover:bg-yellow-400 text-white font-bold font-heading py-6 px-8 rounded-md uppercase" type="submit">Submit</button>

    </form>
</div>


@stop
