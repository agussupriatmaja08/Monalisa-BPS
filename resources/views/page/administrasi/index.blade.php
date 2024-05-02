<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <!-- ========== HEADER ========== -->
  @include('page.administrasi.partials.header')
  <!-- ========== END HEADER ========== -->

  <!-- ========== Side Bar ========== -->
  @include('page.administrasi.partials.sidebar')
  <!-- ========== End Side Bar ========== -->
  
  
  
  <!-- ========== MAIN CONTENT ========== -->
   <!-- Content -->
<div class="w-full  lg:ps-64">
    <div class="p-4 sm:p-6 space-y-4 sm:space-y- mb-10">
        <!-- Breadcrumb -->
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        Umum
                    </a>
                    <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="#">
                    Periode 1
                    </a>
                </li>

            </ol>
        </nav>

        <!-- Card -->
        <!-- Input Periode -->
        <div class="iflex justify-between items-center w-full">
            <!-- Container for Button and Progress Indicators -->
            <div class="flex justify-between items-center w-full">
                <!-- Button -->
                <button
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-overlay="#hs-slide-down-animation-modal-periode">
                    Buat Periode
                </button>

                <!-- Progress Indicators Container -->
                <div class="flex items-center space-x-4">
                    <!-- Fraction Indicator -->
                    <div class="flex items-center bg-blue-100 rounded-full p-1">
                        <div class="py-1.5 px-1.5 bg-blue-500 text-white rounded-full text-sm mr-1">
                            75/150
                        </div>
                        <span class="text-gray-800 dark:text-gray-400 text-sm mr-2">Uploaded</span>
                    </div>


                    <!-- Percentage Indicator -->
                    <div class="flex items-center bg-blue-100 rounded-full p-1">
                        <div class="py-1.5 px-1.5 bg-blue-500 text-white rounded-full text-sm mr-1">
                            50%
                        </div>
                        <span class="text-gray-800 dark:text-gray-400 text-sm mr-2">Progress</span>
                    </div>
                </div>

            </div>


        </div>


        <div id="hs-slide-down-animation-modal-periode"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div
                    class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Membuat Periode Kegiatan
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                            data-hs-overlay="#hs-slide-down-animation-modal-periode">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col space-y-4 p-4 overflow-y-auto">
                        <!-- Nama Periode -->
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Nama Periode</label>
                            <input type="input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>

                        <!-- Tanggal Mulai -->
                        <div>
                            <label for="start-date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                Mulai</label>
                            <input type="date" id="start-date" name="start-date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>

                        <!-- Tanggal Selesai -->
                        <div>
                            <label for="end-date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                Selesai</label>
                            <input type="date" id="end-date" name="end-date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                required>
                        </div>
                    </div>

                    <div class="flex items-center justify-center h-full p-4 overflow-y-auto">
                        <p class="text-gray-800 dark:text-gray-400 text-center">
                            Apakah anda sudah yakin dengan periode kegiatan yang akan dibuat?
                        </p>
                    </div>

                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 bg-red-600 text-white shadow-sm hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                            data-hs-overlay="#hs-slide-down-animation-modal">
                            Batal
                        </button>
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-slide-down-animation-modal">
                            Selesai
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Tahunan -->

        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Periode Tahunan
                                </h2>
                                <p class="text-xs text-gray-600 dark:text-neutral-400">
                                    12/12/2023 - 12/12/2024
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  border-blue-200 bg-slate-50 text-blue-500 hover:bg-slate-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                        href="#">
                                        64/100
                                    </a>
                                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border  border-blue-200 bg-slate-50 text-blue-500 hover:bg-slate-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                        href="#">
                                        64%
                                    </a>
                                    <button type="button"
                                        class="py-2 px-2 pr-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-xl border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-overlay="#hs-sign-out-alert">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Import
                                    </button>

                                    <div id="hs-sign-out-alert"
                                        class="hs-overlay hidden size-full fixed inset-0 z-[80] overflow-x-hidden overflow-y-auto bg-gray-900 bg-opacity-50">
                                        <div class="flex items-center justify-center min-h-screen">
                                            <div
                                                class="hs-overlay-open:animate-scaleUp hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition transform-gpu scale-95 sm:max-w-lg sm:w-full mx-4">
                                                <div
                                                    class="relative bg-white shadow-xl rounded-2xl dark:bg-blue-800">
                                                    <div
                                                        class="flex justify-between items-center p-5 rounded-t-2xl border-b dark:border-gray-600">
                                                        <h3 class="text-xl font-bold text-gray-800 dark:text-white">
                                                            Import Excel
                                                        </h3>
                                                        <button type="button"
                                                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                                                            data-hs-overlay="#hs-sign-out-alert">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="flex-shrink-0 size-5"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M18 6 6 18"></path>
                                                                <path d="m6 6 12 12"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="p-6 text-center">

                                                        <form class="flex justify-center items-center mt-4">
                                                            <label class="block w-full">
                                                                <span class="sr-only">Choose file</span>
                                                                <div
                                                                    class="flex flex-col items-center justify-center w-full">
                                                                    <div
                                                                        class="border-2 border-dashed border-gray-300 rounded-lg text-sm leading-normal text-gray-500 bg-white py-10 px-4 w-full flex flex-col justify-center items-center">
                                                                        <svg class="w-8 h-8  mb-3 text-gray-500"
                                                                            fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2" d="M12 4v16m8-8H4">
                                                                            </path>
                                                                        </svg>
                                                                        <span class="mb-2">Drag and drop your
                                                                            file here or click to upload</span>
                                                                        <input type="file" class="hidden" />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </form>

                                                        <div class="mt-6 flex justify-center gap-x-4">
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium rounded-md border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                                Batal
                                                            </button>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                                Import
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="py-2 px-2 pr-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-overlay="#hs-slide-down-animation-modal-folder">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Buat Folder
                                    </button>

                                    <div id="hs-slide-down-animation-modal-folder"
                                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div
                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            <div
                                                class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                <div
                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                    <h3 class="font-bold text-gray-800 dark:text-white">
                                                        Masukkan Nama & Periode
                                                        Kegiatan
                                                    </h3>
                                                    <button type="button"
                                                        class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700"
                                                        data-hs-overlay="#hs-slide-down-animation-modal-folder">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="flex-shrink-0 size-5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18">
                                                            </path>
                                                            <path d="m6 6 12 12">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="flex flex-col space-y-4 p-4 overflow-y-auto">
                                                    <!-- Nama Kegiatan -->
                                                    <div>
                                                        <label
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                            Nama Kegiatan
                                                        </label>
                                                        <input type="input"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>

                                                    <!-- Tanggal Mulai -->
                                                    <div>
                                                        <label for="start-date"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                                            Mulai</label>
                                                        <input type="date" id="start-date" name="start-date"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>

                                                    <!-- Tanggal Selesai -->
                                                    <div>
                                                        <label for="end-date"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                                                            Selesai</label>
                                                        <input type="date" id="end-date" name="end-date"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex items-center justify-center h-full p-4 overflow-y-auto">
                                                    <p class="text-gray-800 dark:text-gray-400 text-center">
                                                        Apakah anda sudah yakin dengan kegiatan yang akan dibuat?
                                                    </p>
                                                </div>

                                                <div
                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                    <button type="button"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 bg-red-600 text-white shadow-sm hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800"
                                                        data-hs-overlay="#hs-slide-down-animation-modal">
                                                        Batal
                                                    </button>
                                                    <button type="button"
                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                        data-hs-overlay="#hs-slide-down-animation-modal">
                                                        Selesai
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">


                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3 ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                </path>
                                                <path
                                                    d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap" onclick="window.location='adm2';">
                                        <div class="px-3 py-3 text-start">
                                            <div class="flex items-center gap-x-3">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                    ST 23
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span
                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                100%
                                            </span>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                12/12/2024 - 12/12/2024</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-1.5">
                                            <button
                                                class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                    </path>
                                                </svg>
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3 ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                </path>
                                                <path
                                                    d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-3 text-start">
                                            <div class="flex items-center gap-x-3">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                    Lorem Ipsum
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span
                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                100%
                                            </span>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                12/12/2024 - 12/12/2024</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-1.5">
                                            <button
                                                class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3 ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                </path>
                                                <path
                                                    d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-3 text-start">
                                            <div class="flex items-center gap-x-3">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                    Lorem Ipsum
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span
                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                70%
                                            </span>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                12/12/2024 - 12/12/2024</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-1.5">
                                            <button
                                                class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3 ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                </path>
                                                <path
                                                    d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-3 text-start">
                                            <div class="flex items-center gap-x-3">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                    Lorem Ipsum
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span
                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                30%
                                            </span>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                12/12/2024 - 12/12/2024</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-1.5">
                                            <button
                                                class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="size-px whitespace-nowrap">
                                        <div class="ps-6 py-3 ml-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="M13 9h-2v3H8v2h3v3h2v-3h3v-2h-3z">
                                                </path>
                                                <path
                                                    d="M20 5h-8.586L9.707 3.293A.996.996 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 19V7h16l.002 12H4z">
                                                </path>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-3 text-start">
                                            <div class="flex items-center gap-x-3">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200 ml-3 mr-32">
                                                    Lorem Ipsum
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span
                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                20%
                                            </span>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3 mr-10">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                12/12/2024 - 12/12/2024</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-3 py-1.5">
                                            <button
                                                class="bg-red-600 hover:bg-red-700 text-white p-1 rounded focus:outline-none focus:shadow-outline">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                                    </path>
                                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

    </div>
</div>
<!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
</body>
</html>