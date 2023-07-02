<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Service Commander</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Commander</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="semiboxshadow text-center">
                <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form wire:submit.prevent="sendMessage" method="post">
                                
                                <div class="col-md-4">
                                    
                                        <h4>Your Commande
                                            <input type="submit" class="btn btn-primary pull-right"
                                                name="submit" value="Add Commande"></h4>
                                        
                                            <div class="form-group">
                                                <label for="id_service" class="col-form-label">Id Service :</label>
                                                <input type="integer" class="form-control" id="id_service"
                                                    name="id_service" wire:model="id_service"  required="">
                                                @error('id_service') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nom_client" class="col-form-label">Nom :</label>
                                                <input type="text" class="form-control" id="nom"
                                                    name="nom" wire:model="nom"  required="">
                                                @error('nom') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone" class="col-form-label">Telephone:</label>
                                                <input type="integer" class="form-control" id="telephone" name="telephone" wire:model="telephone" required="">
                                            @error('telephone') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="date" class="col-form-label">Date:</label>
                                                <input type="date" class="form-control" id="locality" name="date" wire:model="date" required="">
                                            @error('date') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                            <label for="statut" class="col-form-label">Statut:</label>
                                                <select name="statut" size="1" class="form-control" wire:model="statut">
                                                    <option>Accepter</option>
                                                    <option>Réfuser</option>
                                                </select>
                                                @error('statut') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter content_resalt border-top">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
