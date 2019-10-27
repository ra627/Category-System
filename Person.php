<?php
class Person extends CI_Controller {
  
   public function __construct() {
   
   	parent::__construct(); 
   
      $this->load->model("Entry_model");
	   $this->load->database();
		$this->load->library("pagination");
	   $this->load->helper("url");
   }

   //home page and list of peole
   public function index() {	
   
     $config = array();
     $config["base_url"] = base_url() . "index.php/person/index";
     $config["total_rows"] = $this->Entry_model->get_count();
     $config["per_page"] = 5;
     $config["uri_segment"] = 3;

     $this->pagination->initialize($config);

     $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

     $data["links"] = $this->pagination->create_links();

     $data['authors'] = $this->Entry_model->get_authors($config["per_page"], $page);

     $this->load->view('main_page_view', $data); 
		
   }	
	
	//add new person
	public function add_person_control() { //allows you to add a new person to person table.
		
		$this->load->helper('form');
    	
    	$this->load->library('form_validation');
    	
    	$datas['title'] = 'Add Person';
    	
    	$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('firstname', 'Firstname', 'required');
    	$this->form_validation->set_rules('surname', 'surname', 'required');
		$this->form_validation->set_rules('tele', 'tele', 'required');

    	if ($this->form_validation->run() === FALSE)
    	{
             
        $this->load->view('fentry', $datas);  //allows you to add a new person by loading fentry form
    	}
    	else
    	{
        
        $this->Entry_model->putindb();  //put information into database           
       
    	}
	
	} 
	
  //choose from list of people to add a record.
  public function add_person_record_control() { 
		
		$this->load->view('add_person_record_view');
  }	

  //Enter record for selected person and is called from
  public function fetch_person_control() {  
  
    $this->load->helper('form');
	 
	 $perid = $_GET["myid"];
	 
	 $mydatas = $this->Entry_model->fetch_person_model($perid);
	 
	 $this->load->view('fetch_person_view', $mydatas); //calls add add_record_control
	
  }	
  
  //adds record for A person and is called from fetch_person_control
  public function add_record_control() {   
	
	$this->load->helper('form');
	
	$this->load->helper('url');

	$cpid = $this->input->post('mypid'); //person id	
	
	$csbjec = $this->input->post('sbjec');
	
	$ctxtentry = $this->input->post('editor1');
	
	$cndays = $this->input->post('ndays');
	
	$cdates = $this->input->post('ndates');
	
	$cmonths = $this->input->post('nmonths');
	
	$cyears = $this->input->post('nyears');
	
	$ccateg = $this->input->post('categ');
	   
   $topicData = $this->Entry_model->samesubject_model($csbjec);    

   $mytxt = implode(" ",$topicData);
   
   echo strtoupper($mytxt);   
   
   if ($topicData['mytopic'] == $csbjec) {
   
      $this->load->view('same_subject_view', $topicData);
   } //check for duplicate topic name   
   
   elseif ($cndays != "None" || $cdates != "None" || $cmonths != "None" || $cyears != "None") {
		  
	 $selected = $this->Entry_model->add_record_selected_model($cpid, $csbjec, $ctxtentry,$cndays, $cdates, $cmonths, $cyears, $ccateg);
	  $this->load->view('selected_record_view', $selected); 
	  //informs user of selected date and record
	  
	} else {
			
	  $mydata = $this->Entry_model->add_record_model($cpid, $csbjec, $ctxtentry, $ccateg);			
	   $this->load->view('record_view', $mydata); //informs user what record has been entered
	   
	}
	  
 } // end add_record_control
  
 
  
  //Records of a person
  public function fetch_record_control() { 
     
	    $mydata["ids"] = $_GET["myid"];   
       	  
  	  $this->load->view("record_list_view", $mydata); //calls a_record_control 
  	 
  }
  
   //Displays a persons record
   public function a_record_control() { //gets called from record_list_view

	$arcdata = $_GET["recid"]; //record id from a_record_view
	
	$arecmodel = $this->Entry_model->a_record_model($arcdata);   
	
	$this->load->view('a_record_view',$arecmodel); 

  } 
  
  //presents a record to be updated  
  public function update_record_control() { //update a record
   	 
	$this->load->helper('form');    
    
    $upsvar = $_GET["updts"]; //List of Peopleecord ID
    
    $updtmodel = $this->Entry_model->update_record_model($upsvar);    
	
	$this->load->view('update_record_view', $updtmodel); 
  
  }
  
  public function do_update_control() {  //from update_record_view form
 
	 $this->load->helper('form'); 
	
	 $this->load->helper('url');
	 
	 $sids = $this->input->post('mysids'); //statement id

	 $pids = $this->input->post('mypids'); //person id	

	 $tpss = $this->input->post('tps'); //topic
	 
	 $ccategs = $this->input->post('categss');   
   
     $mytextt = $this->input->post('editor1'); //textareaText

      //$myday = date("l"); $mydate = date("j"); 

      //$mymonths = date("F"); $myyear = date("Y");
    	
	 $updetails = $this->Entry_model->do_update_model($sids, $pids, $tpss, $ccategs, 
	 	$mytextt);
	  		
	  $this->load->view('confirm_update_view', $updetails); 

 }
 
 //gets called from record_list_view 
 public function rec_delete_control() {
 
   $this->load->helper('form');
   
   $mydel = $_GET["del"];
   
   $delData = $this->Entry_model->delete_model($mydel);
   
   $this->load->view('rec_delete_view', $delData);
      
 }
 
 //gets called from rec_delete_view
 public function confirm_delete_control() {
 
    $this->load->helper('form');
    
    $sidcontrol = $this->input->post('mysid'); 
    
    $pidcontrol = $this->input->post('mypid'); 
    
    $this->Entry_model->rec_delete_model($sidcontrol, $pidcontrol);
    	
 }
 
 //select from category list. 
 public function category_control() {
 
     $this->load->helper('form');
     
     $this->load->view('category_view'); //calls fetch_categ_control
 }
 
 //displays selected category from database. 
 public function fetch_categ_control() {

	$data['cats'] = $this->input->post('mycateg');
   
   $this->load->view('show_category_view', $data);
 
 } 
 public function topic_control() {
 	
 	$this->load->helper('form');

   $this->load->view('topic_view');
    
 }
 
 public function fetch_topic_control() { //gets called from topic_control
 
    $data_topic = $this->input->post('mytopic');
    
    $mytopic = $this->Entry_model->fetch_topic_model($data_topic);    
    
    $this->load->view('a_topic_view', $mytopic);
 }

}
?>

