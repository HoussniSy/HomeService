<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Reservation</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Reservation</li>
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
                            <form wire:submit.prevent="sendMessage">
                                <div class="col-md-8">
                                    <h3>Recherche votre Localisation</h3>
                                    <p class="lead">
                                    </p>
                                    <input type="text" class="form-control" id="autocomplete" name="location"
                                        placeholder="Search Location....">
                                    <div id="map" style="height: 400px;"></div>
                                </div>
                                <div class="col-md-4">
                                    <aside class="addlocation">
                                        <h4>Votre Localisation<input type="submit" class="btn btn-primary pull-right"
                                                name="submit" value="Ajouter Localisation"></h4>
                                        <address>
                                            <div class="form-group">
                                                <label for="nom_client" class="col-form-label">Nom Client:</label>
                                                <input type="text" class="form-control" id="nom_client"
                                                    name="nom_client" wire:model="nom_client"  required="">
                                                @error('nom_client') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email:</label>
                                                <input type="email" class="form-control" id="route" name="email" wire:model="email" required="">
                                            @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="route" class="col-form-label">Route:</label>
                                                <input type="text" class="form-control" id="locality" name="route" wire:model="route" required="">
                                            @error('route') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone" class="col-form-label">Télephone:</label>
                                                <input type="integer" class="form-control" id="administrative_area_level_1"
                                                    name="telephone" wire:model="telephone" required="">
                                                @error('telephone') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nom" class="col-form-label">Payer par:</label>
                                                <select name="nom" size="1" class="form-control" wire:model="prix">
                                                    <option>Cache</option>
                                                    <option>Bankily</option>
                                                    <option>Masrvi</option>
                                                    <option>Sedad</option>
                                                </select>
                                            @error('prix') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="pincode" class="col-form-label">Code Postal:</label>
                                                <input type="text" class="form-control" id="postal_code" name="zipcode" wire:model="zipcode" required="">
                                            @error('zipcode') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="travail" class="col-form-label">Travail demander:</label>
                                                <select name="nom" size="1" class="form-control" wire:model="travail">
                                                    <option>Services Climatisation</option>
                                                    <option>Services Beauté</option>
                                                    <option>Services Plomberie</option>
                                                    <option>Services Electricien</option>
                                                    <option>Services Filtre de douche</option>
                                                    <option>Services Nettoyage</option>
                                                    <option>Services Menuiserie</option>
                                                    <option>Services Lutte Antiparasitaire</option>
                                                    <option>Services Plaque de cuisson</option>
                                                    <option>Services purificateur d’eau</option>
                                                    <option>Services Ordinateur</option>
                                                    <option>Services TV</option>
                                                    <option>Services Blanchisserie</option>
                                                    <option>Services Réfrigérateur</option>
                                                    <option>Services Geyser</option>
                                                    <option>Services Voiture</option>
                                                    <option>Services Document</option>
                                                    <option>Services Déménageurs_Emballeurs</option>
                                                    <option>Services Systém Alarme</option>
                                                    <option>Services Painture</option>
                                                </select>
                                            @error('travail') <p class="text-danger">{{$message}}</p> @enderror
                                            </div>
                                        </address>
                                    </aside>
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
