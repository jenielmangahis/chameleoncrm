<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\View\CellTrait;
use Cake\Routing\Router;
use Cake\Network\Http\Client;
use Cake\Http\Cookie\Cookie;

/**
 * Main Controller
 *
 * @property \App\Model\Table\UsersTable $Main
 */
class MainController extends AppController
{
    public $helpers = ['NavigationSelector'];

    use CellTrait;

    /**
     * Initialize Method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();   
        $this->viewBuilder()->layout("main");              
    }    
    
    /**
     * BeforeFilter Method
     *  ID : CA-02
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

    /**
     * Index method for homepage
     *  ID : CA-03
     * @return void
     */

    public function index()
    {
        return $this->redirect(['controller' => 'users', 'action' => 'login']);           
    }

    public function cosco_shipping()
    {
        $http = new Client();
        $response = $http->get('http://lines.coscoshipping.com/homeapi/routeService/callPort/ASAL.do');
        $jsonData = $response->body;
        $coscoA   = json_decode($jsonData);
        /*foreach( $coscoA->data->content as $p ){            
            foreach( $p->ports as $pp ){
                //debug($pp);
                echo $pp->callPortUuid;
            }
        }*/       

        $response = $http->get('http://lines.coscoshipping.com/homeapi/routeService/loopExport/AAX.do');
        $jsonData = $response->body;        
        $coscoB   = json_decode($jsonData);
        
        /*foreach( $coscoB->data->content as $pp ){
            //debug($pp);
            foreach( $pp->Pol as $p ){
                debug($p);
            }            
        }   
        exit;*/

        $this->set(['coscoA' => $coscoA, 'coscoB' => $coscoB]);    
        
    }

    public function msc_shipping()
    {
        $http = new Client();
        /*$response = $http->post('https://www.msc.com/search-schedules', [
          'ctl00$ctl00$plcMain$plcMain$ScheduleForm$txtdestination$TextField' => 'Bintulu, Sarawak, Malaysia (MYBTU)',
          'ctl00$ctl00$plcMain$plcMain$ScheduleForm$txtdestination$TextField' => 'Bintulu, Sarawak, Malaysia (MYBTU)',
          'ctl00$ctl00$plcMain$plcMain$ScheduleForm$txtDate' => date("Y-m-d"),
          'ctl00$ctl00$plcMain$plcMain$ScheduleForm$ddlWeeksOut$DropDownField' => 1
        ]);
        debug($response);*/        
        $data = ['isCountry' => true, 'mscCode' => 'MY'];
        $response = $http->post('https://www.msc.com/CMSTemplates/CraftedCMS/WebServices/RouteFinder.svc/PortActivity', 
            json_encode($data),['type' => 'json']
        );
        $data = json_decode($response->body);
        /*debug($data);
        exit;*/
        $this->set(['data' => $data]);
    }

    public function evergreen_shipping()
    {
        $http = new Client();
        $responseA = $http->get('https://www.shipmentlink.com/tvs2/download_txt/TSC_9.html');
        $responseB = $http->get('https://www.shipmentlink.com/tvs2/download_txt/CSM_9.html');
        $dataA = preg_replace("/<img[^>]+\>/i", "", $responseA->body);        
        $dataB = preg_replace("/<img[^>]+\>/i", "", $responseB->body);        

        $this->set(['dataA' => $dataA, 'dataB' => $dataB]);
    }

    public function maersk_shipping()
    {
        $http = new Client();
        $date_from = date("Y-m-d");
        $date_to   = date("Y-m-d", strtotime("+1 months"));        
        $response  = $http->get('https://api.maerskline.com/maeu/schedules/vessel?vesselCode=M10&vesselName=OEL+MALAYSIA&fromDate=' . $date_from . '&toDate=' . $date_to);
        $data      = json_decode($response->body);        

        $this->set(['data' => $data]);
    }

