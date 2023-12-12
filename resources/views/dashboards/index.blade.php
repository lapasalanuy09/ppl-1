@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-download"></i></span>
                            <p>
                                <span class="number">1,252</span>
                                <span class="title">Downloads</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <p>
                                <span class="number">203</span>
                                <span class="title">Users</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <p>
                                <span class="number">274,678</span>
                                <span class="title">Message</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bar Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="demo-bar-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300px" class="ct-chart-bar" style="width: 100%; height: 300px;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="237.22222222222223" y2="237.22222222222223" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="209.44444444444446" y2="209.44444444444446" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="181.66666666666669" y2="181.66666666666669" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="153.88888888888889" y2="153.88888888888889" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="126.11111111111111" y2="126.11111111111111" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="98.33333333333334" y2="98.33333333333334" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="70.55555555555554" y2="70.55555555555554" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="42.77777777777777" y2="42.77777777777777" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="669.6666870117188" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="75.81944529215495" x2="75.81944529215495" y1="265" y2="209.44444444444446" class="ct-bar" ct:value="200"></line><line x1="127.45833587646486" x2="127.45833587646486" y1="265" y2="159.44444444444446" class="ct-bar" ct:value="380"></line><line x1="179.09722646077475" x2="179.09722646077475" y1="265" y2="167.77777777777777" class="ct-bar" ct:value="350"></line><line x1="230.73611704508463" x2="230.73611704508463" y1="265" y2="176.11111111111111" class="ct-bar" ct:value="320"></line><line x1="282.3750076293946" x2="282.3750076293946" y1="265" y2="151.11111111111111" class="ct-bar" ct:value="410"></line><line x1="334.01389821370446" x2="334.01389821370446" y1="265" y2="140" class="ct-bar" ct:value="450"></line><line x1="385.65278879801434" x2="385.65278879801434" y1="265" y2="106.66666666666666" class="ct-bar" ct:value="570"></line><line x1="437.2916793823243" x2="437.2916793823243" y1="265" y2="153.88888888888889" class="ct-bar" ct:value="400"></line><line x1="488.93056996663415" x2="488.93056996663415" y1="265" y2="110.83333333333334" class="ct-bar" ct:value="555"></line><line x1="540.569460550944" x2="540.569460550944" y1="265" y2="92.77777777777777" class="ct-bar" ct:value="620"></line><line x1="592.2083511352539" x2="592.2083511352539" y1="265" y2="56.66666666666666" class="ct-bar" ct:value="750"></line><line x1="643.8472417195638" x2="643.8472417195638" y1="265" y2="15" class="ct-bar" ct:value="900"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="51.6388905843099" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="101.6388905843099" y="270" width="51.6388905843099" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="153.2777811686198" y="270" width="51.63889058430989" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="204.9166717529297" y="270" width="51.638890584309905" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="256.5555623372396" y="270" width="51.638890584309905" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">May</span></foreignObject><foreignObject style="overflow: visible;" x="308.1944529215495" y="270" width="51.63889058430988" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jun</span></foreignObject><foreignObject style="overflow: visible;" x="359.8333435058594" y="270" width="51.638890584309934" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jul</span></foreignObject><foreignObject style="overflow: visible;" x="411.4722340901693" y="270" width="51.63889058430988" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Aug</span></foreignObject><foreignObject style="overflow: visible;" x="463.1111246744792" y="270" width="51.63889058430988" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sep</span></foreignObject><foreignObject style="overflow: visible;" x="514.7500152587891" y="270" width="51.638890584309934" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Oct</span></foreignObject><foreignObject style="overflow: visible;" x="566.388905843099" y="270" width="51.638890584309934" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Nov</span></foreignObject><foreignObject style="overflow: visible;" x="618.0277964274089" y="270" width="51.63889058430982" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 52px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Dec</span></foreignObject><foreignObject style="overflow: visible;" y="237.22222222222223" x="10" height="27.77777777777778" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject><foreignObject style="overflow: visible;" y="209.44444444444446" x="10" height="27.77777777777778" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">100</span></foreignObject><foreignObject style="overflow: visible;" y="181.66666666666669" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">200</span></foreignObject><foreignObject style="overflow: visible;" y="153.8888888888889" x="10" height="27.777777777777786" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">300</span></foreignObject><foreignObject style="overflow: visible;" y="126.11111111111111" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">400</span></foreignObject><foreignObject style="overflow: visible;" y="98.33333333333334" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">500</span></foreignObject><foreignObject style="overflow: visible;" y="70.55555555555554" x="10" height="27.7777777777778" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">600</span></foreignObject><foreignObject style="overflow: visible;" y="42.77777777777777" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">700</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" style="height: 28px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">800</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">900</span></foreignObject></g></svg></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@stop

