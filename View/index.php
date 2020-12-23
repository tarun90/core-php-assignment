<!-- Content Start-->
<section class="content-calendar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-secondary mb-2">HTML table can be pasted directly into Excel using</button>

                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Date</th>
                        <th scope="col">V1</th>
                        <th scope="col">V2</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($owners as $owner): ?>
                        <tr>
                            <td scope="row"><?php echo $owner['id']; ?></td>
                            <td><?php echo $owner['owner']; ?></td>
                            <td><?php echo $owner['date']; ?></td>
                            <td><?php echo $owner['v1']; ?></td>
                            <td><?php echo $owner['v2']; ?></td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if ($owners_count == 0) : ?>
                        <tr>
                            <td colspan="5">No data found</td>
                        </tr>
                    <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Content end-->