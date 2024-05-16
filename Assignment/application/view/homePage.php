<!doctype html>
<html lang="en">
    <head>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Font Awesome-->
        <script src="https://kit.fontawesome.com/01f8e59422.js" crossorigin="anonymous"></script>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

        
        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="../scripts/css/bootstrap.min.css">
        <link rel="stylesheet" href="../scripts/css/bootstrap.css">
        <link rel="stylesheet" href="../scripts/css/jquery.fancybox.min.css"/>
        <link rel="stylesheet" href="../scripts/css/font-awesome.min.css">
        
    
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

        <!-- X3DOM CSS -->
        <link rel="stylesheet" type="text/css" href="../scripts/css/x3dom.css">

        <link rel="stylesheet" href="../scripts/css/myCustumCSS.css">

        
    
        <title>My 3D App Template</title>
    
    </head>
    <body id='bodyColor'>
        <!-- HEADER -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_home">
      <div class="container-fluid">
        <!-- Logo and brand -->
        <div class="logo">
          <a class="navbar-logo" href="index.php">
            <h2>Coca Cola</h2>
            <h3>Branded My Way</h3>
            
          </a>
        </div>
        <!-- Collapsible navbar menu icon -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Link menu item button to the links class navbar collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Links -->
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navItems">
            <li class="nav-item">
              <a id="navHome" class="nav-link active" href="index.php" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom" 
              data-bs-content="My home page utilizes the SPA design by depending on the which brand is selected the page will be themed around that brand. Additionally, unique image renders and information." 
              data-bs-original-title="My home page with 3 different SPA views">Home</a>
            </li>
            <li class="nav-item">
              <a id="navAbout" class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom" 
              data-bs-content="I have created a 3D web application which integrates an SPA design pattern to govern switching between the costa, oasis and fanta home pages, an MVC framework to utilize the model, view, controller design pattern, json data files and a sqlite database for backend storage and asynchronous front end information updates. Finally, a model page to display and show off my 3D models created in blender." 
              data-bs-original-title="About my redesigned Coca Cola home page">About</a>
            </li>
            <li class="nav-item">
              <a id="navModels" class="nav-link" href="javascript:selectModelPage()" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
              title data-bs-content="This page shows off my X3D models I created and exported through blender. They can be interacted with to start an animation, view different angles, and switch render modes. To note, i display 9 3D image renders as initailly i had 9 models created, 3 for each brand, but errors occured when trying to show them all. In this case i just allow the first 3 3D mdoels to allow interaction." 
              data-bs-original-title="My X3D models">Models</a>
            </li>
            <li class="nav-item">
              <a id="navContact" class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
              title data-bs-content="Name: Harry Atkin, E-mail: ha468@sussex.ac.uk, Candidate number: 246586"
              data-bs-original-title="Contact information">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Contents of the home page - will contain... -->
    <div class="container-fluid main_contents">
        <!-- Here will follow various div tags to show certain information on the SPA-->
        <!-- The first is the standad costa home page -->
        <div id="homeCosta">
            <div id="top_row" class="row topRow">
                <div id="main_row_column_one" class="col-sm-4">
                  <div class="card cardC" id="costaCardC">
                    <div class="card-title" id="costaCardTitleC"></div>
                    <!-- 3D MODEL WILL GO HERE -->
                    <a id="costaPlaceholderC" href="javascript:selectCostaPage()">
                    </a>
                    
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleCC">
                    </div>
                  </div>
                </div>
              <div id="main_row_column_two" class="col-sm-4">
                <div class="card cardO" id="costaCardO">
                  <div class="card-title" id="oasisCardTitleC"></div>
                    <!-- 3D MODEL WILL GO HERE -->
                    <a id="oasisPlaceholderC" href="javascript:selectOasisPage()">
                    </a>

                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleCO">
                    </div>
                </div>
              </div>
              <div id="main_row_column_three" class="col-sm-4">
                <div class="card cardF" id="costaCardF">
                  <div class="card-title" id="fantaCardTitleC"></div>
                    <!-- 3D MODEL WILL GO HERE -->
                    
                    <a id="fantaPlaceholderC" href="javascript:selectFantaPage()">
                    </a>
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleCF">
                    </div>
                </div>
              </div>
            </div>
            <div id="drinks_row" class="row">
                <div id="drink1_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card" id="imageRender"> -->
                        <div id="costaImageOne">
                        </div>
                        
                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="assets/images/costa1.jpg" alt="costa_one"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/costa_bottle_smoothcoffee_texture2.x3d"></inline>
                              <Background groundColor="125 255 210"
                              skyColor="125 255 210"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 2.50 8.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      <!-- </div> -->
                    </div>
                    <div class="col-sm-3 extra" id="costaOneTitle">
                    </div>
                    <div class="col-sm-6 description" id="costaOneDescription">
                    </div>
                </div>
                <div id="drink2_row" class="row">
                    <div class="col-sm-3">
                    <!-- <div class="card"> -->
                      <div id="costaImageTwo">
                      </div>
                      
                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="assets/images/costa2.jpg" alt="costa_two"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/costa_bottle_chocfudge_texture2.x3d"></inline>
                              <Background groundColor="125 255 210"
                              skyColor="125 255 210"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 2.50 8.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      </div>
                    <!-- </div> -->
                    <div class="col-sm-3 description" id="costaTwoTitle">
                    </div>
                    <div class="col-sm-6 extra" id="costaTwoDescription">
                    </div>
                </div>
                <div id="drink3_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                      <div id="costaImageThree">
                      </div>

                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="assets/images/costa3.jpg" alt="costa_three"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/costa_bottle_caramelswirl1.x3d"></inline>
                              <Background groundColor="125 255 210"
                              skyColor="125 255 210"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 2.50 8.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      <!-- </div> -->
                    </div>
                    <div class="col-sm-3 description" id="costaThreeTitle">
                    </div>
                    <div class="col-sm-6 extra" id="costaThreeDescription">
                    </div>
                  </div>
             </div>
        </div>

        <!-- The second is the standad oasis home page -->
        <div id="homeOasis">
            <div id="top_row" class="row topRow">
                <div id="main_row_column_one" class="col-sm-4">
                  <div class="card cardC" id="oasisCardC">
                    <div class="card-title" id="costaCardTitleO"></div>
                      <!-- 3D MODEL WILL GO HERE -->
                      <a id="costaPlaceholderO" href="javascript:selectCostaPage()">
                      </a>
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleOC">
                    </div>
                  </div>
                </div>
              <div id="main_row_column_two" class="col-sm-4">
                <div class="card cardO" id="oasisCardO">
                  <div class="card-title" id="oasisCardTitleO"></div>
                      <!-- 3D MODEL WILL GO HERE -->
                      <a id="oasisPlaceholderO" href="javascript:selectOasisPage()">
                      </a>
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleOO">
                    </div>
                  </div>
              </div>
              <div id="main_row_column_three" class="col-sm-4">
              <div class="card cardF" id="oasisCardF">
                <div class="card-title" id="fantaCardTitleO"></div>
                      <!-- 3D MODEL WILL GO HERE -->
                      <a id="fantaPlaceholderO" href="javascript:selectFantaPage()">
                      </a>
                      
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleOF">
                    </div>
                  </div>
              </div>
            </div>
            <div id="drinks_row" class="row">
                <div id="drink1_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                      <div id="oasisImageOne">
                      </div>

                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="" alt="oasis_one"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/oasis_model_texture_summer.x3d"></inline>
                              <Background groundColor="255 200 100"
                              skyColor="255 200 100"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 12.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      </div>
                    <!-- </div> -->
                    <div class="col-sm-3 description" id="oasisOneTitle">
                        
                    </div>
                    <div class="col-sm-6 extra" id="oasisOneDescription">
                        
                    </div>
                </div>
                <div id="drink2_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                      <div id="oasisImageTwo">
                      </div>
                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="assets/images/oasis2.jpg" alt="oasis_two"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/oasis_model_texture_citrus.x3d"></inline>
                              <Background groundColor="255 200 100"
                              skyColor="255 200 100"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 12.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      <!-- </div> -->
                    </div>
                    <div class="col-sm-3 description" id="oasisTwoTitle">
                        
                    </div>
                    <div class="col-sm-6 extra"id="oasisTwoDescription">
                        
                    </div>
                </div>
                <div id="drink3_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                      <div id="oasisImageThree">
                      </div>

                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="assets/images/oasis3.jpg" alt="oasis_three"> -->
                         <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/oasis model_texture_exoticfruit.x3d"></inline>
                              <Background groundColor="255 200 100"
                              skyColor="255 200 100"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 12.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      </div>
                    <!-- </div> -->
                    <div class="col-sm-3 description" id="oasisThreeTitle">
                        
                    </div>
                    <div class="col-sm-6 extra" id="oasisThreeDescription">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- The third is the standad fanta home page -->
        <div id="homeFanta">
            <div id="top_row" class="row topRow">
                <div id="main_row_column_one" class="col-sm-4">
                  <div class="card cardC" id="fantaCardC">
                    <div class="card-title" id="costaCardTitleF"></div>
                      <!-- 3D MODEL WILL GO HERE -->
                      <a id="costaPlaceholderF" href="javascript:selectCostaPage()">
                      </a>
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleFC">
                    </div>
                  </div>
              </div>
              <div id="main_row_column_two" class="col-sm-4">
              <div class="card cardO" id="fantaCardO">
                <div class="card-title" id="oasisCardTitleF"></div>
                      <!-- 3D MODEL WILL GO HERE -->
                      <a id="oasisPlaceholderF" href="javascript:selectOasisPage()">
                      </a>
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleFO">
                    </div>
                  </div>
              </div>
              <div id="main_row_column_three" class="col-sm-4">
              <div class="card cardF" id="fantaCardF">
                <div class="card-title" id="fantaCardTitleF"></div>
                      <!-- 3D MODEL WILL GO HERE -->
                      <a id="fantaPlaceholderF" href="javascript:selectFantaPage()">
                      </a>
                    <!-- Image goes HERE -->
                    <div class="card-body" id="mainCardSubtitleFF">
                    </div>
                  </div>
              </div>
            </div>
            <div id="drinks_row" class="row">
                <div id="drink1_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                        <div id="fantaImageOne">
                        </div>
                        <!--<img class="card-image-top image-fluid img-thumbnail" src="assets/images/fanta1.jpg" alt="fanta_one"> -->                      </div>
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/Fanta_animation_main11.x3d"></inline>
                              <Background groundColor="1 10 255"
                              skyColor="1 10 255"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 16.50"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      <!-- </div> -->
                    <div class="col-sm-3 description" id="fantaOneTitle">
                    </div>
                    <div class="col-sm-6 extra" id="fantaOneDescription">
                    </div>
                </div>
                <div id="drink2_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                        <div id="fantaImageTwo">
                        </div>
                        <!--<img class="card-image-top image-fluid img-thumbnail" src="assets/images/fanta2.jpg" alt="fanta_two"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/Fanta_fruittwist_main.x3d"></inline>
                              <Background groundColor="1 10 255"
                              skyColor="1 10 255"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 5.00 18.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      </div>
                    <!-- </div> -->
                    <div class="col-sm-3 description" id="fantaTwoTitle">
                    </div>
                    <div class="col-sm-6 extra" id="fantaTwoDescription">
                    </div>
                </div>
                <div id="drink3_row" class="row">
                    <div class="col-sm-3">
                      <!-- <div class="card"> -->
                        <div id="fantaImageThree">
                        </div>
                        <!-- <img class="card-image-top image-fluid img-thumbnail" src="assets/images/fanta3.jpg" alt="fanta_three"> -->
                        <!-- <div class="model3D">
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/Fanta_lemon_main.x3d"></inline>
                              <Background groundColor="1 10 255"
                              skyColor="1 10 255"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 5.00 18.00"
			                        />
                            </scene>
                          </x3d>
                        </div> -->
                      <!-- </div> -->
                    </div>
                    <div class="col-sm-3 description" id="fantaThreeTitle">
                    </div>
                    <div class="col-sm-6 extra" id="fantaThreeDescription">
                    </div>
                </div>
            </div>
        </div>

        <div id="models">
          <div class="row">
            <div class="col-sm-12">
              <div class="card cameraCard">
                <div class="card-header" id="cameraViewsTitle">
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="cameraFront();">Front</a>
                  <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="cameraBack();">Back</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="cameraLeft();">Left</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="cameraRight();">Right</a>
                  <a href="#" class="btn btn-warning btn-responsive camera-font" onclick="cameraTop();">Top</a>
                  <a href="#" class="btn btn-warning btn-responsive camera-font" onclick="cameraBottom();">Bottom</a>
                  <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="cameraPerspective1();">Perspective1</a>
                  <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="cameraPerspective2();">Perspective2</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive camera-font" onclick="cameraFront();">Default</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="card animationCard">
                <div class="card-header" id="animationTitle">
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="rotateZ();">RotZClockwise</a>
                  <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="rotateZAntiClockwise();">RotZAnitClockwise</a>
                  <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="rotateX();">RotX</a>
                  <a href="#" class="btn btn-danger btn-responsive camera-font" onclick="rotateXAntiClockwise();">RotXAntiClockwise</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="rotateY();">RotY</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="rotateYAntiClockwise();">RotYAntiClockwise</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive camera-font" onclick="stopAnimation();">Stop</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card modelCard">
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a id="navbardrop" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="true">X3D Models</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:changeVisibleNode('0')">Costa</a>
                        <a class="dropdown-item" href="javascript:changeVisibleNode('1')">Oasis</a>
                        <a class="dropdown-item" href="javascript:changeVisibleNode('2')">Fanta</a>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div>
                    <div id="x3dModelTitle_Costa" class="card-title drinksText">
                    </div>
                    <div id="x3dModelTitle_Oasis" class="card-title drinksText" style="display: none;">
                    </div>
                    <div id="x3dModelTitle_Fanta" class="card-title drinksText" style="display: none;">
                    </div>

                    <div class="model3D">
                      <x3d id='wire'>
                        <scene>
                          <Switch whichChoice='0' id='switcher'>
                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assets/x3d/costa_bottle_smoothcoffee_DONE.x3d"></inline>
                                 <!-- <Background groundColor="125 255 210"
                                            skyColor="125 255 210"/>
                                 <Viewpoint DEF="CA_Camera_001"
			                                    position="0.00 2.50 8.00"/>  -->
                              
                                
                                
                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assets/x3d/oasis_model_texture_summer_DONE2.x3d">
                                <!-- <Background groundColor="255 200 100"
                                              kyColor="255 200 100"/>
                                <Viewpoint DEF="CA_Camera_001"
			                                      position="0.00 4.75 12.00"/> -->
                              </inline>
                                
                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assets/x3d/fanta_orange_DONE.x3d">
                                <!-- <Background groundColor="1 10 255"
                                            skyColor="1 10 255"/>
                                <Viewpoint DEF="CA_Camera_001"
			                                    position="0.00 4.75 16.50"/> -->
                              </inline>
                                
                          </Switch>
                        </scene>
                      </x3d>
                    </div>

    



                      <!-- <div id="costaModel1" class="model3D"> 
                          <x3d>
                            <scene>
                              <Switch whichChoice='0' id='switcher'>
                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/costa_bottle_smoothcoffee_DONE.x3d"></inline>
                                <Background groundColor="125 255 210"
                                            skyColor="125 255 210"/> -->
                              <!-- <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 2.50 8.00"
			                        /> -->
                              <!-- </Switch>
                              
                            </scene>
                          </x3d>
                      </div> -->
                      <!-- <div id="costaModel2" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/costa_bottle_chocfudge_texture2.x3d"></inline>
                              <Background groundColor="125 255 210"
                              skyColor="125 255 210"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 2.50 8.00"
			                        />
                            </scene>
                          </x3d>
                      </div>
                      <div id="costaModel3" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/costa_bottle_caramelswirl1.x3d"></inline>
                              <Background groundColor="125 255 210"
                              skyColor="125 255 210"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 2.50 8.00"
			                        />
                            </scene>
                          </x3d>
                      </div> -->



                      <!-- <div id="oasisModel1" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                            <Switch whichChoice='1' id='switcher'>
                              <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/oasis_model_texture_summer_DONE.x3d"></inline>
                                  <Background groundColor="255 200 100"
                                              skyColor="255 200 100"/>
                                  <Viewpoint DEF="CA_Camera_001"
			                                        position="0.00 4.75 12.00"
			                        />
                            </Switch>
                              
                            </scene>
                          </x3d>
                      </div> -->
                      <!-- <div id="oasisModel2" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/oasis_model_texture_citrus.x3d"></inline>
                              <Background groundColor="255 200 100"
                              skyColor="255 200 100"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 12.00"
			                        />
                            </scene>
                          </x3d>
                      </div>
                      <div id="oasisModel3" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/oasis model_texture_exoticfruit.x3d"></inline>
                              <Background groundColor="255 200 100"
                              skyColor="255 200 100"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 12.00"
			                        />
                            </scene>
                          </x3d>
                      </div> -->




                      <!-- <div id="fantaModel1" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                            <Switch whichChoice='2' id='switcher'>
                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/fanta_orange_DONE.x3d"></inline>
                              <Background groundColor="1 10 255"
                              skyColor="1 10 255"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 16.50"
			                        />
                            </Switch>
                              
                            </scene>
                          </x3d>
                      </div> -->
                      <!-- <div id="fantaModel2" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/Fanta_fruittwist_main.x3d"></inline>
                              <Background groundColor="1 10 255"
                              skyColor="1 10 255"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 16.50"
			                        />
                            </scene>
                          </x3d>
                      </div>
                      <div id="fantaModel2" class="model3D" style="display: none;"> 
                          <x3d>
                            <scene>
                              <inline url="assets/x3d/Fanta_lemon_main.x3d"></inline>
                              <Background groundColor="1 10 255"
                              skyColor="1 10 255"
                              />
                              <Viewpoint DEF="CA_Camera_001"
			                          position="0.00 4.75 16.50"
			                        />
                            </scene>
                          </x3d>
                      </div> -->
                          
                    

                    <div id="x3dCreationMethod_Costa" class="card-title drinksText">
                    </div>
                    <div id="x3dCreationMethod_Oasis" class="card-title drinksText" style="display: none;">
                    </div>
                    <div id="x3dCreationMethod_Fanta" class="card-title drinksText" style="display: none;">
                    </div>

                  </div>
                </div>
              </div>
            </div>






            <div class="col-sm-4">
              <div class="card renderCard">
                <div class="card-header" id="renderTitle">
                </div>
                <div class="card-body">
                  <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="poly();">Poly</a>
                  <a href="#" class="btn btn-secondary btn-responsive camera-font" onclick="wireFrame();">Wire</a>
                  <a href="#" class="btn btn-warning btn-responsive camera-font" onclick="sunLight();">Sun</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="pointLights();">All Point Lights</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="topPointLights();">Top Point Lights</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font" onclick="bottomPointLights();">Bottom Point Lights</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive camera-font" onclick="defaultLights();">Default</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card galleryCard">
                
                <div class="card-header" id="galleryTitle">
                </div>
                <!-- <div class="card-subtitle" id="galleryDescription">
                  
                </div> -->
              <div class="card-body">
                  <div class="card-Title"></div>
                    <div id="galleryDescription" class="col-xs-12 col-sm-4">
                    </div>
                  <div class="gallery" id="gallery">
                    
                    <!-- <img id="oasisgallery" class="card-img-top img-thumbnail placeholder" src="gallery/images/oasis_logo.jpg"/>
                    <img id="oasisgallery" class="card-img-top img-thumbnail placeholder" src="gallery/images/oasis_logo.jpg"> -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


    <!-- FOOTER -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
      <div class="container">
        <div class="navbar-text float-left copyright">
          <p><span class="align-baseline">Web 3D Application 2024/246586</span></p>
        </div>
        <div class="navbar-text social">
          <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x fa-pull-right"></i></a>
          <a href="#"><i class="fab fa-google-plus fa-2x fa-pull-right"></i></a>
          <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
        </div>
      </div>
    </nav>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <script src="../scripts/js/bootstrap.bundle.min.js"></script>

        <!-- X3DOM JS -->
        <script type="text/javascript" src="../scripts/js/x3dom.js"></script>

        <script src="https://code.jquery.com/jquery-latest.js"></script>

        <script src="../scripts/js/swapPage.js"></script>

        <script src="../scripts/js/swap.js"></script>

        <script src="../scripts/js/modelInteraction.js"></script>

        <script src="../scripts/js/getJsonData.js"></script>

        <script type="text/javascript" src="../scripts/js/gallery_generator.js"></script>

        <script src="../scripts/js/jquery.fancybox.min.js"></script>

        <script src="../scripts/js/custum.js"></script>

        <script src="../scripts/js/fontawesome-all.min.js"></script>

        <script src="../scripts/js/popper.min.js"></script>
        
          
    </body>
</html>