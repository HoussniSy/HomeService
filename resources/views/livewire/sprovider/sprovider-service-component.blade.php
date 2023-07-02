<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Service</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class="col-md-12 profile1">
                                <div class="panle panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                All Services
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}
                                            </div>
                                        @endif
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom Client</th>
                                                    <th>Email</th>
                                                    <th>Route</th>
                                                    <th>Télephone</th>
                                                    <th>Payer par</th>
                                                    <th>Code Postal</th>
                                                    <th>Travail demander</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($locations as $location)
                                                    <tr>
                                                        <td>{{$location->id}}</td>
                                                        <td>{{$location->nom_client}}</td>
                                                        <td>{{$location->email}}</td>
                                                        <td>{{$location->route}}</td>
                                                        <td>{{$location->telephone}}</td>
                                                        <td>{{$location->prix}}</td>
                                                        <td>{{$location->zipcode}}</td>
                                                        <td>{{$location->travail}}</td>
                                                        <td>{{$location->created_at}}</td>
                                                        <td><a href="{{route('sprovider.commande')}}" class="btn btn-info">Dépanner</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody> 
                                        </table>
                                        {{$locations->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
