<?php
/**
 * Created by PhpStorm.
 * User: Ets Simon
 * Date: 08/04/2016
 * Time: 11:47
 */
?>


<head>
    <meta charset="UTF-8">
    <title>Deadline</title>

</head>
<body style="font-size:10px;
    background: #fff;
    background-size: cover;
line-height: 1.428571429;
color: #333333;
">

<div class="row-fluid">
    <div
            style="position: relative;min-height: 1px;padding-right: 15px;float: left;width: 100%;box-sizing: border-box" >
        <div class="col-lg-10 col-sm-10 col-md-10 col-lg-offset-1 col-sm-offset-1 col-md-offset-1 p"
             style="position: relative;min-height: 1px;float: left;margin-top: 5px;color:#000;font-size: 12px;
             font-weight: normal;border-top:2px solid #997f51;border-bottom:2px solid #997f51;"
        >
            <p>
                <strong>{{$newsletter->title}}</strong>
            </p>
            <p>Date de l'évènement : <strong>{{$newsletter->date}}</strong></p>
            <p>{{$newsletter->description}}</p>

            <p>
                <img src="{{$newsletter->image}}" alt="Image {{$newsletter->title}}">
            </p>
            <p>
                Rendez-vous dans <a href="https://inside.bvssas.com"><strong>BVS Inside</strong></a> pour plus de détails
            </p>

        </div>
        <div class="clearfix" style="clear: both;">
            <br>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-lg-offset-5 col-sm-offset-5 col-md-offset-5"
             style="position: relative;min-height: 1px;padding-right: 15px;float: left;width: 16%;">
            <img src="{{url("img/logo_bvs.png")}}" class="logo" style="width: 100%;vertical-align: middle;border: 0;box-sizing: border-box" alt="logo BVS">
        </div>

    </div>
</div>


</body>