<?php$authorization = $sessionUser->tip;if (isset($topAdminMenu)){    $topMenu ="<ul class='nav navbar-top-links navbar-right'>";    foreach ($topAdminMenu as $title => $value) {        if (array_key_exists("values", $topAdminMenu[$title])){            $topMenu .= "<li class='dropdown'>                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>                    <i class='fa fa-user fa-fw'></i>  <i class='fa fa-caret-down'></i>                </a>";            $topMenu .= "<ul class='dropdown-menu dropdown-user'>";            $values = $topAdminMenu[$title]["values"];            foreach ($values as $title2 => $value2 ){                $topMenu .= "<li><a href='".WEB_ROOT.$values[$title2]["link"]."'><i class='fa ".$values[$title2]["class"]." fa-fw'></i>".$values[$title2]["name"]."</a></li>";            }            $topMenu .="</ul>";            $topMenu .="</li>";        }    }    $topMenu .= "</ul>";}if (isset($sideAdminMenu)){    $sideMenu ="";    foreach ($sideAdminMenu as $title => $value)  {	    if ($sideAdminMenu[$title]['authorization'] >= $authorization) {		    if ( array_key_exists( "values", $sideAdminMenu[ $title ] ) ) {			    $sideMenu .= "<li>                        <a href='#'>                        <i class='fa " . $sideAdminMenu[ $title ]["class"] . " fa-fw'></i>                        " . $sideAdminMenu[ $title ]["name"] . "<span class='fa arrow'>                        </span></a>                        <ul class='nav nav-second-level'>";			    $values = $sideAdminMenu[ $title ]["values"];			    foreach ( $values as $title2 => $value2 ) {				    $sideMenu .= "<li>                                <a href='" . WEB_ROOT . $values[ $title2 ]["link"] . "'>                                    " . $values[ $title2 ]["name"] . "</a>                            </li>";			    }			    $sideMenu .= "</ul>";		    } else {			    $sideMenu .= "<li>                        <a href='" . WEB_ROOT . $sideAdminMenu[ $title ]["link"] . "'>                            <i class='fa " . $sideAdminMenu[ $title ]["class"] . " fa-fw'></i>                                " . $sideAdminMenu[ $title ]["name"] . "</a>                        </li>";		    }	    }    }}return "<div id='wrapper'>    <!-- Navigation -->    <nav class='navbar navbar-default navbar-static-top' role='navigation' style='margin-bottom: 0'>        <div class='navbar-header'>            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>                <span class='sr-only'>Toggle navigation</span>                <span class='icon-bar'></span>                <span class='icon-bar'></span>                <span class='icon-bar'></span>            </button>            <a href='".WEB_ROOT."'>                <div id='logo' class='row'>                    <div id='logo-img' class='col-xs-2'><img src='".WEB_ROOT."img/logo.png' id='logo-admin' alt='Site logo' height='35px'></div>                    <div id='logo-text' class='col-xs-7'><h4>Mobel Service</h4></div>                </div>            </a>        </div>        <!-- /.navbar-header -->        $topMenu        <!-- /.navbar-top-links -->        <div class='navbar-default sidebar' role='navigation' id='navigation-sidebar'>            <div class='sidebar-nav navbar-collapse' >                <ul class='nav' id='side-menu'>                    <li class='sidebar-search'>                        <div class='input-group custom-search-form'>                        </div>                        <!-- /input-group -->                    </li>                    $sideMenu            </div>            <!-- /.sidebar-collapse -->            <div id='slide-navigation'>                <div id='slide-navigation-left'><i class='fa fa-caret-square-o-left' aria-hidden='true'></i></div>                <div id='slide-navigation-right'><i class='fa fa-caret-square-o-right' aria-hidden='true''></i></div>            </div>        </div>        <!-- /.navbar-static-side -->    </nav>    <div id='page-wrapper'>        $adminContent    </div></div>";