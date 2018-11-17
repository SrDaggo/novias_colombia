@extends('layouts.app')

@section('content')
    <section class="section content fondo">
        <div class="container">
            <div style="height: 300px; background-color: gray">Mapa</div>
            <div class="columns is-multiline">
                <div class="column is-6" style="padding-bottom: 0"><img class="" src="{{ asset('/images/makro.jpg') }}" style="max-height: 128px;"></div>
                <div class="column is-5 is-hidden-desktop">
                    <ul class="has-text-brown is-size-4 " style="list-style:none; margin-top: 0; line-height: 30px">
                        <li>Bogotá</li>
                        <li>Cundinamarca</li>
                        <li>Tolima</li>
                        <li>Valle del Cauca</li>
                        <li>Eje Cafetero</li>
                        <li>Meta</li>
                    </ul>
                </div>

                <div class="column is-6" style="padding-bottom: 0"><img class="" src="{{ asset('/images/colsubsidio.jpg') }}" style="max-height: 128px"></div>
                <div class="column is-5">
                    <ul class="has-text-brown is-size-4 " style="list-style:none; margin-top: 0; line-height: 30px">
                        <li>Bogotá</li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Cr 63 # 57 G 47 Sur <br>Autopista norte calle 192 # 19-13
                            <br>Carrera 72 # 83-13 <br>AV De las Americas - Cra 65</p>

                        <li>Barranquilla</li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Carrera 51B- con Av. Circunvalar <br>Cl 30 Cra 30 Av Aereopuerto</p>
                        <li>Ibagué</li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Calle 83 # 4-72 sur</p>
                        <li>Cartagena</li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Cr 59 B # 30D 21 Sector de los ejecutivos</p>
                        <li>Villavicencio</li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Carrera 22 # 7-37 vía puerto Lopez</p>
                        <li>Santa Marta</li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Carrera 15 av. Ferrocarril # 29-364</p>
                        <li>Cúcuta </li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Carrera 15 av. Ferrocarril # 29-364</p>
                        <li>Montería </li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Av. Circunvalar cra 14# 48A-48</p>
                        <li>Tunja </li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Cr 1 Este # 35-105</p>
                        <li>Cajica </li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Vereda Canelón, lote San Javier. Kilómetro 1.1 vía Cajicá - Chía.</p>
                        <li>Floridablanca </li>
                        <p style="line-height: 15px" class="is-size-6 is-hidden-mobile">Anillo Vial Km 2 vía Floridablanca</p>

                    </ul>
                </div>
                <div class="column is-7 is-hidden-mobile">
                    <ul class="has-text-brown is-size-3 " style="list-style:none; margin-top: 0;">
                        <li>Bogotá</li>
                        <p style="line-height: 5px" class="is-size-6">Hipermercado Calle 26 - Calle 26 No. 24 -34</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Calle 63 - Calle 63 No 24-45</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Portal Norte - Avenida Carrera 45 #
                            176-31</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Ciudad Roma - Carrera. 80 No. 53-20
                            sur</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Primero de Mayo - Calle 63 No
                            24-45</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Restrepo - Calle 19 sur No. 21-32</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Santa Isabel - Calle 1C No 27-08</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Country - Calle 85 No 11 - 54</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Subazar - Calle 145B No. 91-35 Local
                            152</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Usaquén - Avenida 7 No 123 - 65</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Santa Librada - Transv. 79 No. 42 C -
                            10 Sur</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado El Espectador - Avenida 68 No
                            16-55</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Portal Ciudadela - Av. Calle 80 no.
                            111C-98
                           </p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Quiroga - Carrera. 23C No. 31C – 00 SUR</p>
                        <p style="line-height: 5px" class="is-size-6">Carpa Temporada - Av. Américas No 68a -03</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Tierra Grata - Calle 70 No 101-21</p>
                        <p style="line-height: 5px" class="is-size-6">Hipermercado Unicentro Occidente - Cra. 111C # 86-74 local 101</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Fontibón - Calle 17 No 114 - 12</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Chicalá - Calle 53 No. 85 C -21 Sur</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Boyacá Real - Carrera 73 A No.70-18</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Mazurén - Calle 152 No 53ª – 05</p>
                        <p style="line-height: 5px" class="is-size-6">Bellavista - Autop. Norte Km 18 Costado Occid</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Javeriana - Avenida Cra 7 No 45 - 10 Local 8</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Aventura - Calle 130 No.58-20 local 20</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Modelia - Calle 24 No 74a - 67</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Batán - Carrera 13 No 93-18</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Calle 93 - Transv. 79 No. 42 C - 10 Sur</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Pontevedra - Av.Calle 116 No 71-21</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Cabrera - Calle 90 No 11A - 40</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Ubaté - Calle 6 # 4 – 76</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Suba Tibabuyes - Cra. 136 No. 131B – 05</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Salitre - Calle 26 No 69-63. Local 103</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda cancerológico - Calle. 1 No. 9 -85 Int.Cancerologico</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Calle 95 - Av. Autopista Norte -No. 95 – 08</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Villa Alsacia - Calle 12B No. 71D-31</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Calle 67 - Calle 67 No 10A - 39</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda 20 de Julio - Calle 27 sur No 5 - 60</p>
                        <p style="line-height: 5px" class="is-size-6">Tienda Zona Franca - Cra 106 No 15A-25 Locales 117 y 118</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Ipanema - CALLE 26 Sur. No. 93D-16</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Maipore Soacha - Calle 15 Sur No. 1- 55</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Ciudad Verde Soacha - Transv. 32 # 24-60-Soacha</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Cooptraiss</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado El Porvenir - CALLE 54 F SUR # 93C- 18 LOCAL 1-32</p>
                        <li>Cundinamarca</li>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Funza - Carrera 9 No. 17 A 93</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Fusagasuga - Carrera. 5 No. 7-25</p>
                        <p style="line-height: 5px" class="is-size-6">Peñalisa Girardot - KM. 120 vía Melgar - Girardot</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Cajicá - Carrera 5 No 2A sur - 85</p>
                        <p style="line-height: 5px" class="is-size-6">Bosques de Athan - KM. 126 Via Bogotá Girardot</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado La Mesa - Calle 4 No 22 - 50</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Tocancipa - Cra 6 No 7 - 71</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Chía (Vivenza) - Calle 1a No 11-71 Chía</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Soacha - Cra. 7 #12-54 Local 126-128-130</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Villeta - Cra. 9 No 4 - 67</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Chiquinquirá - CRA 9 No 09 - 24/26/40</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Mesitas del Colegio - CALLE 10 No. 6 – 43</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Zipaquira - Calle 8 # 31-15</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Peñón-Girardot - Carrera 10 # 25-15 - Barrio Sucre</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Zipaquira - Calle 8 # 31-15</p>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Peñón-Girardot - Diagonal 38 No. 5-00</p>
                        <li>Tolima</li>
                        <p style="line-height: 5px" class="is-size-6">Supermercado Espinal - Carrera 4 No. 8-04</p>
                        <li>Valle del Cauca</li>
                        <p style="line-height: 5px" class="is-size-6">Mira Cali - Cra 24b # 2a - 145</p>
                        <p style="line-height: 5px" class="is-size-6">Cartago - Cl. 11 #4-63,</p>
                        <li>Eje Cafetero</li>
                        <p style="line-height: 5px" class="is-size-6">Pereira Plaza - Calle 15 Nº 13-110</p>
                        <p style="line-height: 5px" class="is-size-6">La Hacienda - Carrera 19, 15N - 79</p>
                        <li>Meta</li>
                        <p style="line-height: 5px" class="is-size-6">Unico villao - Cra 38 # 37 - 09</p>
                        <p style="line-height: 5px" class="is-size-6">Restrepo Meta - CENTRO COMERCIAL SUNRISE LOCAL 125</p>
                    </ul>

            </div>
            <div class="columns">

            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .images {
            width: 60%;
            margin: 0 auto;
        }
    </style>
@endsection