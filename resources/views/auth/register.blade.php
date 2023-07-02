<x-base-layout>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Registeration</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Inscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 profile1" style="padding-bottom:40px;">
                            <div class="thinborder-ontop">
                                <h3>Informations sur l’utilisateur</h3>
                                <x-validation-errors class="mb-4" />
                                <form id="userregisterationform" method="POST" action="{{route('register')}}">  
                                    @csrf                                  
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="" required="" autofocus="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Addresse E-Mail</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="" required="">
                                        </div>
                                    </div>

                                    

                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">Confirmer le mot de passe</label>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">Téléphone</label>
                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" value="" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="utype" class="col-md-4 col-form-label text-md-right">S’inscrire en tant que</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="utype" id="utype">
                                                <option value="CST">Client</option>
                                                <option value="SVP">Fournisseur</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-10">
                                            <span style="font-size: 14px;">Si vous êtes déjà inscrit <a
                                                    href="{{route('login')}}" title="Login">cliquez ici</a> pour vous connecter</span>
                                            <button type="submit" class="btn btn-primary pull-right">s' inscrire</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="section-twitter">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </section>
</x-base-layout>