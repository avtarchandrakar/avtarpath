
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

                     <a style="margin-right: 5px;" href="<?php  echo site_url('Masters/collection_center'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                     
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
                    <form method= "post" id="frm-add-data">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label> Name<span class="text-danger">*</span></label>
                                 <input type="text" name="name" id="name" class="form-control"  placeholder=" Enter Name" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label> Alias<span class="text-danger">*</span></label>
                                 <input type="text" name="alias" id="alias" class="form-control"  placeholder=" Enter Alias" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Email ID<span class="text-danger">*</span></label>
                                 <input type="text" name="email" id="email" class="form-control"  placeholder=" Enter Email ID" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Mobile Number<span class="text-danger">*</span></label>
                                 <input type="text" name="mobile" id="mobile" class="form-control"  placeholder=" Enter Mobile Number" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Address<span class="text-danger">*</span></label>
                                 <input type="text" name="address" id="address" class="form-control"  placeholder=" Enter Address" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Lab No.<span class="text-danger">*</span></label>
                                 <input type="text" name="lab_no" id="lab_no" class="form-control"  placeholder=" Enter Lab. No." required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Area<span class="text-danger">*</span></label>
                                 <select name="area" id="area" class="form-control" title="Select Sample Collection" required>
                                    <?php 
                                    $query=$this->db->query("select * from master_city_tbl where  m_city_status='1' order by m_city_name");
                                    $result = $query->result();
                                    if(count($result)>0)
                                    {
                                       foreach($result as $row)
                                       {
                                     ?>
                                    <option value="<?=$row->m_city_id?>"><?=$row->m_city_name?></option>
                                 <?php }}?>
                                 </select>
                              </div>
                           </div>                        
                           
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Proccessing Center<span class="text-danger">*</span></label>
                                 <select name="pro_center" id="pro_center" class="form-control" title="Select Proccessing Center" required>
                                    <?php 
                                    $query=$this->db->query("select * from master_processing_center where  status='1' order by name");
                                    $result = $query->result();
                                    if(count($result)>0)
                                    {
                                       foreach($result as $row)
                                       {
                                     ?>
                                    <option value="<?=$row->id?>" ><?=$row->name?></option>
                                 <?php }}?>

                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Status<span class="text-danger">*</span></label>
                                 <select name="status" id="status" class="form-control" title="Select Status" required>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-layout-submit">
                                 <button type="submit" id="btn-add-data" class="btn btn-block btn-info">Submit</button>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-layout-submit">
                              <a href="<?php echo site_url('Masters/collection_center') ?>" class="btn btn-block btn-danger">Reset</a>
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
<?php $this->view('js/js_collection_center') ?>
<?php   $this->view('js/custom_js'); ?>
<!-- ========================Script==========================