    public function oocl_shipping()
    {
        /*$url = 'http://www.oocl.com/eng/ourservices/eservices/sailingschedule/Pages/mal.aspx';
        $http = new Client(['host' => 'www.oocl.com']);                
        $response = $http->get('/eng/ourservices/eservices/sailingschedule/Pages/mal.aspx', [], [
            'cookies' => [
                '_ga' => 'GA1.2.1247278082.1520625520',
                '_gid' => 'GA1.2.1881798526.1520875990',
                'BIGipServerOOCL' => '2268192402.20480.0000',
                'DefaultOOCL' => '',
                'imChatiFrameCommandOOCL' => '',
                'imChatiFrameLockOOCL' => '',
                'imChatIntegrationCommandOOCL' => '',
                'imChatIntegrationLockOOCL' => false,
                'MyFavoriteTrackingType' => 'booking',
                'WSS_FullScreenMode' => false,
                'WT_FPC' => 'id=130.105.209.78-4170711296.30652249:lv=1520872759490:ss=1520872359840'
            ]
        ]);
        debug($response);exit;
        
        $_curl = curl_init();
        curl_setopt($_curl, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($_curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($_curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($_curl, CURLOPT_COOKIEFILE, './cookiePath.txt');
        curl_setopt($_curl, CURLOPT_COOKIEJAR, './cookiePath.txt');
        curl_setopt($_curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; InfoPath.1)');
        curl_setopt($_curl, CURLOPT_FOLLOWLOCATION, true); //new added
        curl_setopt($_curl, CURLOPT_URL, $url);
        $rtn = curl_exec( $_curl );
        debug($rtn);exit;
        
        $this->set(['html' => $response->body]);*/
    }

