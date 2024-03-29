<?php
    include("header.php");
   ?>

<div class="container">
        <div class="row" id="row">
           
        </div>
    </div>
    <script src="js/data.js"></script>
    <script>
        for(i of smartwatch){
            $("#row").append(`
            <div class="col-md-4 mt-5">
                <div class="card text-center "id="outlinerem" style="width: 18rem;">
                  <img src="image/${i.imgsrc}" class="card-img-top" alt="...">
                  <button type="submit" class="btn btn-primary cardbtn" data-bs-toggle="tooltip" data-bs-placement="top" title="shopping now" ><a href="productDetail.html?type=smartwatch&id=${i.id}">
            Shopping now</a>
          </button>
          <button type="submit" class="btn btn-primary cardbtn mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="campare now" ><a href="compare.html?type=smartwatc&id=${i.id}"><i class="fa-solid fa-code-campare"></i>
            Campare</i></a>
      </button>
          
                  <div class="card-body ">
                    <p class="card-title text-primary">${i.title}</p>
                    <p class="card-text mt-3 text-danger">Rs. ${i.price}</p>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning"  aria-hidden="true"></i>
                    <p class="card-text mt-3 text-success"><i class="fa fa-circle" aria-hidden="true"> in the stock</i>
                    </p>
                    
                  </div>
                </div>
              </div>
            `)
        }
    </script>
    <?php
    include("footer.php");
   ?>