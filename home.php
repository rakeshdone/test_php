<?php
include "db.php";
is($_SERVER["REQUEST_METHOD"]==="POST"){
    $bookid=$_POST["bookid"];
    $booktitle=$_POST["booktitle"];
    $authorname=$_POST["authorname"];
     $gener=$_POST["gener"];
    $avlablecopies=$_POST["avlablecopies"];

    $sql=$conn->prepare("insert into  books values (?,?,?,?,?)");
    $sql->bind_param("issss", $bookid, $booktitle, $authorname, $gener, $avlablecopies);
    if ($sql->execute()) {
        header("Location:login.php");
    }
    

}






?>






<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <h5>Heloo <?php echo $_SESSION["name"] ?></h5>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Add book</a>
                            </li>
                            

                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0" action="logout.php">
                        
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>


                    </div>
                </div>
            </nav>
            
        </header>



        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"
                ></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img
                        src="https://images.theconversation.com/files/45159/original/rptgtpxd-1396254731.jpg?ixlib=rb-4.1.0&q=45&auto=format&w=754&fit=clip"
                        class="w-100 d-block"
                        alt="First slide"
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="https://images.squarespace-cdn.com/content/v1/5876279bbebafb82a7c81c00/f4e17d6a-81db-4a04-9bda-63c86c517778/IMG_3105.jpg"
                        class="w-100 d-block"
                        alt="Second slide"
                        height=400px
                    />
                </div>
                <div class="carousel-item">
                    <img
                        src="https://media.karanbajaj.com/karan-live/wp-content/uploads/2015/08/18160701/book-stack.jpg"
                        class="w-100 d-block"
                        alt="Third slide"
                    />
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <main>
        
        <h3 class="text-center my-4">Add </h3>

        <div
            class="container col-5 shadow rounded p-4"
        >
<form action="" method="POST">
    <div class="mb-3">
        <label for="" class="form-label">Bookid</label>
        <input
            type="number"
            class="form-control"
            name="bookid"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    


    <div class="mb-3">
        <label for="" class="form-label">book title</label>
        <input
            type="text"
            class="form-control"
            name="booktitle"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Author name</label>
        <input
            type="text"
            class="form-control"
            name="authorname"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Genre</label>

        <input
            type="text"
            class="form-control"
            name="genre"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Total copies</label>
        <input
            type="text"
            class="form-control"
            name="avlablecopies"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    
    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit
    </button>
    
</form>
        </div>


        <h3 class="text-center">Employee Table</h3>

        <div
            class="container"
        >
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Book id</th>
                            <th scope="col">BOOK TITLE</th>
                            <th scope="col">Author name</th>
                            <th scope="col">Gener</th>
                            <th scope="col">Avlable copies</th>
                            <th scope="col">ACTIONS</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  while ($row=$result->fetch_assoc()) {?>
                 
                        <tr class="">
                            <td scope="row"><?= $row["bookid"] ?></td>
                            <td><?= $row["booktitle"] ?></td>
                            <td><?= $row["authorname"] ?></td>
                            <td><?= $row["gener"] ?></td>
                            <td><?= $row["avlablecopies"] ?></td>
                            <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="edit.php?id=<?= $row["id"]?>"
                                role="button"
                                >Edit</a
                            >
                            </td>
                            <td><a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="delete.php?id=<?= $row["id"]?>"
                                role="button"
                                >Delete</a
                            >
                            </td>
                        </tr>

                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
            
        </div>




        
        





        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
