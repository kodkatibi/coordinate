<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>AldoGreen</title>

</head>
<body class="container mx-auto px-4 mt-5">
<div class="controll flex mb-4">

    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="flex flex-col gap-4">

                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <button type="button"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Sol
                        </button>
                    </div>
                    <div class="basis-1/4">X</div>
                    <div class="basis-1/2">
                        <button type="button"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Sağ
                        </button>
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <button type="button"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Yukarı
                        </button>
                    </div>
                    <div class="basis-1/4">Y</div>
                    <div class="basis-1/2">
                        <button type="button"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Aşağı
                        </button>
                    </div>

                </div>

                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <button type="button"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            İleri
                        </button>
                    </div>
                    <div class="basis-1/4">Z</div>
                    <div class="basis-1/2">
                        <button type="button"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Geri
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="flex flex-col gap-4">

                <div class="flex flex-row">

                    <div class="basis-1/4">X:</div>

                </div>

                <div class="flex flex-row">
                    <div class="basis-1/4">Y:</div>

                </div>

                <div class="flex flex-row">
                    <div class="basis-1/4">Z:</div>

                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
<script>

</script>
