
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-md-6">
                            <h5>խմբագրել</h5>
                        </div>
                        <div class="col-md-6">
                             <a href="<?= base_url('student'); ?>" class="btn btn-primary" style="float:right">Ետ վերադարձ</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="<?= base_url('student/update/'.$data['id']); ?>" method="POST">
                            <div class="form-group">
                            <label for="first_semester_average">Առաջին կիսամյակի միջին գնահատական</label>
                            <input type="number" name="first_semester_average"  value="<?= $data['first_semester_average']?>" min="2.0" max="10" step="0.1" class="form-control" id="first_semester_average" placeholder="Առաջին կիսամյակի միջին գնահատական">
                            <small><?= form_error('first_semester_average'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="second_semester_average">Երկրորդ կիսամյակի միջին գնահատական</label>
                            <input type="number" name="second_semester_average" value="<?= $data['second_semester_average']?>" min="2.0" max="10" step="0.1" class="form-control" id="second_semester_average" placeholder="Երկրորդ կիսամյակի միջին գնահատական">
                            <small><?= form_error('second_semester_average'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="annual_average">Տարեկանի միջին գնահատական</label>
                            <input type="number" name="annual_average" value="<?= $data['annual_average']?>" min="2.0" max="10" step="0.1" class="form-control" id="annual_average" placeholder="Տարեկանի միջին գնահատական">
                            <small><?= form_error('annual_average'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" style="float:right">խմբագրել</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





