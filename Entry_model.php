<?php

class Entry_model extends CI_Model {
 
 public function __construct() {
	
	$this->load->database();
	
	$this->load->helper('url');
	
 }  

 public function get_count() {
    
   return $this->db->count_all('person');
 }
 
 public function samesubject_model($mycbjec) {
         
    $dtopic = "";      
         
 	  $this->db->select('*');
 	  $this->db->where('topic',$mycbjec);
 	  $this->db->from('statements');
 	 
 	  $mysub = $this->db->get();
 	  
 	  foreach ($mysub->result() as $dtops) {
 	  		$dtopic = $dtops->topic; 
 	  }	  

 	  $topicData = array(
      'mytopic' => $dtopic   	  
 	  );
 	  
 	  return $topicData;
 }
 
 public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('person');

        return $query->result();
 }
 
 
 public function count_statements() {

   return $this->db->count_all('statements'); 
 }
 
 public function get_statements($limits, $starts, $perid) {

	 $query = $this->db->select('*');
	 
	 $this->db->limit($limits, $starts);	 
     	  
    $this->db->where('pid',$perid); //person id     
         
    $this->db->from('statements');
        
    //$this->db->order_by('months');
     	  
    $query = $this->db->get();	
    
    return $query->result();   
 } 


 public function putindb() {
 	
 	$mydata = array(
        'title' => $this->input->post('title'),        
        'fname' => $this->input->post('firstname'),
        'lname' => $this->input->post('surname'),
        'phone' => $this->input->post('tele'),
        'relation' => $this->input->post('rela')
   );
    	
      if ($this->db->insert('person', $mydata)) {
    	
    		$this->load->view('success_view', $mydata);
    	}
    
      else {

			echo "Unable to inserts data into Database";      
      }
    	
  }
  
  public function get_person() {
	
	$this->load->view('infoentry'); 
  
  }
  
  //gets list of everyone from person table and shows it in a table
  public function fetch_person_model($pids) { 

		 $this->db->select('*');
		 
		 $this->db->where('pid',$pids);
		 
		 $this->db->from('person');
		 
		 $mydata = $this->db->get();

			$pids = ""; $titles = ""; $fnames = ""; $lnames = ""; $phones = ""; $relations = "";
			

      foreach ($mydata->result() as $rows) {
			
		   $pids = $rows->pid;
		   $titles = $rows->title;		   
		   $fnames = $rows->fname;
		   $lnames = $rows->lname;
		   $phones = $rows->phone;
		   $relations = $rows->relation;
		
     	}

			$mday = date("l"); $mydate = date("j");
			
			$mymonth = date("F"); $myyear = date("Y"); 
			
		   $mytime = gmdate("H:i:s");     		
     		
     		$data['dpid'] = $pids;
     		$data['dtitle'] = $titles;
     		$data['dfname'] = $fnames;
     		$data['dlname'] = $lnames;
     		$data['dphone'] = $phones;
     		$data['drelation'] = $relations;
     		$data['dmday'] = $mday;
     		$data['dmydate'] = $mydate;
     		$data['dmymonth'] = $mymonth;
     		$data['dmyyear'] = $myyear;
     		$data['dmytime'] = $mytime;
   
   	return $data;
  }
  
  //enters a persons record into statement table 
  public function add_record_model($mpid, $msbjec, $mtxtentry, $mcategs) { 		 			
			$mday = date("l"); $mydate = date("j");
			
			$mymonth = date("F"); $myyear = date("Y"); 
			
		   $mytime = gmdate("H:i:s");     
	
			$datas = array(
			 'pid' => $mpid,
			 'topic' => $msbjec,
			 'category' => $mcategs,
			 'comments' => $mtxtentry,
			 'day' => $mday,
			 'dates' =>	$mydate,
			 'months' => $mymonth,
			 'years' => $myyear,
			 'times' => $mytime				
			);     			
			
			$this->db->insert('statements', $datas);	 							 
			return $datas;							
  }  
  

  public function a_record_model($mdata) {
  
     $sids = ""; $pids = ""; $topics = ""; $categs = ""; $comments = ""; 
		 
	  $dys = ""; $dts = ""; $mths = ""; $yrs = ""; $tms = ""; 
		 
	  $names = ""; $surnames = "";  		 
  		  
  		 $this->db->select('*');
		 
		 $this->db->where('sid',$mdata);
		 
		 $this->db->from('statements');
		 
		 $mydata = $this->db->get();
		 
		 foreach ($mydata->result() as $row) {
			
			$pids = $row->pid;
			$sids = $row->sid;
		   $topics = $row->topic;
		   $categs = $row->category;
		   $comments = $row->comments;
		   $dys = $row->day;
		   $dts =  $row->dates;
		   $mths = $row->months;
		   $yrs = $row->years;
		   $tms = $row->times;
		   
      }
		
       $this->db->select('*');
		 
		 $this->db->where('pid',$pids);
		 
		 $this->db->from('person');
		 
		 $myperson = $this->db->get();
		 
		  foreach ($myperson->result() as $myrows) {
			
			$names = $myrows->fname;
			$surnames = $myrows->lname;
      }
		 
		 $srmdata = array(
        'mynames' => $names,
        'mylast' => $surnames,		  
		  'mypid' => $pids,
		  'mysid' => $sids,
		  'mytopic' => $topics,
		  'mycategory' => $categs,
		  'mycomment' => $comments,
		  'mydays' => $dys,
		  'mydates' => $dts,
		  'mymonths' => $mths,
		  'myyears' => $yrs,
		  'mytimes' => $tms
		);	
		 		
		 return $srmdata;
 
 } //end a record model
 
