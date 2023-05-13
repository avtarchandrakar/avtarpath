
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

                     <a style="margin-right: 5px;" href="<?php  echo site_url('Masters/consultant'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                     
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
                                 <label>Consultant Name<span class="text-danger">*</span></label>
                                 <input type="text" name="name" id="name" class="form-control"  placeholder=" Enter consultant Name" required="" >
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label>Degree<span class="text-danger">*</span></label>
                                 <select name="degree" id="degree" class="form-control" title="Select Degree" required>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MBBS DCH">MBBS DCH</option>
                                    <option value="MBBS MS">MBBS MS</option>
                                    <option value="MBBS MS MCH">MBBS MS MCH</option>
                                    <option value="MD">MD</option>
                                    <option value="MD DCH">MD DCH</option>
                                    <option value="MS">MS</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Address<span class="text-danger">*</span></label>
                                 <textarea type="text" name="address" id="address" class="form-control"  placeholder=" Enter Address" required="" ></textarea>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label>Area<span class="text-danger">*</span></label>
                                 <select name="area" id="area" class="form-control" title="Select Sample Collection" required>
                                    <option value="Yes">Yes</option>
                                 </select>
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
                                 <label>Reg. No.<span class="text-danger">*</span></label>
                                 <input type="text" name="reg_no" id="reg_no" class="form-control"  placeholder=" Enter Reg. No." required="" >
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label>Consultant Category<span class="text-danger">*</span></label>
                                 <select name="consultant_category" id="consultant_category" class="form-control" title="Select Consultant Category" required>
                                    <option value="Yes">Yes</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label>Center<span class="text-danger">*</span></label>
                                 <select name="center" id="center" class="form-control" title="Select Sample Collection" required>
                                    <option value="Yes">Yes</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">
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
                              <a href="<?php echo site_url('Masters/consultant') ?>" class="btn btn-block btn-danger">Reset</a>
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
<?php $this->view('js/js_consultant') ?>
<?php   $this->view('js/custom_js'); ?>
<!-- ========================Script==========================