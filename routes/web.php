    <?php use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */


    Route::get('/', 'FrontController@index');


    Auth::routes();

    Route::get('/home', 'AdminController@index');

    Route::get('/about', 'AboutController@index');
    Route::get('/contact', 'ContactController@index');
    Route::post('/ContactController', 'ContactController@formSubmit');
    Route::get('/blog', 'BlogController@index');
    Route::get('/portfolio', 'PortfolioController@index');
    Route::get('/value', 'ValueController@index');
    Route::get('/client', 'ClientsPartnersController@index');
    Route::get('/creative', 'CreativeController@index');
    Route::get('/finance', 'FinanceController@index');
    Route::get('/gallery', 'GalleryController@index');
    Route::get('/human', 'HrController@index');
    Route::get('/our-company', 'OurCompanyController@index');
    Route::get('/software_dev', 'SoftwareDevController@index');
    Route::get('/support', 'SupportController@index');
    Route::get('/digitalmark', 'DigitalMarkController@index');
    Route::get('/sale', 'SalesController@index');
    Route::get('/host', 'HostsController@index');
    Route::get('/community', 'CommunitiesController@index');
    Route::get('/carrier', 'CarriersController@index');
    Route::get('/work', 'WorkingController@index');
    Route::get('/web-develop', 'WebDevController@index');
    Route::get('/ecommerce', 'EcommerceController@index');
    Route::get('/wordpress', 'WordpressPageController@index');
    Route::get('/magento', 'MagentoPageController@index');
    Route::get('/emailSignatures', 'EmailSigniturePageController@index');
    Route::get('/busca-seo', 'MotorSEOController@index');
    Route::get('/manutencao-sistema', 'ManutencaoController@index');
    Route::get('/email-Marketing', 'EmailMarketingController@index');


    /*this route will return a submit view*/
    Route::post('/submit', 'SubmitController@save');

    Route::get('setups', function(){
       return view('backend.insert.setup');
    });


    /*Setup the routes for the translation*/
    Route::get('/sidemenus', function(){
       return view('backend.sidemenu');
    });

    Route::get('/galleries', function(){
       return view('backend.gallery');
    });

    Route::get('lang/{locale}', function ($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    });

    /*Adding the route for the FormsController*/
    Route::get('/contact', 'FormsController@index');
