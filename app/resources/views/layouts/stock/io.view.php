<?php

$titlePage=returnMessage()['stock']['title'];

define("base", $_SERVER['DOCUMENT_ROOT']."/app/resources/views/layouts/");

require base.'base/header.view.php';

?>

<main>
    <div class="container-fluid">

        <?php require "app/resources/views/errors/errors.view.php"; ?>

        <header id="main-header">
            <h1><?= $titlePage; ?></h1>
            <p>Halaman ini menangani data terkait stock in</p>
            <button class="btn btn-sm btn-header btn-modal" id="create-stock"><span class="glyphicon glyphicon-pencil"></span> Tambahkan</button>
        </header>

        <div class="sub-header"> 
            <form action="/stock/io" method="GET" style="display:inherit">    
                <input type="hidden" name="search" value="true">
                <div class="search" id="product-based">
                    <div class="form-group">
                        <select name="category" class="form-control">
                            <option value=''>Category</option>
                            <?php foreach($category as $cat): ?>cat
                                <option title="<?= $cat->name; ?>" value=<?= $cat->id ?>><?= makeItShort($cat->name, 50); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="search" id="product-based">
                    <div class="form-group">
                        <select name="product" class="form-control">
                            <option value=''>Product</option>
                        </select>
                    </div>
                </div>
                <div class="search">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button> 
                </div>     
            </form>
        </div>

        <div class="info">
            <label><span class="glyphicon glyphicon-floppy-saved"></span> Jumlah data: <?= $sumOfAllData; ?></label>
        </div>

        <div class="main-data" >
            <?php if(count($stockData)<1): ?>
                <div class="text-center">Belum terdapat data tersimpan</div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>In</th>
                                <th>Out</th>
                                <th>Available</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($stockData as $data): ?>
                                <tr>
                                    <td><?= ucfirst($data->product); ?></td>
                                    <td><?= ucfirst($data->category); ?></td>
                                    <td><?= $data->stock_in; ?></td>
                                    <td><?= $data->stock_out; ?></td>
                                    <td><?= $data->stock_in-$data->stock_out; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="<?= (strpos($_SERVER['REQUEST_URI'], '?')==false)?rtrim($_SERVER['REQUEST_URI'],'/').'?download=true':rtrim($_SERVER['REQUEST_URI'],'/').'&download=true'; ?>" target="_blank"><button type="button" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Download</button></a>
                </div>
            <?php endif; ?>
            <!-- START PAGINATION -->
            <?php 
                if($pages>1){
                    echo pagination($pages);
                }
            ?>
            <!-- END OF PAGINATION -->

        </div>
        
        <div class="app-form modal" id="modal-create-stock">         
            <div class="modal-content" style="width:70%">
                <div class="modal-header">
                    <h3>Tambahkan <?= $titlePage; ?></h3>
                </div>
                
                <div>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <button type="button" class="btn btn-lg btn-default btn-modal" data-id="stock-io" data-val=1>In</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button type="button" class="btn btn-lg btn-default btn-modal" data-id="stock-io" data-val=2>Out</button>
                        </div>
                    </div>
                </div>
                <hr>

                <form action="/stock/new-stock" method="POST" class="form-modal" id="modal-stock-io" style="display:none;">
                    <input type="hidden" name="status" value="">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <input type="radio" name="doc_type" value="11"><strong>Reciept</strong> 
                        </div>
                        <div class="col-md-6 text-center">
                            <input type="radio" name="doc_type" value="6" required><strong>DO</strong>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nomor</label>
                        <select name="doc_number" class="form-control" required>
                        </select>
                    </div>
                    <div class="data-respond"></div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="receive_send_date" class="form-control"  required>
                    </div>

                    <div class="modal-wizard show">
                        <div class="row inline-input">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Produk</label>
                                    <select name="product[]" class="form-control" required>
                                        <option value=''>PRODUK</option>
                                        <?php foreach($products as $product): ?>
                                            <option title="<?= $product->name; ?>" value=<?= $product->id ?>><?= (strlen($product->name)>50)?substr(ucfirst($product->name),0, 50)."...":ucfirst($product->name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="number" min=0 name="quantity[]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input type="text" name="unit[]" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="remark[]" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <!--<span><button class="btn btn-danger btn-float"><span class="glyphicon glyphicon-trash"></span></button></span>-->
                        <button type="button" class="btn btn-default btn-add-input-form">Tambah</button>
                    </div>
                    

                    <button type="button" class="btn btn-danger btn-close" >Tutup</button>
                    <button type="submit" class="btn btn-md btn-primary" style="float:right;"><span class="glyphicon glyphicon-send"></span> Kirim</button>
                </form>

                <button type="button" class="btn btn-danger btn-close btn-close-top"><span class="glyphicon glyphicon-remove"></span></button>
            
            </div>
        </div>
        
    </div>
</main>

<script type="text/javascript">
    $(document).ready(function(){

        $("[data-id~='stock-io']").on("click", function(){
            $("[data-id~='stock-io']").removeClass("active");
            $(this).toggleClass("active");
            $("#modal-stock-io").find("input[name~='status']").val($(this).attr("data-val"));
        });

        //Get the document number
        $("input[name~='doc_type']").on("click", function(){
            $("#modal-create-stock").find(".modal-content").find(".data-respond").empty();

            var stat = $(this).closest("form").find("input[name~='status']").val();
            var docType = $(this).val();

            var link = "";
            if(docType==11){
                link = '/form/receipt/get-number';
            }else if(docType==6){
                link = '/form/do/get-number';
            }

            $.get(link, {status:stat}, function(data, status){
                var responds=JSON.parse(data);
                
                var doNumber="<option value='0'>Number</option>";
                
                if(responds.length>0){
                    for(var i=0; i<responds.length; i++){
                        doNumber+="<option value="+responds[i].id+">"+responds[i].doc_number+"</option>";
                    }   
                }    
                $("#modal-stock-io").find("select[name~='doc_number']").empty().append(doNumber);
            });
        });
        
        $("#modal-create-stock").on("change", "select[name~='doc_number']", function(){

            var docType = $("#modal-create-stock").find("input[name~='doc_type']:checked").val();
            
            var link = "";

            if(docType==1){
                link = '/form/receipt/detail';
            }else if(docType==2){
                link = '/form/do/detail';
            }

            var docNumber = $(this).find("option:selected").val();
            
            if(docNumber!=0 && docNumber!=null && docNumber.length>0){
                $.get(link, {do:docNumber, r:docNumber})
                .done(function( data ) {
                        
                    var responds=JSON.parse(data);

                    var docData;
                    var docNum;
                    var docDate;
                    var supplier;
                    var buyer;
                    var docNumber;
                    var items;
                    
                    if(docType==1){
                        docData = responds.receiptData[0];
                        docNum = docData.receipt_number;
                        docDate = docData.receipt_date;

                        items = responds.receiptItems;
                        
                        docNumber = "Receipt: <a href='/form/receipt/detail?r="+docData.id+"' target='blank'>"+docNum+"</a>";
                        
                    }else if(docType==2){
                        docData = responds.doData[0];
                        docNum = docData.do_number;
                        docDate = docData.do_date;
                        poNum = docData.po_number;

                        items = responds.doItems;
                        
                        docNumber = "PO: <a href='/form/po/detail?po="+docData.po+"' target='_blank'>"+poNum+"</a><br>";
                        docNumber += "DO: <a href='/form/do/detail?do="+docData.id+"' target='_blank'>"+docNum+"</a>";

                    }
                    
                    supplier = docData.supplier;
                    buyer = docData.buyer                 

                    var order = "<h3>Supplier: "+supplier+"</h3><h3>Buyer: "+buyer+"</h3>";
                    order+="<h4><span style='background-color:#95DEE3;'>"+docNumber+"</span></h4><h4>Date:"+docDate+"</h4>";

                    order += "<table class='table table-striped'><thead><tr><th>Part Number</th><th>Product</th><th>Qty</th></tr></thead><tbody>";
                    
                    for(var i=0; i<items.length; i++){
                        order += "<tr data-item="+items[i].pid+"><td>"+items[i].part_number+"</td>";
                        order += "<td>"+items[i].product+"</td>";
                        order += "<td>"+items[i].quantity+"</td></tr>";
                    }

                    order += "</tbody></table>";
                        
                    $("#modal-create-stock").find(".modal-content").find(".data-respond").empty().append(order);

                });
            }else{
                $("#modal-create-stock").find(".modal-content").find(".data-respond").empty().append("Belum terdapat data");
            }
        });
    });
</script>

<?php

require base.'base/footer.view.php'

?>
