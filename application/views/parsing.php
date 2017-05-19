 <?php // process posted form data  
        		$keyword = 'plp';  
       			$data['response'] = 'false'; //Set default response  
        		$query = $this->M_showkat->lookup($keyword); //Search DB  
        		if( ! empty($query) )  
        		{  
            		$data['response'] = 'true'; //Set response  
            		$data['message'] = array(); //Create array

 
            
            		foreach( $query as $row )  
            		{  
                		$data['message'][] = array(   
                        'id'=>$row->pro_id,  
                        'value' => $row->pro_name,  
                         '');  //Add a row to array  
            		}  

        		}

		        if('IS_AJAX')  
		        {  
		            	echo json_encode($data); //echo json string if ajax request  
		               
		        }  
		        else  
		        {  
		            $this->load->view('autocomplete/index',$data); //Load html view of search results  
		        }  ?>