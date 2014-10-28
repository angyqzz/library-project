<?php include('header.php');?>
<?php include('db.php');?>


<div class="container-fluid">
<div class="row">
  <div class="col-md-2">
      <div class="list-group">
          <div class="list-group-item disabled">
              <div class="row" style="line-height:1em;">
                  <div class="col-md-4"><p style="margin-top:8px;">Groups</p></div>
                  <div class="col-md-8 text-right"><button class="btn btn-info btn-sm">Add New Group</button></div>
              </div>
          </div>
          <a href="#" class="list-group-item group-filter" id='all'>All</a>
          <?php foreach ($muutuja as $nimi) : ?>
                <a href="#" class="list-group-item group-filter" data-name="<?php echo $nimi; ?>"><?php echo $nimi; ?></a>
          <?php endforeach ?>
        </div>
  </div>
  <div class="col-md-9">
      <h3>All</h3>
    <ul class="pagination">
        <li><a href="#" class="filter" data-filter="all">All</a></li>
        <?php foreach (range('A', 'Z') as $alpha) : ?>
            <li><a href="#" class="filter" data-filter=".<?php echo $alpha;?>"><?php echo $alpha;?></a></li>
        <?php endforeach ?>
    <li style="padding: 0px 10px;"> <button class="btn btn-primary btn-lm" data-toggle="modal" data-target="#myModal">
  Add New Book
</button></li>  
      </ul>
      <div class="row" id="con">
          <?php foreach ($book as $i => $item) : ?>
          <div class="col-md-2 mix <?php echo $item['Title'][0]; ?>" id="<?php echo $item['Gr']; ?>">
              <div class="panel panel-default book-info">
                  <div class="panel-body">
                      <h4><?php echo $item['Title']; ?></h4>
                      <h4><small><?php echo $item['Author'] ?>, <?php echo $item['ISBN'] ?></small></h4>
                      <img src="/library/img/covers/<?php echo $item['Image']?>" alt="..." class="img-thumbnail">
                  </div>
                    <div class="book-hover">
                        <div class="b-text">
                           <h1><?php echo $item['Title']; ?></h1>
                            <div class="push-down">
                                <button class="btn btn-block btn-primary">Edit</button>
                                <button class="btn btn-block btn-primary">Delete</button>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
          <?php endforeach ?>
    </div>
    </div>
</div>
</div>
    
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Book</h4>
      </div>
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#home" role="tab" data-toggle="tab">Manually</a></li>
          <li><a href="#profile" role="tab" data-toggle="tab">Look in the web</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="manual">
                <form id="add-book-manual" style="padding:10px 0px;" action="process.php" method="POST">
                  <div class="form-group">
                    <label for="Title">Book Title</label>
                    <input type="text" class="form-control" name="Title" placeholder="Title" id="Title">
                  </div>
                  <div class="form-group">
                    <label for="Author">Author</label>
                    <input type="text" class="form-control" name="Author" placeholder="Author">
                  </div>
                    <div class="form-group">
                    <label for="ISBN">ISBM</label>
                    <input type="text" class="form-control" name="ISBN" placeholder="ISBN">
                  </div>
                  <!--<div class="checkbox">
                      <?php foreach ($muutuja as $nimi) : ?>
                        <label>
                          <input type="checkbox"> <?php echo $nimi; ?>
                        </label>
                    <?php endforeach ?>
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cover </label>
                        <button class="btn btn-primary btn-sm">Google</button>
                  </div>-->
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
          <div class="tab-pane" id="profile">
             <form class="form-inline" role="form" style="padding:10px 0px;">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="ISBN">
                  </div>
                  <button type="submit" class="btn btn-default">Search</button>
                </form>
            
            </div>
        </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
    
    <script src="/library/js/jquery.mixitup.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     <script>
        $(function(){

            // Instantiate MixItUp:

            $('#con').mixItUp();
            console.log('Working');

        });
    </script>
    <script src="/library/js/action.js"></script>
    <script src="/library/js/ajax.js"></script>

</body>
</html>