<!-- HEADER -->
<?php include('templates/header.php') ?>
<!-- MAIN -->
<div class="container">
    <form action="add.script.php" method="POST">
        <fieldset>
            <legend>
                <h3>New film</h3>
            </legend>
            <!-- title director -->
            <div class="row">
                <label class="black-text" for="title">Title:</label><br>
                <input type="text" id="title" name="title" placeholder="title"><br>
                <label class="black-text" for="director">Director:</label><br>
                <input type="text" id="director" name="director" placeholder="director"><br>
            </div>
            <!-- category year -->
            <div class="row">
                <!-- catetory -->
                <div class="col s5 push col-10">
                    <div class="row">
                        <div class="col col-10">
                            Choose a category:</div>
                    </div>
                    <div class="row">
                        <div class="col col-10">
                            <!-- thriller -->
                            <label>
                                <input class="with-gap" name="category" type="radio" />
                                <span class="black-text">Thriller</span>
                            </label>

                            <p>
                                <label>
                                    <input class="with-gap" name="category" type="radio" />
                                    <span class="black-text">Romantic</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="category" type="radio" />
                                    <span class="black-text">Swedish</span>
                                </label>
                            </p>

                        </div>

                        <!-- animated -->
                        <div class="col col-6">

                            <label>
                                <input class="with-gap" name="category" type="radio" />
                                <span class="black-text">Animated</span>
                            </label>

                            <p>
                                <label>
                                    <input class="with-gap" name="category" type="radio" />
                                    <span class="black-text">Comedy</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- year -->
                <div class="col right col-2"><label class="black-text flow-text" for="year">Year:</label><br>
                    <input type="year" id="year" name="year" placeholder="1900"><br>
                </div>
            </div>
    </form>
    </fieldset>
    <button class="btn waves-effect btn-large waves-light m-12" type="submit" name="action">Send<i class="material-icons right">send</i></button>
</div>

</div>

<!-- FOOTER -->
<?php include('templates/footer.php') ?>