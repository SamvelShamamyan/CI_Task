<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-md-6">
                            <h5>Որոնել</h5>
                        </div>
                        <div class="col-md-6">
                             <a href="<?= base_url('student'); ?>" class="btn btn-primary" style="float:right">Ետ վերադարձ</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="<?php echo site_url('student/search'); ?>" method="post" class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-select" name="search_school_id">
                                <option value="" selected>Որոնել ըստ դպրոցի...</option>
                                <?php foreach($school_data as $item ):?>
                                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-select" name="search_class_id">
                                <option value="" selected>Որոնել ըստ դասարանի...</option>
                                <?php foreach($get_class_data as $index => $item ): ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group d-flex align-items-center" style="width:420px;">
                                <input type="text" name="search_input_data" class="form-control me-2" placeholder="Մուտքագրեք անուն կամ ազգանուն">
                                 <button type="submit" class="btn btn-primary">Որոնել</button>
                            </div>
                        </div>
                    </div>
                    </form>   

                
                <table class="table table-bordered">
                     <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Դպրոց</th>
                            <th scope="col">Աշակերտ</th>
                            <th scope="col">Դասարան</th>
                            <th scope="col">Առաջին կիսամյակի միջին գնահատական</th>
                            <th scope="col">Երկրորդ կիսամյակի միջին գնահատական</th>
                            <th scope="col">Տարեկանի միջին գնահատական</th>
                            <th scope="col" colspan="2"></th>
                        </tr>
                     </thead>
                        <tbody>
                            <?php if(!empty($data)): ?>
                            <?php foreach($data as $student): ?>
                                <tr>
                                    <th scope="row"><?= $student['id']?></th>
                                    <td style="width:200px;"><?= $student['school_name']?></td>
                                    <td style="width:200px;"><a href="<?= base_url('student/show/'. $student['id']); ?>"><?= $student['student']?></a></td>
                                    <td style="width:200px;"><?= $student['class_name']?></td>
                                    <td style="width:200px;"><?= $student['first_semester_average']?></td>
                                    <td style="width:200px;"><?= $student['second_semester_average']?></td>
                                    <td style="width:200px;"><?= $student['annual_average']?></td>
                                    <td ><a href="<?= base_url('student/edit/'.$student['id']); ?>" class="btn btn-success">խմբագրել</a></td>
                                    <td ><a href="" class="btn btn-danger">Հեռացնել</a></td>
                              </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">Ցուցադրման տվյալներ չեն գտնվել</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

