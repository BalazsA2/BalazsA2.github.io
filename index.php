<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <script>        
        $(document).ready(function(){
            //span elem átírása
            $('#lab_a1').text('bela');
            //db-ből jöjjön a label
            //db-ből jöjjönek a csapatnevek az optionokba
        })
    </script>
</head>

<body>    
    <?php
    /*phpinfo();*/
    ?>
    <nav class="navbar navbar-light bg-light navbar-fixed-top">
        <button class="btn btn-info navbar-btn">Tippszelvény</button>
        <button class="btn btn-danger navbar-btn">Visszatekintő</button>
        <button class="btn btn-success navbar-btn">Ponttáblázat</button>
        <button class="btn btn-outline-success">Segítség</button>
    </nav>
    <div class="container-fluid" id="tippsz">
        <table class="table">
            <tr>
                <td class="group_title one">"A"</td>
                <td class="teams one"><span id='lab_a1' class="label label-default">Törökország<span></td>
                <td class="points one"><span class="label label-default rankno">1.</span></td>
                <td class="auto-style1 one">
                    <select class="form-control seli" id="sel_a1">
                        <option>Válassz...</option>
                        <option value="1">Törökország</option>
                        <option value="2">Olaszország</option>
                        <option value="3">Wales</option>
                        <option value="4">Svájc</option>
                    </select>
                </td>
                <td class="points one"></td>
                <td class="points one"><span class="label label-default">3</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">B1</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"><span class="label label-default">NÉV:</span></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title one">csoport</td>
                <td class="teams one"><span id='lab_a2' class="label label-default"><span></td>
                <td class="points one"><span class="label label-default rankno">2.</span></td>
                <td class="auto-style1 one">
                    <select class="form-control seli" id="sel_a2">
                        <option>Válassz...</option>
                        <option value="1">Törökország</option>
                        <option value="2">Olaszország</option>
                        <option value="3">Wales</option>
                        <option value="4">Svájc</option>
                    </select>
                </td>
                <td class="points one"></td>
                <td class="points one"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">ADEF3</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows top">
                     <img alt="" src="img/2-2-arrow-png-pic.png" style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows" rowspan="4">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(60deg)" />
                </td>

                <td class="auto-style1">
                </td>
                <td class="points"><span class="label label-default"></span></td>
                <td class="arrows"></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_nev">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>

            </tr>
            <tr>
                <td class="group_title one"></td>
                <td class="teams one">Wales</td>
                <td class="points one"><span class="label label-default rankno">3.</span></td>
                <td class="auto-style1 one">
                    <select class="form-control seli" id="sel_a3">
                        <option>Válassz...</option>
                        <option value="1">Törökország</option>
                        <option value="2">Olaszország</option>
                        <option value="3">Wales</option>
                        <option value="4">Svájc</option>
                    </select>
                </td>
                <td class="points one"><input type="checkbox" class="form-check-input" value=""></td>
                <td class="points one"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1"><span class="label label-default">Elődöntők</span></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title one line"></td>
                <td class="teams one line">Svájc</td>
                <td class="points one line"><span class="label label-default rankno">4.</span></td>
                <td class="auto-style1 one line">
                    <select class="form-control seli" id="sel_a4">
                        <option>Válassz...</option>
                        <option value="1">Törökország</option>
                        <option value="2">Olaszország</option>
                        <option value="3">Wales</option>
                        <option value="4">Svájc</option>
                    </select>
                </td>
                <td class="points one line"></td>
                <td class="points one line"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">A1</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows bottom">
                     <img alt="" src="img/2-2-arrow-png-pic.png" style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title">"B"</td>
                <td class="teams">Dánia</td>
                <td class="points"><span class="label label-default rankno">1.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_b1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">C2</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_ed1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">4</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title">csoport</td>
                <td class="teams">Finnország</td>
                <td class="points"><span class="label label-default rankno">2.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_b2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title">&nbsp;</td>
                <td class="teams">Belgium</td>
                <td class="points"><span class="label label-default rankno">3.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_b3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"><input type="checkbox" class="form-check-input" value=""></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">F1</span></td>
                <td class="Runners">
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows" rowspan="4">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(-60deg)" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_ed2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">4</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title line">&nbsp;</td>
                <td class="teams line">Oroszország</td>
                <td class="points line"><span class="label label-default rankno">4.</span></td>
                <td class="auto-style1 line">
                    <select class="form-control seli" id="sel_b4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points line"></td>
                <td class="points line"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">ABC3</span></td>
                <td class="Runners">
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows top">
                     <img alt="" src="img/2-2-arrow-png-pic.png" style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">3</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows">
                </td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
            </tr>
            <tr>
                <td class="group_title one"><span class="label label-default">"C"</span></td>
                <td class="teams one">Hollandia</td>
                <td class="points one"><span class="label label-default rankno">1.</span></td>
                <td class="auto-style1 one">
                    <select class="form-control seli" id="sel_c1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points one"></td>
                <td class="points one"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat">&nbsp;</td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="arrows">&nbsp;</td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows" rowspan="4">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(45deg)" /></td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="arrows">&nbsp;</td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
            </tr>
            <tr>
                <td class="group_title one"><span class="label label-default">csoport</span></td>
                <td class="teams one">Ukrajna</td>
                <td class="points one"><span class="label label-default rankno">2.</span></td>
                <td class="auto-style1 one">
                    <select class="form-control seli" id="sel_c2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points one"></td>
                <td class="points one"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">D2</span></td>
                <td class="Runners">
                <td class="points"><span class="label label-default">3</span></td>
                <td class="arrows bottom">
                     <img alt="" src="img/2-2-arrow-png-pic.png" style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">0</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1"><span class="label label-default">Döntő</span></td>
                <td class="points"></td>
                <td class="arrows">&nbsp;</td>
                <td class="auto-style1"><span class="label label-default">Győztes</span></td>
                <td class="points">&nbsp;</td>
            </tr>
            <tr>
                <td class="group_title one"></td>
                <td class="teams one">Ausztria</td>
                <td class="points one"><span class="label label-default rankno">3.</span></td>
                <td class="auto-style1 one">
                    <select class="form-control seli" id="sel_c3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points one"><input type="checkbox" class="form-check-input" value=""></td>
                <td class="points one"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">E2</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points">&nbsp;</td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points">&nbsp;</td>
                <td class="auto-style1"></td>
                <td class="points">&nbsp;</td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points">&nbsp;</td>
            </tr>
            <tr>
                <td class="group_title one line"></td>
                <td class="teams one line">Koszovó</td>
                <td class="points one line"><span class="label label-default rankno">4.</span></td>
                <td class="auto-style1 one line">
                    <select class="form-control seli" id="sel_c4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points one line"></td>
                <td class="points one line"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="arrows"></td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_do1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">5</span></td>
                <td class="arrows" rowspan="2" style="vertical-align: middle;">
                     <img alt="" src="img/2-2-arrow-png-pic.png" style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_gy">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">6</span></td>
            </tr>
            <tr>
                <td class="group_title"><span class="label label-default">"D"</span></td>
                <td class="teams">Anglia</td>
                <td class="points"><span class="label label-default rankno">1.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_d1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points">&nbsp;</td>
                <td class="arrows" rowspan="4">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(-60deg)" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_do2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">5</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"><span class="label label-default">csoport</span></td>
                <td class="teams">Horvátország</td>
                <td class="points"><span class="label label-default rankno">2.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_d2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">E1</span></td>
                <td class="Runners">Spanyolország</td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="arrows"></td>
                <td class="auto-style1">&nbsp;</td>
                <td class="points">&nbsp;</td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"></td>
                <td class="teams">Norvégia</td>
                <td class="points"><span class="label label-default rankno">3.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_d3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"><input type="checkbox" class="form-check-input" value=""></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">ABCD3</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows top">  <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n5">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">3</span></td>
                <td class="arrows" rowspan="4">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(60deg)" />
                </td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title line"></td>
                <td class="teams line">Csehország</td>
                <td class="points line"><span class="label label-default rankno">4.</span></td>
                <td class="auto-style1 line">
                    <select class="form-control seli" id="sel_d4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points line"></td>
                <td class="points line"><span class="label label-default">2</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"><span class="label label-default">"E"</span></td>
                <td class="teams">Spanyolország</td>
                <td class="points"><span class="label label-default rankno">1.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_e1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">D1</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows bottom">  <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px;" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n6">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">3</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"><span class="label label-default">csoport</span></td>
                <td class="teams">Svédország</td>
                <td class="points"><span class="label label-default rankno">2.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_e2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">F2</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_ed3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">4</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"></td>
                <td class="teams">Lengyelország</td>
                <td class="points"><span class="label label-default rankno">3.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_e3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"><input type="checkbox" class="form-check-input" value=""></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title line"></td>
                <td class="teams line">Bosznia</td>
                <td class="points line"><span class="label label-default rankno">4.</span></td>
                <td class="auto-style1 line">
                    <select class="form-control seli" id="sel_e4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points line"></td>
                <td class="points line"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">C1</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows" rowspan="4">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(-60deg)" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_ed4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">4</span></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"><span class="label label-default">"F"</span></td>
                <td class="teams">Magyarország</td>
                <td class="points"><span class="label label-default rankno">1.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_f1">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">DEF3</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows top">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(0deg)" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n7">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">3</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"><span class="label label-default">csoport</span></td>
                <td class="teams">Portugália</td>
                <td class="points"><span class="label label-default rankno">2.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_f2">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"></td>
                <td class="teams">Franciaország</td>
                <td class="points"><span class="label label-default rankno">3.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_f3">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"><input type="checkbox" class="form-check-input" value=""></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">A2</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows bottom">
                     <img alt="" src="img/2-2-arrow-png-pic.png"
                        style="display:block; width:100%; height:20px; transform:rotate(0deg)" />
                </td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_n8">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                    </select>
                </td>
                <td class="points"><span class="label label-default">3</span></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
            <tr>
                <td class="group_title"></td>
                <td class="teams">Németország</td>
                <td class="points"><span class="label label-default rankno">4.</span></td>
                <td class="auto-style1">
                    <select class="form-control seli" id="sel_f4">
                        <option>Válassz...</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                    </select>
                </td>
                <td class="points"></td>
                <td class="points"><span class="label label-default">1</span></td>
                <td class="nyolcadfelirat"><span class="label label-default label-nyolcad">B2</span></td>
                <td class="Runners"></td>
                <td class="points"><span class="label label-default">2</span></td>
                <td class="arrows bottom"></td>
                <td class="auto-style1">
                </td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
                <td class="arrows"></td>
                <td class="auto-style1"></td>
                <td class="points"></td>
            </tr>
        </table>
    </div>
</body>
</html>