//enter records for a person  
 public function add_record_selected_model($mpid, $msbjec, $mtxtentry, $mdays, $mdates, $mmonths, $myears, $mcateg) {

		   $mytime = gmdate("H:i:s");
	
			$seldata = array(
			 'pid' => $mpid,
			 'topic' => $msbjec,
			 'category' => $mcateg,
			 'comments' => $mtxtentry,
			 'day' => $mdays,
			 'dates' =>	$mdates,
			 'months' => $mmonths,
			 'years' => $myears,
			 'times' => $mytime	
			);     		
			
			$this->db->insert('statements', $seldata);

			return $seldata;				
   } 
   
  
  //presents a record to be updated  
  public function update_record_model($upmod) { //receives a record ID

	 $sids = ""; $pids = ""; $topics = ""; $comments = ""; 
		 
	 $dys = ""; $dts = ""; $mths = ""; $yrs = ""; $tms = ""; 
		 
	 $names = ""; $surnames = "";  		 
  		  
  		 $this->db->select('*');
		 
		 $this->db->where('sid',$upmod);
		 
		 $this->db->from('statements');

		 $mydata = $this->db->get();	
		 
		 foreach ($mydata->result() as $row) {
			
			$pids = $row->pid;$sids = $row->sid;
		   $topics = $row->topic; $categorys = $row->category;
		   $comments = $row->comments;
		   $dys = $row->day;$dts =  $row->dates;
		   $mths = $row->months;$yrs = $row->years;$tms = $row->times;
		   
        }
		
       $this->db->select('*');
		 
		 $this->db->where('pid',$pids);
		 
		 $this->db->from('person');
		 
		 $myperson = $this->db->get();
		 
		  foreach ($myperson->result() as $myrows) {
			
			$names = $myrows->fname;
			$surnames = $myrows->lname;
      }
		 
		 $srmdata = array(
        'mynames' => $names,
        'mylast' => $surnames,		  
		  'mypid' => $pids,
		  'mysid' => $sids,
		  'mytopic' => $topics,
		  'mycategory' => $categorys,
		  'mycomment' => $comments,
		  'mydays' => $dys,
		  'mydates' => $dts,
		  'mymonths' => $mths,
		  'myyears' => $yrs,
		  'mytimes' => $tms
		);	
		 		
		 return $srmdata;
  
  } //end function
  
  public function do_update_model($upsidm, $uppidm, $uptpsm, $upcateg, $uptxtm) {


		$myname = ""; $mytitle= "";  $mysurname = "";

        $myday = date("l"); $mydate = date("j"); 

        $mymonths = date("F"); $myyear = date("Y");

		$intoDB = array(
		 'topic' => $uptpsm,
		 'category' => $upcateg,
		 'comments' => $uptxtm,
		 'upday' => $myday,
		 'updates' => $mydate,
		 'upmonths' => $mymonths,
		 'upyears' => $myyear 		
	   );
		
	   $this->db->where('sid', $upsidm);
	   $this->db->where('pid', $uppidm);
	   $this->db->update('statements', $intoDB);
	    
	   $this->db->select('*');
	   $this->db->where('sid', $upsidm);
	   $this->db->where('pid', $uppidm);
	   $this->db->from('statements');
	   $lovedata = $this->db->get();

	   $dsid = "";  $dpid = ""; $dtopic = ""; $dcateg = "";	 
  	   $dcomment = "";  $dday = ""; $ddates = "";
  	   $dmonths = ""; $dyears = ""; $dtimes = "";

  	   foreach ($lovedata->result() as $ldatas) {

  	   	    $dsid = $ldatas->sid; $dpid = $ldatas->pid;
			
			$dtopic = $ldatas->topic; $dcateg = $ldatas->category;
			
			$dcomment = $ldatas->comments; $dday = $ldatas->day;
			
			$ddates = $ldatas->dates; $dmonths = $ldatas->months;
			
			$dyears = $ldatas->years; $dtimes = $ldatas->times;

  	   }

  	    $intoDB = array(
       'dusid' => $dsid,
       'dupid' => $dpid,
       'dutopic' => $dtopic,
       'ducategory' => $dcateg,
       'ducomment' => $dcomment,
       'duday' => $dday,
       'dudates' => $ddates,
       'dumonths' => $dmonths,
       'duyears' => $dyears,
       'dutimes' => $dtimes
     );

	     return $intoDB; //multidemensional array   
  
  } //end of function
  
  //gets called from rec_delete_control
  public function delete_model($delmodel) {
  	 
  	 $this->db->select('*');
  	 $this->db->where('sid', $delmodel);
  	 $this->db->from('statements'); 
  	 $mydata = $this->db->get();

    $mysid = "";  $mypid = ""; $mytopic = ""; $mycateg = "";	 
  	 $mycomment = "";  $myday = ""; $mydates = "";
  	 $mymonths = ""; $myyears = ""; $mytimes = "";
  	 
  	  foreach ($mydata->result() as $myrows) {
  	 
			$mysid = $myrows->sid; $mypid = $myrows->pid;
			
			$mytopic = $myrows->topic; $mycateg = $myrows->category;
			
			$mycomment = $myrows->comments; $myday = $myrows->day;
			
			$mydates = $myrows->dates; $mymonths = $myrows->months;
			
			$myyears = $myrows->years; $mytimes = $myrows->times;
				  	 
  	  }
  	    
  	   $inDB = array(
       'sid' => $mysid,
       'pid' => $mypid,
       'topic' => $mytopic,
       'category' => $mycateg,
       'comments' => $mycomment,
       'day' => $myday,
       'dates' => $mydates,
       'months' => $mymonths,
       'years' => $myyears,
       'times' => $mytimes
     );
       
  	  return $inDB;  	 
  	
  } //end delete_model($delmodel)
  
  //gets called from confirm_delete_control
  public function rec_delete_model($modsid, $modpid) {
  	
  	$this->db->where('sid', $modsid);
  	
  	$this->db->delete('statements');

   echo "<h2>Deleted Record $modsid Belonging:</h2><br>";
 
  	 $this->db->select('*');
  	 $this->db->where('pid', $modpid);
  	 $this->db->from('person'); 
  	 $mydata = $this->db->get();  
  	 
  	  foreach ($mydata->result() as $myrows) {
  	 		 
  	 	 $myid = $myrows->pid;	 
     	 $myfirst = $myrows->fname; 
		 $mylast = $myrows->lname;
  	  
  	  }
  	  
  	echo "<h2> $myfirst  $mylast ($myid) </h2>"; 
  
  }
  
 public function check_topic($mtopic) {
 
   $topics = ""; 
 	
 	$this->db->select('*');
 	$this->db->where('pid',$mtopic);
 	$this->db->from('statements');
 	
 	$tquery = $this->db->get();
   
   foreach ($tquery->result() as $topics) {       
     
       return $topics->topic;
   }
} 

