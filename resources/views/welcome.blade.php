<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="col">
            <form action="{{ route('pdfgenerate')}}" method="post">
                @csrf

                <table>
                    <caption>Tabela de <b>Alunos</b></caption>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">FOTO</th>
                            <th scope="col">ANO INGRESSO</th>
                            <th scope="col">NAPNE</th>
                            <th scope="col">CURSO</th>
                            <th scope="col">ACAO</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nome }}</td>
                            <td>{{ $item->foto }}</td>
                            <td>{{ $item->ano_ingresso }}</td>
                            <td>{{ $item->napne }}</td>
                            <td>{{ $item->curso->nome }}</td>


                        </tr>
                        @endforeach
                    </tbody>

                    <input id="gerarGrafico" type="submit" name="renan" value="teste" onclick="generateGraph('{{$item}}')" />

                </table>

            </form>

        </div>
    </div>
    <div class="chart_div" id="chart_div">
    </div>
    
    <script src="{{ asset('js/gerarGrafico.js') }}"></script>

</body>

</html>