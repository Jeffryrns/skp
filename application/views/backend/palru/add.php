<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Tambah <?= $title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url("backend/"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data</li>
        <li class="active">Tambah <?= $title; ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="<?=base_url("backend/insert_palru"); ?>" enctype="multipart/form-data" class="form-horizontal">

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">
                            Nama Parlu
                        </label>
                        <div class="col-sm-8">
                            <input name="nama_palru" placeholder="Masukan Nama Parlu" class="form-control" type="text">
                        </div>
                        <span class="help-block"></span>
                    </div>
                    
                    <div class="divider"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-6 text-right">
                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>