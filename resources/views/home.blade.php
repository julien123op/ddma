<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script nonce="tmTZC0Da">__DEV__=0;CavalryLogger=window.CavalryLogger||function(a){this.lid=a,this.transition=!1,this.metric_collected=!1,this.is_detailed_profiler=!1,this.instrumentation_started=!1,this.pagelet_metrics={},this.events={},this.ongoing_watch={},this.values={t_cstart:window._cstart},this.piggy_values={},this.bootloader_metrics={},this.resource_to_pagelet_mapping={},this.initializeInstrumentation&&this.initializeInstrumentation()},CavalryLogger.prototype.setIsDetailedProfiler=function(a){this.is_detailed_profiler=a;return this},CavalryLogger.prototype.setTTIEvent=function(a){this.tti_event=a;return this},CavalryLogger.prototype.setValue=function(a,b,c,d){d=d?this.piggy_values:this.values;(typeof d[a]==="undefined"||c)&&(d[a]=b);return this},CavalryLogger.prototype.getLastTtiValue=function(){return this.lastTtiValue},CavalryLogger.prototype.setTimeStamp=CavalryLogger.prototype.setTimeStamp||function(a,b,c,d){this.mark(a);var e=this.values.t_cstart||this.values.t_start;e=d?e+d:CavalryLogger.now();this.setValue(a,e,b,c);this.tti_event&&a==this.tti_event&&(this.lastTtiValue=e,this.setTimeStamp("t_tti",b));return this},CavalryLogger.prototype.mark=typeof console==="object"&&console.timeStamp?function(a){console.timeStamp(a)}:function(){},CavalryLogger.prototype.addPiggyback=function(a,b){this.piggy_values[a]=b;return this},CavalryLogger.instances={},CavalryLogger.id=0,CavalryLogger.getInstance=function(a){typeof a==="undefined"&&(a=CavalryLogger.id);CavalryLogger.instances[a]||(CavalryLogger.instances[a]=new CavalryLogger(a));return CavalryLogger.instances[a]},CavalryLogger.setPageID=function(a){if(CavalryLogger.id===0){var b=CavalryLogger.getInstance();CavalryLogger.instances[a]=b;CavalryLogger.instances[a].lid=a;delete CavalryLogger.instances[0]}CavalryLogger.id=a},CavalryLogger.now=function(){return window.performance&&performance.timing&&performance.timing.navigationStart&&performance.now?performance.now()+performance.timing.navigationStart:new Date().getTime()},CavalryLogger.prototype.measureResources=function(){},CavalryLogger.prototype.profileEarlyResources=function(){},CavalryLogger.getBootloaderMetricsFromAllLoggers=function(){},CavalryLogger.start_js=function(){},CavalryLogger.start_js_script=function(){},CavalryLogger.done_js=function(){};CavalryLogger.getInstance().setTTIEvent("t_domcontent");CavalryLogger.prototype.measureResources=function(a,b){if(!this.log_resources)return;var c="bootload/"+a.name;if(this.bootloader_metrics[c]!==void 0||this.ongoing_watch[c]!==void 0)return;var d=CavalryLogger.now();this.ongoing_watch[c]=d;"start_"+c in this.bootloader_metrics||(this.bootloader_metrics["start_"+c]=d);b&&!("tag_"+c in this.bootloader_metrics)&&(this.bootloader_metrics["tag_"+c]=b);if(a.type==="js"){c="js_exec/"+a.name;this.ongoing_watch[c]=d}},CavalryLogger.prototype.stopWatch=function(a){if(this.ongoing_watch[a]){var b=CavalryLogger.now(),c=b-this.ongoing_watch[a];this.bootloader_metrics[a]=c;var d=this.piggy_values;a.indexOf("bootload")===0&&(d.t_resource_download||(d.t_resource_download=0),d.resources_downloaded||(d.resources_downloaded=0),d.t_resource_download+=c,d.resources_downloaded+=1,d["tag_"+a]=="_EF_"&&(d.t_pagelet_cssload_early_resources=b));delete this.ongoing_watch[a]}return this},CavalryLogger.getBootloaderMetricsFromAllLoggers=function(){var a={};Object.values(window.CavalryLogger.instances).forEach(function(b){b.bootloader_metrics&&Object.assign(a,b.bootloader_metrics)});return a},CavalryLogger.start_js=function(a){for(var b=0;b<a.length;++b)CavalryLogger.getInstance().stopWatch("js_exec/"+a[b])},CavalryLogger.start_js_script=function(a){if(!a||!a.dataset)return;CavalryLogger.start_js([a.dataset.bootloaderHash||a.dataset.bootloaderHashClient])},CavalryLogger.done_js=function(a){for(var b=0;b<a.length;++b)CavalryLogger.getInstance().stopWatch("bootload/"+a[b])},CavalryLogger.prototype.profileEarlyResources=function(a){for(var b=0;b<a.length;b++)this.measureResources({name:a[b][0],type:a[b][1]?"js":""},"_EF_")};CavalryLogger.getInstance().log_resources=true;CavalryLogger.getInstance().setIsDetailedProfiler(true);window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_start");</script>
    <title id="pageTitle">PGI-PAYE</title><meta property="og:title" content="Connectez-vous ou inscrivez-vous" />
    {{-- <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico" /> --}}
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yh/l/0,cross/fR5DUcsvG28.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="rCyHaCY" crossorigin="anonymous" />
    <style nonce="tmTZC0Da"></style>
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/KG1ugOqQXfY.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="epDBIN3" crossorigin="anonymous" />
<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/l/0,cross/tVt1szc8O_G.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="ktp89TJ" crossorigin="anonymous" />
<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y-/l/0,cross/KvqKtBDcyuQ.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="9rdCTko" crossorigin="anonymous" />
<link href="../assets/vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
<link href="../assets/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
<script src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/K4Ry3wcuFG2.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="XaTOYdk" crossorigin="anonymous" nonce="tmTZC0Da"></script>
<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/aLFadwLMSnc.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="ytF873y" crossorigin="anonymous" />
<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yD/l/0,cross/bhh0Ip7oNgO.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="nHcTU/M" crossorigin="anonymous" />

    <link href="../assets/vendor/animate/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;family=Sarabun:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="../assets/vendor/rangeslider/rangeslider.css">
    <link rel="stylesheet" href="../assets/vendor/switcher/switcher.css">
    <link rel="stylesheet" class="skin" href="../assets/css/skin/skin-2.css">
{{-- <link rel="shortcut icon" href="../../assets/images/favicon.png"/> --}}

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">

        <!-- Slick -->
    <link rel="stylesheet" href="../../libs/slick/slick.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">
    <title>PGI|PAYE</title>
</head>
<body >
    <div style="background: rgb(11, 13, 150) " class="_li" id="u_0_3_Nw">
        <div style="background: rgb(11, 13, 150) " id="pagelet_bluebar" data-referrer="pagelet_bluebar">
            <div style="background: rgb(11, 13, 150) " id="blueBarDOMInspector">
                <div style="background: rgb(11, 13, 150) " class="_53jh">
                    <div class="loggedout_menubar_container">
                         {{-- <b><h3>DD.MA Solution</h3></b> --}}
                        <div class="clearfix loggedout_menubar">
                           
                            <div  class="menu_login_container rfloat _ohf" data-testid="royal_login_form">
                                <table role="presentation" cellspacing="0">
                                    <tbody>
                                           
                                           <tr>
                                                <a href="/login"><button  type="submit" class="btn btn-primary">Se connecter en tant que personnel</button></a> -
                                            <a href="/login-employe"><button  type="submit" class="btn btn-primary"><span>Se connecter en tant qu'utilisateur</button></a>
                                                    {{-- <td>
                                                    <button type="submit" class="btn btn-success">S'inscrire</button> 
    
                                                            </td> --}}
                                                </tr> 
                                            </tbody>
                                        </table>
                            </div></div></div></div></div></div></div>
                                    
                                <div  class="menu">
                                    <div class="menu-header">
                                        <a href="/" class="logo">
                                            <img width="150" src="{{ asset('logo.pgipaie.png') }}" alt="pgipaie">
                                        </a>
                                        
                                    </div></div>
                                    <div class="menu-body">
                                    </div>
                                    
                                    <div class="text-center">
                                                <div class="content ">
                                                    <div class="row">
                                                        <div class="col-lg-12 bd-content">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div style="text-align: center">
                                                                        <div class="text-center">

                                                                             <h1><strong>Bienvenue sur le Progiciel de Gestion Intégré de Paye</strong></h1>                     

                                                                    <h6>Au cours du siècle dernier l’informatique a connu un essor universel qui à impacter considérablement tous les secteurs d’activités. La compétitivité qui était autrefois le fruit du labeur au travail est désormais fruit de la digitalisation de l’expérience client et de la digitalisation des processus opérationnel. Dans l’objectif de faciliter le quotidien des gestionnaires de paye et d’automatiser les procédures fixes, le <a href="/" target="_blank">  Progiciel de Gestion Intégré de Paye</a> est conçu et déployé par <a href="https://ddmatg.com/"target="_blank"> DD Management Application Solution</a> une startup qui s’ambitionne de proposer des solutions numériques les plus efficaces et les plus innovante. Dans l'entreprise, la gestion de la paie est généralement de la coresponsabilité du service comptable et de la direction des ressources humaines. PGI Paye est un outil phare pour assumer cette responsabilité.</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                                <footer class="content-footer">
                                                                    <div style="text-align: center" class="text-center">© 2022  - Déployé par <a href="https://ddmatg.com/" target="_blank">DD.MA Solution</a></div>
                                                                  
                                                                </footer>
                                                                <script src="../assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<!--<script src="../assets/vendor/switcher/switcher.js"></script>-->
<!--<script src="../assets/vendor/wow/wow.js"></script>-->
<script src="../assets/vendor/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="../assets/vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="../assets/vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="../assets/vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="../assets/vendor/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->
<script src="../assets/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="../assets/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
<script src='../../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="../assets/js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
<script src="../assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="../assets/js/custom.js"></script><!-- CUSTOM JS -->
 

                                                            <!-- Apex chart -->
                                                            <script src="../../libs/charts/apex/apexcharts.min.js"></script>
                                                            
                                                            <!-- Slick -->
                                                            {{-- <script src="../../libs/slick/slick.min.js"></script> --}}
                                                            
                                                            <!-- Examples -->
                                                            <script src="../../dist/js/examples/dashboard.js"></script>
                                                            
                                                            <!-- Main Javascript file -->
                                                            <script src="../../dist/js/app.min.js"></script>
                                                            <script>
                                                                $(document).ready(function() {
                                                                $('#example').DataTable();
                                                            } );
                                                                </script>
</body>
</html>