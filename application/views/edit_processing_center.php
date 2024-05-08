
<!-- ========================Header==============Fix========= --> 
<?php $this->view('top_header') ?>

<!-- =======================/Header==============Fix========= -->
<!-- =========================View===============Fix========= -->
<!-- Right Side Content Start -->
<div class="page-content">
   <div class="container-fluid">
      <!-- ========================/View===============Fix========= -->
      <!-- ======================Page Title======================== -->
      <!-- Breadcromb Row Start -->
      <div class="row">
         <div class="col-md-12">
            <div class="breadcromb-area">
               <div class="row">
                  <div class="col-md-6  col-sm-6">
                     <div class="seipkon-breadcromb-left">
                        <h3><?php echo $pagename;?></h3>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-3 pull-right">
                     <div class="seipkon-breadcromb-right">

                     <a style="margin-right: 5px;" href="<?php  echo site_url('Location/processing_center'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                     
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="page-box">
               <div class="form-example">
                  <div class="form-wrap top-label-exapmple form-layout-page">
                    <form method= "post" id="frm-update-data">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <input type="hidden" name="hidden_id" value="<?php echo $a_value[0]->id;?>">
                                 <label> Name<span class="text-danger">*</span></label>
                                 <input type="text" name="name" id="name" class="form-control"  placeholder=" Enter Name" value="<?php echo $a_value[0]->name;?>" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label> Alias<span class="text-danger">*</span></label>
                                 <input type="text" name="alias" id="alias" class="form-control"  placeholder=" Enter Alias" value="<?php echo $a_value[0]->alias;?>" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Email ID<span class="text-danger">*</span></label>
                                 <input type="text" name="email" id="email" class="form-control"  placeholder=" Enter Email ID" required="" value="<?php echo $a_value[0]->email;?>">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Mobile Number<span class="text-danger">*</span></label>
                                 <input type="text" name="mobile" id="mobile" class="form-control"  placeholder=" Enter Mobile Number" value="<?php echo $a_value[0]->mobile;?>" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Address<span class="text-danger">*</span></label>
                                 <input type="text" name="address" id="address" class="form-control"  placeholder=" Enter Address" required="" value="<?php echo $a_value[0]->address;?>">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Lab No.<span class="text-danger">*</span></label>
                                 <input type="text" name="lab_no" id="lab_no" class="form-control"  placeholder=" Enter Lab. No." value="<?php echo $a_value[0]->lab_no;?>" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Area<span class="text-danger">*</span></label>
                                 <select name="area" id="area" class="form-control" title="Select Area " required>
                                    <?php 
                                    $query=$this->db->query("select * from master_city_tbl where  m_city_status='1' order by m_city_name");
                                    $result = $query->result();
                                    if(count($result)>0)
                                    {
                                       foreach($result as $row)
                                       {
                                     ?>
                                    <option value="<?=$row->m_city_id?>" <?php if ($a_value[0]->area==$row->m_city_id) { echo "selected"; } ?>><?=$row->m_city_name?></option>
                                 <?php }}?>
                                 </select>
                              </div>
                           </div>                        
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Status<span class="text-danger">*</span></label>
                                 <select name="status" id="status" class="form-control" title="Select Status" required>
                                    <option value="1" <?php if ($a_value[0]->status=="1") { echo "selected"; } ?>>Active</option>
                                    <option value="0" <?php if ($a_value[0]->status=="0") { echo "selected"; } ?>>In-Active</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-layout-submit">
                                 <button type="submit" id="btn-update-data" class="btn btn-block btn-info">Update</button>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-layout-submit">
                              <a href="<?php echo site_url('Masters/processing_center') ?>" class="btn btn-block btn-danger">Reset</a>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Advance Form Row -->
      <!-- ====================/Page Content======================= -->
      <!-- =========================View=================Fix======= -->
      <!-- End Widget Row -->
   </div>
</div>
<!-- ========================/View=================Fix======= -->
<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer') ?>
<?php $this->view('js/js_processing_center') ?>
<?php   $this->view('js/custom_js'); ?>
<!-- ========================Script==========================