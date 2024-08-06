
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-md-6">
                            <h5>Դիտում</h5>
                        </div>
                        <div class="col-md-6">
                             <a href="<?= base_url('student'); ?>" class="btn btn-primary" style="float:right">Ետ վերադարձ</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                
                <table class="table table-bordered">
                     <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Առաջին կիսամյակի միջին գնահատական</th>
                            <th scope="col">Երկրորդ կիսամյակի միջին գնահատական</th>
                            <th scope="col">Տարեկանի միջին գնահատական</th>
                        </tr>
                     </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><?= $data['id']?></th>
                            <td ><?= $data['first_semester_average'] ?></td>
                            <td ><?= $data['second_semester_average'] ?></td>
                            <td ><?= $data['annual_average'] ?></td>
                        </tr>
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>