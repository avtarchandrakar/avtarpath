
<!-- ========================Header==============Fix========= --> 
<?php $this->view('top_header') ?>
<!-- =======================/Header==============Fix========= -->
<!-- =========================View===============Fix========= -->
<!-- Right Side Content Start -->
<style type="text/css">
  /**/.main-header ul, .main-header ol{
    margin : 0px !important;
    padding: 0px !important;
  }

  /**/.menu-section ul, .menu-section ol{
    margin : 0px !important;
    padding: 0px !important;
  }
  ul,
  ol {
    margin: 10px !important;
    padding: 10px !important;
  }

  li{
    list-style-type: inherit;
  }
</style>
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

                        <a style="margin-right: 5px;" href="<?php echo site_url('Masters/add_collection_center')?>" class="btn btn-info btn-vsm"><i class="fa fa-plus"></i> Add</a>

                        <a style="margin-right: 5px;" href="<?php echo site_url('Welcome')?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="page-box">
               <div class="advance-table">
                   <table id="custom_tbl" class="my_custom_datatable table table-striped table-bordered">
                       <thead>
                           <tr>
                                <th width="5%">#</th>
                                <th>Center Name</th>
                                <th>Area</th>
                                <th>Alias</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Start Lab No</th>
                                <th>Processing Center</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                        <?php
                            $i=1;
                            if(!empty($all_value)){
                            foreach($all_value as $value){
                                $edit_link= site_url('Masters/edit_collection_center?edid=').$value->id;
                            ?>   
                               <tr>
                                 <td><?php echo $i;?></td>
                                 <td><?php echo $value->name;?></td>
                                 <td><?php echo $value->city_name;?></td>
                                 <td><?php echo $value->alias;?></td>
                                 <td><?php echo $value->email;?></td>
                                 <td><?php echo $value->mobile;?></td>
                                 <td><?php echo $value->lab_no;?></td>
                                 <td><?php echo $value->center_name;?></td>
                                 <td><?php echo $value->address;?></td>
                                 <td>
                                    <?php
                                    if (!empty($value->status==1)){
                                    ?>
                                       <a  class="btn btn-success btn-action" title="Active" data-toggle="Active">Active</a>
                                    <?php
                                    }
                                    else{
                                    ?>
                                       <a  class="btn btn-danger btn-action" title="In-Active" data-toggle="In-Active">In-Active</a>
                                    <?php
                                    }
                                    ?>
                                 </td>
                                 <td title="Action" style="white-space: nowrap;">
                                    <a href="<?php echo $edit_link; ?>" class="btn btn-success btn-action" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a>

                                    <button class="btn btn-danger btn-action delete-data" data-value="<?php echo $value->id; ?>" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></button>
                                  </td>
                               </tr>
                            <?php
                            $i++;
                            }
                            }
                          ?>
                       </tbody>
                   </table>
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
<?php $this->view('js/custom_js'); ?>
