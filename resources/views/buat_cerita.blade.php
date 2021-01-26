<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>New Story</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="http://cdn.staticfile.org/font-awesome/4.0.3/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- Link Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <!-- Link Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="./assets/dist/qeditor/jquery.qeditor.css"
      type="text/css"
    />
    <link href="./assets/dist/css/styles.css" rel="stylesheet" />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="./assets/dist/qeditor/jquery.qeditor.js"
      type="text/javascript"
    ></script>
  </head>
  <body>
    <!-- Header -->
  <nav class="navbar navbar-light" >
    <a class="navbar-brand" href="#" id="teks">
      <img src="src/images/blue-icon.png" height="44" class="d-inline-block align-top" alt="" loading="lazy">
    <form class="form-inline">
      <a class="navbar-text" href="#" id="teks-nav">Universitas</a>
      <a class="navbar-text" href="#" id="teks-nav">Artikel</a>
      <button>  Keluar  </button>
    </form>
  </nav>
  <!-- /Header-->
    </header>
    <section class="main-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="mt-4 title-blue">Buat Ceritamu</h3>

            <!-- form isi cerita -->
            <form class="story-form" method="post" action="function.php"  enctype="multipart/form-data">
              <div class="d-flex flex-row-reverse">
                <button type="submit" name="unggah" class="btn btn-primary btn-submit">
                  Unggah
                  <i class="ml-2 fa fa-arrow-right" aria-hidden="true"></i>
                </button>
              </div>

              <div class="input-group" style="width: 20%">
                <div class="custom-file">
                  <h6 class="mt-4 title-blue">Input foto thumbnail</h6>
                </div>
              </div>
              <div class="input-group" style="width: 20%">
                <div class="custom-file">
                  <input type="file" name="gambar"></input>
                </div>
              </div>

              <div class="form-group pt-4">
                <input
                  type="text"
                  class="form-control input-title"
                  placeholder="Judul"
                  name = "judul" required
                />
              </div>
              <div class="form-group pt-4">
                <input
                  type="text"
                  class="form-control input-title"
                  placeholder="Topik"
                  name = "topik" required
                />
              </div>
              <div class="form-group pt-4">
                <textarea
                  id="post_body"
                  name="body"
                  class="form-control input-story pt-4"
                  placeholder="Cerita..." required
                ></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      $("#post_body").qeditor({});

      // Custom a toolbar icon
      var toolbar = $("#post_body").parent().find(".qeditor_toolbar");
      var link = $(
        "<a href='#'><span class='icon-smile' title='smile'></span></a>"
      );
      link.click(function () {
        alert("Put you custom toolbar event in here.");
        return false;
      });
      toolbar.append(link);

      // Custom Insert Image icon event
      function changeInsertImageIconWithCustomEvent() {
        var link = toolbar.find("a.qe-image");
        link.attr("data-action", "");
        link.click(function (e) {
          alert("New insert image event");
          return false;
        });
        alert("Image icon event has changed, you can click it to test");
        return false;
      }

      $("#submit").click(function () {
        alert($("#post_body").val());
      });
    </script>
  </body>
</html>
  