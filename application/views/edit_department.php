
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

                     <a style="margin-right: 5px;" href="<?php  echo site_url('Masters/department'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                     
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
                                 <label>Code<span class="text-danger">*</span></label>
                                 <input type="text" name="code" id="code" class="form-control" value="<?php echo $a_value[0]->code;?>" placeholder=" Enter Code" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Department Name<span class="text-danger">*</span></label>
                                 <input type="text" name="name" id="name" class="form-control"  placeholder=" Enter Department Name" required="" value="<?php echo $a_value[0]->name;?>" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Sign<span class="text-danger">*</span></label>
                                 <input type="text" name="sign" id="sign" class="form-control"  placeholder=" Enter Sign" required="" value="<?php echo $a_value[0]->sign;?>">
                              </div>
                           </div>
                           
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Header<span class="text-danger">*</span></label>
                                 <textarea type="text" name="header" id="header" class="form-control"  placeholder=" Enter Header" required="" ><?php echo $a_value[0]->header;?></textarea>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Footer<span class="text-danger">*</span></label>
                                 <textarea type="text" name="footer" id="footer" class="form-control"  placeholder=" Enter Footer" required="" ><?php echo $a_value[0]->footer;?></textarea>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label>Sample Collection<span class="text-danger">*</span></label>
                                 <select name="collection" id="collection" class="form-control" title="Select Sample Collection" required>
                                    <option value="Yes" <?php if($a_value[0]->collection=="Yes") echo 'selected';?>>Yes</option>
                                    <option value="No" <?php if($a_value[0]->collection=="No") echo 'selected';?>>No</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label>Status<span class="text-danger">*</span></label>
                                 <select name="status" id="status" class="form-control" title="Select Status" required>
                                    <option value="1" <?php if($a_value[0]->status==1) echo 'selected';?>>Active</option>
                                    <option value="0" <?php if($a_value[0]->status==0) echo 'selected';?>>In-Active</option>
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
                              <a href="<?php echo site_url('Masters/department') ?>" class="btn btn-block btn-danger">Reset</a>
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
<?php $this->view('js/js_department') ?>
<?php   $this->view('js/custom_js'); ?>
<!-- ========================Script==========================