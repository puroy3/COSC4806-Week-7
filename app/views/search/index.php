<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
      <div class="page-header" id="banner">
          <div class="row">
              <div class="col-lg-12">
                  <h1>Search for a movie</h1>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-sm-auto">
          <form action="/search/movie" method="post">
            <fieldset>
              <div class="form-group">
                <input required type="text" class="form-control" name="search" placeholder="Type here to search">
              </div>
              <br>
                <button type="submit" class="btn btn-primary">Search</button>
            </fieldset>
          </form>
        </div>
      </div>
</div>