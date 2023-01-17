@extends('templates.main')

@section('content')
    
<body>
    <Br>
        <section class="bloco">
        <div id="parceiros-table">
            <table  id="parceiros" class="cell-border" cellpadding="5" cellspacing="1">
                <thead>
                    <tr>
                        <td>Cemitérios</td>
                        <td>Localização</td>
                        <td>Concessionária</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Cemitério São Joao Batista</td>
                        <td>R. Gen. Polidoro, 245 - Botafogo, Rio de Janeiro - RJ, 22281-033</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Inhaúma</td>
                        <td>Av. Pastor Martin Luther King Júnior, 1335 - Inhauma, Rio de Janeiro - RJ, 20765-630</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério do Pechincha</td>
                        <td>R. Retiro dos Artistas, 307 - Pechincha, Rio de Janeiro - RJ, 22770-105</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Irajá</td>
                        <td>Praça Nossa Sra. da Apresentação, 198 - Irajá, Rio de Janeiro - RJ, 21231-220</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Campo Grande</td>
                        <td>Av. Cesário de Melo, 4351 - Campo Grande, Rio de Janeiro - RJ, 23055-002</td>
                        <td>Riopax</td>
                    </tr>

                    <tr>
                        <td>Cemitério São Franscisco Xavier</td>
                        <td>R. Monsenhor Manuel Gomes, 311 - Caju, Rio de Janeiro - RJ, 20931-670</td>
                        <td>Reviver</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Ricardo de Albuquerque</td>
                        <td>Estr. Mal. Alencastro, 1743 - Ricardo de Albuquerque, Rio de Janeiro - RJ, 21625-000</td>
                        <td>Reviver</td>
                    </tr>

                    <tr>
                        <td>Cemitério do Cacuia</td>
                        <td>Estr. da Cacuia, 460 - Cacuia, Rio de Janeiro - RJ, 21921-000</td>
                        <td>Reviver</td>
                    </tr>

                    <tr>
                        <td>Cemitério de Santa Cruz</td>
                        <td>R. da Verdade, s/n - Santa Cruz, Rio de Janeiro - RJ, 23555-135</td>
                        <td>Reviver</td>
                    </tr>
                </tbody>
                </table>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
       
        <script> 
        
            $(document).ready( function () {
            $('#parceiros').DataTable(
                {
                    ordering: true
                }
            );
            } );
            </script>

    



        <br><br>
        <a href="index.php" id="link"><h2>Voltar para o Inicio</h2></a>
        </section>
    
@endsection

