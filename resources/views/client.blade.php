<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>AldoGreen</title>

</head>
<body class="container mx-auto px-4 mt-5">
<div class="header">{{$device->name}}</div>
<div class="controll flex mb-4">
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="px-6 py-4">
            <div class="flex flex-col gap-4">

                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <button type="button" onclick="move('x','-')"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Sol
                        </button>
                    </div>
                    <div class="basis-1/4">X</div>
                    <div class="basis-1/2">
                        <button type="button" onclick="move('x','+')"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Sağ
                        </button>
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <button type="button" onclick="move('y','-')"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Aşağı
                        </button>
                    </div>
                    <div class="basis-1/4">Y</div>
                    <div class="basis-1/2">
                        <button type="button" onclick="move('y','+')"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Yukarı
                        </button>
                    </div>

                </div>

                <div class="flex flex-row">
                    <div class="basis-1/2">
                        <button type="button" onclick="move('z','-')"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Geri
                        </button>
                    </div>
                    <div class="basis-1/4">Z</div>
                    <div class="basis-1/2">
                        <button type="button" onclick="move('z','+')"
                                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            İleri
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
                    X:
                    <div id="x-position"> {{$device->latestCoordinate->x_position}}</div>
                </div>

                <div class="flex flex-row">
                    Y:
                    <div id="y-position"> {{$device->latestCoordinate->y_position}}</div>
                </div>

                <div class="flex flex-row">
                    Z:
                    <div id="z-position"> {{$device->latestCoordinate->z_position}}</div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

<script>
    function move(direction, value) {
        let url;
        switch (direction) {
            case 'x' :
                url = '{{route('move.x')}}';
                break;
            case 'y':
                url = '{{route('move.y')}}';
                break;
            case 'z':
                url = '{{route('move.z')}}';
                break;
        }
        let data = {
            'device_id': {{$device->id}},
            'value': value,
        }
        send(url, data);

    }

    function send(url, data) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (res) {
                $('#x-position').html(res.data.x_position);
                $('#y-position').html(res.data.y_position);
                $('#z-position').html(res.data.z_position);

            },
            error: function (xhr, status, error) {
                console.error(error)
            }
        })
    }
</script>
