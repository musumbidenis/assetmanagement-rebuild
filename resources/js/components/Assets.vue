<template>
<div class="container-fluid">
    <div class="row">
            <!-- Edit assets Card Start -->
    <div class="col-lg-12 col-md-6 col-sm-6">
        <div class="card ">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
            <i class="material-icons">info</i>
            </div>
            <h4 class="card-title">Edit Records</h4>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#articleModal">Add article</button>
        </div>

        <!-- Display the assets available in the database -->
        <div class="card-body">
        <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
        </div>
        <div class="material-datatables">
            <table id="datatables02" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
            <thead>
                <tr>
                <td>Asset Name</td>
                <td>Serial Number</td>
                <td>Asset Description</td>
                <td class="disabled-sorting text-right">Action</td>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>hh</td>
            <td>hhhh</td>
            <td>hhhh</td>
            </tr>
            </tbody>
            <tfoot>
                <tr>
                <td>Asset Name</td>
                <td>Serial Number</td>
                <td>Asset Description</td>
                <td class="disabled-sorting text-right">Action</td>
            </tr>
            </tfoot>
            <tbody>
            </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>
    <!-- Edit assets Card End -->
    </div>
</div>
</template>
<script>
export default {
    
}
</script>