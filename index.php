<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Determinan Matriks 3x3</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("assets/bg.gif");
        background-size: cover;
      }
      .card {
        border-radius: 1rem;
      }
      h1 {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        text-align: center;
      }
      table td {
        padding: 0.5rem;
      }
      .form-control {
        text-align: center;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class="card shadow p-4 border-0">
            <div class="card-body">
              <h1>Determinan Matriks Ordo 3x3</h1>
              <form action="proses.php" method="post">
                <table class="table table-bordered text-center align-middle">
                  <tr>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a11"
                        required
                      />
                    </td>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a12"
                        required
                      />
                    </td>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a13"
                        required
                      />
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a21"
                        required
                      />
                    </td>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a22"
                        required
                      />
                    </td>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a23"
                        required
                      />
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a31"
                        required
                      />
                    </td>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a32"
                        required
                      />
                    </td>
                    <td>
                      <input
                        class="form-control"
                        type="number"
                        name="a33"
                        required
                      />
                    </td>
                  </tr>
                </table>
                <div class="d-grid mt-3">
                  <button
                    class="btn btn-success"
                    type="submit"
                    name="input-matriks"
                  >
                    Kerjakan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
