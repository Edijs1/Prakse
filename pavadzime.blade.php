@extends('layout')
@section('title', 'PIKC RVT - Kabineti')



@section('content')



    <h1>Pavadzīmes</h1>
    <br>
    <br>
    <p>Pamatlīdzekļa inventāra numurs</p>
    <input type="text" id="nr" placeholder=""/>
    <p>Pamatlīdzekļa, inventāra nosaukums saskaņā ar grāmatvedības uzskaites datiem</p>
    <input type="text" id="item" placeholder=""/><br>
    <p>Mērvienība</p>
    <input type="text" id="mervieniba" placeholder=""/>
    <p>Daudzums</p>
    <input type="text" id="daudzums" placeholder=""/>
    <p>Adrese, no kuras izsniedz preces</p>
    <input type="text" id="adrese" placeholder=""/>
    <p>Kabineta numurs</p>
    <input type="text" id="kab_nr" placeholder=""/>
    <p>Adrese, uz kurieni pārvieto preces</p>
    <input type="text" id="adrese2" placeholder=""/>
    <p>Kabineta numurs</p>
    <input type="text" id="kab_nr" placeholder=""/>

    <button id="pievinot" class="btn btn-success">Pievienot</button>



    <br>

    <div class="c">
    <p><font size="3"><strong>APSTIPRINU <br></strong>
        PIKC Rīgas Valsts thenikums <br>
        direktore______________________D.Vanaga <br>
        Rīgā 2020.gada _____________________</font></p> </div>


    <p><font size="3"><strong>PIKC "Rīgas Valsts tehnikums"</strong><br>
        Reģistrācijas Nr.90000281996</font></p>

    <div class="a">
    <h5><p><font size="3"><strong>IEKŠĒJĀS KUSTĪBAS PAVADZĪME Nr._____________</strong></font> <br>
    <font size="1.5">&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; (aizpilda grāmatvedis)</font></p></h5>
    <h5><font size="3"><strong>PAMATLĪDZEKĻU UN INVENTĀRA PĀRVIETOŠANAI</strong></font></h5></div>

    <div>
        <br>
        <br>
        <table class="tabula1">
            <tr>

                <th class="hide_all"></th>
                <th style="text-align: center; vertical-align: middle;">Darbinieka vārds, uzvārds</th>
                </tr>

                <tr>
                    <th style="text-align: center; vertical-align: middle;">Izsniedza:</th>
                    <th style="text-align: center; vertical-align: middle;">
                        <label for="darbinieki"></label>
                        <select darbinieki="" id="darbinieki">

                            while ($row = $sql->fetch_assoc()){
                            echo "<option value="vards">vārds, uzvārds</option>";
                            }
                        </select>
                    </th>
                    <th>darbinieks, kuram uzskaitē ir šīs preces</th></tr>

                    <tr><th style="text-align: center; vertical-align: middle;">Saņēma tālākai nodošanai:</th>
                    <th style="text-align: center; vertical-align: middle;">
                        <label for="darbinieki"></label>
                        <select darbinieki="" id="darbinieki">

                            while ($row = $sql->fetch_assoc()){
                            echo "<option value="vards">vārds, uzvārds</option>";
                            }
                        </select></th>
                    <th>Darbinieks, kurš paņem šīs preces, lai nodotu tālāk atbildīgajam darbiniekam</th></tr>

                    <tr><th style="text-align: center; vertical-align: middle;">Nodots lietošanā:</th>
                    <th style="text-align: center; vertical-align: middle;">
                        <label for="darbinieki"></label>
                        <select darbinieki="" id="darbinieki">

                            while ($row = $sql->fetch_assoc()){
                            echo "<option value="vards">vārds, uzvārds</option>";
                            }
                        </select></th>
                    <th>darbinieks, kuram būs uzskaitē šīs preces</th></tr>

        </table>

        <br>
        <table class="tabula2" style="width:100%">
            <tr>
                <th style="width:6%">Pamatlīdzekļa inventāra numurs</th>
                <th style="width:18%">Pamatlīdzekļa, inventāra nosaukums saskaņā ar grāmatvedības uzskaites datiem</th>
                <th style="width:4%">Mērvienība</th>
                <th style="width:4%">Daudzums</th>
                <th style="width:6%">Adrese, no kuras izsniedz preces</th>
                <th style="width:3%">Kabineta numurs</th>
                <th style="width:6%">Adrese, uz kurieni pārvieto preces</th>
                <th style="width:4%">Kabineta numurs</th>
                <th style="width:5%">Summa EUR ar PVN (aizpilda gramatvedis)</th>
            </tr>
        </table>
    </div>

    <br>
    <p><font size="3">Izsniedza:_________________________ &emsp; &emsp; &emsp; &emsp; Saņēma tālākai nodošanai:____________________ &emsp; &emsp; &emsp; &emsp; &emsp; Nodots lietošanā:_____________________<br>
            20____.gada ___________________ &emsp; &emsp; &emsp; &emsp; &emsp; 20____.gada ________________________________ &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 20____.gada _________________________</font></p>

    <br>
    <h5>Iekšējās kustības pavadzīmi aizpilda <strong>4(četros)</strong> eksemlāros <br>viens - izsniedzējam (bez direktores paraksta)<br>
    otrs - saņēmējam (bez direktores paraksta)<br>
    trešais - grāmatvedībai (ar direktores parakstu)<br>
    ceturtais - administratīvi saimnieciskajam sektoram (ar direktores parakstu)</h5>
    <br>
    <br>
    <style>
        h5 {

            font-size: 1.25em;
            margin: 0; /* removes any default margin placed on the h1 element */
        }
        h5 + p { /* selects only those p elements immediately following a h1 */
            margin: 1.5em 0 0 0; /* short hand for margin-top margin-right margin-bottom margin-left */
        }

        div.c {
            text-align: right;
        }
        div.a {
            text-align: center;
        }
        table.tabula1 {
            table-layout: fixed;
            width: 100%;
        }
        th,td {
            border: 1px solid black;
        }
        tr.noBorder td {
            border: 0;
        }
        tr.hide_all > th, th.hide_all{
            border-left-style:hidden;
            border-top-style:hidden;
        }

    </style>
@stop

@section('asideRight')
@stop

@section('modal')

@stop
