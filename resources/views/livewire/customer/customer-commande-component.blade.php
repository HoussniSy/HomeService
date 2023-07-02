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
                <h1>Etat</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Etat</li>
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
                                                Etat de commande
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
                                                    <th>Nom Technicien</th>
                                                    <th>telephone</th>
                                                    <th>Date</th>
                                                    <th>Statut</th>
                                                    <th>Id Service</th>
                                                    <th>Created At</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($commandes as $commande)
                                                    <tr>
                                                        <td>{{$commande->id}}</td>
                                                        <td>{{$commande->nom}}</td>
                                                        <td>{{$commande->telephone}}</td>
                                                        <td>{{$commande->date}}</td>
                                                        <td>{{$commande->statut}}</td>
                                                        <td>{{$commande->id_service}}</td>
                                                        <td>{{$commande->created_at}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody> 
                                        </table>
                                        {{$commandes->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
