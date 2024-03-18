<?php 
	$invoice_info = $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->result_array();
	foreach($invoice_info as $row):
?>
    <div class="content-w" > 
        <?php include 'fancy.php';?>
        <div class="header-spacer"></div>
        <div class="conty">
            <div class="content-i">
	            <div class="content-box">
	                <div class="element-wrapper">
    	                <a href="<?php echo base_url();?>student/invoice/" class="btn btn-rounded btn-info"><i class="picons-thin-icon-thin-0131_arrow_back_undo"></i> <?php echo getEduAppGTLang('return');?></a>
	                    <button type="button" class="btn btn-rounded btn-success" onClick="Print('invoiceid')"><?php echo getEduAppGTLang('print');?></button>
	                    <br><br>
		                <div class="invoice-w" id="invoiceid">
		                    <div class="infos">
			                    <div class="info-1">
			                        <div class="invoice-logo-w">
				                        <img alt="" src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('logo');?>" class="invoiceLg">
    			                    </div>
			                        <div class="company-name text-black">
    				                    <?php echo $this->crud->getInfo('system_name');?>
			                        </div>
			                        <div class="company-address">
				                        <?php echo $this->crud->getInfo('address');?>
			                        </div>
			                        <div class="company-extra text-black">
				                        <?php echo getEduAppGTLang('phone');?>: <?php echo $this->crud->getInfo('phone');?>
			                        </div>
			                    </div>
			                    <div class="info-2 pull-right"><br><br>
			                        <div class="company-name">
				                        <?php echo $this->crud->get_name('student', $row['student_id']);?>
			                        </div>
			                        <div class="company-address text-dark">
				                        <?php echo getEduAppGTLang('roll');?>: <strong><?php echo $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->roll;?></strong><br/>
				                        <?php echo $this->db->get_where('class', array('class_id' => $row['class_id']))->row()->name;?><br/>
			                        </div>
			                    </div>
		                    </div>
		                    <div class="invoice-heading">
			                    <h3><?php echo getEduAppGTLang('invoice');?></h3>
			                    <div class="invoice-date">
			                        <?php echo $row['creation_timestamp'];?>
			                    </div>
		                    </div>
		                    <div class="invoice-body">
			                    <div class="invoice-table full-width">
			                        <table class="table">
				                        <thead>
				                            <tr>
				  	                            <th><?php echo getEduAppGTLang('title');?></th>
					                            <th><?php echo getEduAppGTLang('description');?></th>
					                            <th class="text-right"><?php echo getEduAppGTLang('amount');?></th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            <tr>
				  	                            <td><?php echo $row['title'];?></td>
					                            <td><?php echo $row['description'];?></td>
					                            <td class="text-right"><?php echo $this->crud->getInfo('currency'); ?><?php echo $row['amount'];?></td>
				                            </tr>
				                        </tbody>
				                        <tfoot>
				                            <tr>
					                            <td><?php echo getEduAppGTLang('total');?></td>
					                            <td class="text-right" colspan="2"><?php echo $this->crud->getInfo('currency'); ?><?php echo $row['amount'];?></td>
				                            </tr>
				                        </tfoot>
			                        </table>
			                    </div>
		                    </div>
		                    <div class="invoice-footer">
			                    <div class="invoice-logo">
			                        <img src="<?php echo base_url();?>public/uploads/<?php echo $this->crud->getInfo('logo');?>"><span><?php echo $this->crud->getInfo('system_name');?></span>
			                    </div>
			                    <div class="invoice-info">
			                        <span><?php echo $this->crud->getInfo('system_email');?></span><span><?php echo $this->crud->getInfo('phone');?></span>
			                    </div>
		                    </div>
		                </div>
	                </div>
	            </div>
            </div>
        </div>
    </div>
<?php endforeach;?>