    public function wanhap_shipping()    
    {
        //header('Content-Type: application/json');                
        /*$http = new Client();        
        $responseA = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834',[],[]); 
        $cookies = json_encode($responseA->cookies);
        $cookies = json_decode($cookies);        
        $JSESSIONID = $cookies->JSESSIONID->value;*/
        $JSESSIONID = '002B3F5BEA1EB0C49FE1B7EFCDF204A1';       
        
        $http = new Client();
        //$response = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834',[],[]); 
        $responseA = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834',[],[
            'cookies' => ['JSESSIONID' => $JSESSIONID]
        ]);            

        $responseB = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834',[],[
            'cookies' => ['JSESSIONID' => $JSESSIONID]
        ]);            
        //debug($response);exit;      

        $bodyA = $responseA->body;
        $bodyB = $responseB->body;

        $doc = new \DOMDocument;
        $doc->loadHTML($bodyA);
               
        $xpath = new \DOMXPath($doc);
        $table = $xpath->query("//*[@class='tbl-list']");
        $bodyA = $doc->saveHTML($table->item(0));

        $doc = new \DOMDocument;
        $doc->loadHTML($bodyB);
               
        $xpath = new \DOMXPath($doc);
        $table = $xpath->query("//*[@class='tbl-list']");
        $bodyB = $doc->saveHTML($table->item(0));

        //$bodyA = $doc->saveHTML();        

        $this->set(['bodyA' => $bodyA, 'bodyB' => $bodyB]);
    }

    public function removeElementByClassName( $doc, $classname, $element ) {
        $xpath = new \DomXPath($doc);        
        $xpath_results = $xpath->query("//{$element}[contains(@class, '$classname')]");
        if($h = $xpath_results->item(0)){            
            $h ->parentNode->removeChild($h);
            $body = $doc->saveHTML();
        }  

        return $body;

    }

    public function interasia_shipping()
    {
        $http = new Client();
        //$response = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834'); 

        $responseA = $http->get('http://www.interasia.cc/content/c_service/schedule_info.aspx?SiteID=1&departure=19&destination=20&line=KSS');       
        $bodyA     = $responseA->body;

        $doc = new \DOMDocument;
        $doc->loadHTML($bodyA);
        $headerElement = $doc->getElementById('lbtnExcel');
        $headerElement->parentNode->removeChild($headerElement);
        $bodyA         = $doc->saveHTML();
        $bodyA = $this->removeElementByClassName( $doc, 'title2', 'h3' );
        $bodyA = $this->removeElementByClassName( $doc, 'ctBottom', 'div' );


        $responseB = $http->get('http://www.interasia.cc/content/c_service/schedule_info.aspx?SiteID=1&departure=19&destination=20&line=NS3');       
        $bodyB     = $responseA->body;

        $doc = new \DOMDocument;
        $doc->loadHTML($bodyB);
        $headerElement = $doc->getElementById('lbtnExcel');
        $headerElement->parentNode->removeChild($headerElement);
        $bodyB         = $doc->saveHTML();
        $bodyB = $this->removeElementByClassName( $doc, 'title2', 'h3' );
        $bodyB = $this->removeElementByClassName( $doc, 'ctBottom', 'div' );
        
        $responseC = $http->get('http://www.interasia.cc/content/c_service/schedule_info.aspx?SiteID=1&departure=19&destination=20&line=KCM');       
        $bodyC     = $responseA->body;

        $doc = new \DOMDocument;
        $doc->loadHTML($bodyC);
        $headerElement = $doc->getElementById('lbtnExcel');
        $headerElement->parentNode->removeChild($headerElement);
        $bodyC         = $doc->saveHTML();
        $bodyC = $this->removeElementByClassName( $doc, 'title2', 'h3' );
        $bodyC = $this->removeElementByClassName( $doc, 'ctBottom', 'div' );

        $this->set(['bodyA' => $bodyA, 'bodyB' => $bodyB, 'bodyC' => $bodyC]);
    }

    public function mol_shipping()
    {
        $http = new Client();
        //$response = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834'); 

        $response = $http->get('http://web.molpower.com/Schedule/VesselInformation?Vsl=FNAH&Voy=062W&Line=FAS&source=vessel#');       
        $body = $response->body;
        
        $doc = new \DOMDocument;
        $doc->loadHTML($body);
        $headerElement = $doc->getElementById('tblVoyDDown');
        $headerElement->parentNode->removeChild($headerElement);
        $body          = $doc->saveHTML(); 
        $this->set(['body' => $body]);
    }

    public function cma_shipping()
    {
        $http = new Client();
        //$response = $http->get('http://ph.wanhai.com/views/skd/SkdBySvcDetail.xhtml?file_num=64836&top_file_num=64735&parent_id=64834'); 

        $response = $http->get('http://www.cma-cgm.com/ebusiness/schedules/routing-finder?DeparturePlaceCode=MYBTU&ArrivalPlaceCode=MYPEN&DeparturePlaceName=BINTULU&ArrivalPlaceName=PENANG&DepartureCountryCode=MY&ArrivalCountryCode=MY&CultureId=1033&POLDescription=BINTULU+%3B+MY+%3B+MYBTU&POLCountryCode=&POLCountryCode=&PODDescription=PENANG+%3B+MY+%3B+MYPEN&PODCountryCode=MY&PODPlaceCode=MYPEN&IsDeparture=True&SearchDate=3%2F7%2F2018&DateRange=2');       
        $body = $response->body;        
        $doc = new \DOMDocument;
        $doc->loadHTML($body);        

        $xpath = new \DOMXPath($doc);
        $table = $xpath->query("//*[@class='solutions-table']");        
        $content = $this->removeElementByClassName( $doc, 'cell-icon', 'a' );
        $content = $this->removeElementByClassName( $doc, 'cell-icon', 'a' );
        $content = $doc->saveHTML($table->item(0));                    
        $content = $this->delete_all_between('','<table class="solutions-table">', $content);                  
        
        $this->set(['body' => $content]);
    }

    public function kline_shipping()
    {

    }

    public function delete_all_between($beginning, $end, $string) {
      $beginningPos = strpos($string, $beginning);
      $endPos = strpos($string, $end);
      if ($beginningPos === false || $endPos === false) {
        return $string;
      }

      $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);

      return str_replace($textToDelete, '', $string);
    }
}
