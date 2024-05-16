<?php
include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);
// Create the controller class for the MVC design pattern
class Controller
{
    // Declare public variables for the controller class
    public $load;
    public $model;

    // Fucntions for the controller class
    function __construct($pageURI = null) // Class constructor
    {
        // Create new objects for load and model
        $this->load = new Load();
        $this->model = new Model();
        // Determine what page you are on
        $this->$pageURI();
    }
    // Home page fuction
    function home()
    {
        // Get data that defined the model method - model3D_info()
        // $data = $this->model->model3D_info();
        $this->load->view('homePage');
    }

    function myview() {
        $this->load->view('homePage');
    }

    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    // function apiGetData()
    // {
    //     $data = $this->model->dbGetData();
    //     $this->load->view('view3DAppData', $data);
    // }

    // function apiGetFlickrService()
    // {
    //     $this->load->view('viewFlickrService');
    // }

    // function apiGetJson()
    // {
    //     $this->load->view('viewJson');
    // }

    function apiLoadImage()
    {
        
        // Get the brand data from the (this) model using the dbGetBrand() method in the model class
        ChromePhp::warn('controller.php: [apiLoadImage] Get the brand data');
        
        $data = $this->model->dbGetBrand();
        
        // Note, the viewDrinks.php view being loaded here calls a new model
        // called modelDrinksDetails.php, which is not part of the model class
        // It is a seperate model to show you can have multiple models
        ChromePhp::log($data);
        $this->load->view('viewDrinkRenders', $data);
    }
}
?>