public function fetch_topic_model($mtopics) {
  
    $msid = ""; $mpid = ""; $mtopic = ""; $mcategory = "";
    $mcomment = ""; $mday = ""; $mdate = "";$mmonth = ""; 
    $mmyear = ""; $mtime = ""; $mfname = ""; $mlname = ""; 
      	
  	$this->db->select('*');
  	$this->db->where('topic', $mtopics);
  	$this->db->from('statements');
  	$this->db->join('person','person.pid = statements.pid');
  	$dbtopic = $this->db->get();
  	
  	foreach ($dbtopic->result() as $thetopic) {
		
	  $msid = $thetopic->sid; $mpid = $thetopic->pid; 
	  
	  $mtopic = $thetopic->topic; $mcategory = $thetopic->category; 
	  
	  $mcomment = $thetopic->comments; $mday = $thetopic->day; 
	  
	  $mdate = $thetopic->dates; $mmonth = $thetopic->months; 
	  
	  $mmyear = $thetopic->years; $mtime = $thetopic->times;
	  
	  $mfname = $thetopic->fname; $mlname = $thetopic->lname;
       	       	      	
  	}
  	
    $topicDatas = array(
     'mysid' => $msid,
     'mypid' => $mpid,
     'mytopic' => $mtopic,
     'mycategory' => $mcategory,
     'mycomment' => $mcomment,
     'mday' => $mday,
     'mydate' => $mdate,
     'mymonth' => $mmonth,
     'mmyer' => $mmyear,
     'mtime' => $mtime,
     'myfname' => $mfname,
     'mylname' => $mlname
   );  	
     
    return $topicDatas; 
 }

} //end of class

?>



