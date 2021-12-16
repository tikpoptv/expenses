<!doctype html>
<html lang="en">
  <head>
    <?php
    
    require_once 'head.php'

    ?>
  </head>
  <body>
    
  <header>
      <div class="title">
          <h1>รายรับรายจ่าย</h1>
          <p>เลือกปีด้านล่าง</p>
      </div>

      <div class="button">
            <div class="textbutton">
            <a href="2564" class="btn btn-outline-info">2564</a>
                <a href=""  class="btn btn-outline-info" data-toggle="modal" data-target="#error" >2565</a>
            </div>
      </div>
      <!-- Button trigger modal -->
     
      
      <!-- Modal -->
      
</header>
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                      <div class="modal-header">
                              <h5 class="modal-title">error</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                  <div class="modal-body">
                      <div class="container-fluid">
                          ไม่มีข้อมูลรายรับรายจ่ายปีนี้
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
              </div>
          </div>
      </div>
      
      <script>
          $('#exampleModal').on('show.bs.modal', event => {
              var button = $(event.relatedTarget);
              var modal = $(this);
              // Use above variables to manipulate the DOM
              
          });
      </script>
   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>