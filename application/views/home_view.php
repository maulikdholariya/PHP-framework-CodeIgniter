<p class="bg-success">

    <?php if ($this->session->flashdata('login_success')): ?>

    <?php echo $this->session->flashdata('login_success'); ?>

    <?php endif;?>

</p>

<p class="bg-danger">

    <?php if ($this->session->flashdata('login_failed')): ?>

    <?php echo $this->session->flashdata('login_failed'); ?>

    <?php endif;?>

</p>

<p class="bg-success">

    <?php if ($this->session->flashdata('user_registered')): ?>

    <?php print_r($this->session->flashdata('user_registered'));?>

    <?php endif;?>

</p>

<p class="bg-danger">

    <?php if ($this->session->flashdata('no_access')): ?>

    <?php print_r($this->session->flashdata('no_access'));?>

    <?php endif;?>

</p>

<div class="jumbotron">


<h2 class="text-center">Welcome to the CI App</h2>



</div>

<?php if(isset($projects)): ?>
<h1>Projects</h1>

<table class="table table-hover table-bordered table-responsive">
    <thead>
        <tr>
            <th>Project name</th>
            <th>Project Description</th>
            
        </tr>
    </thead>
    <tbody>
    
        <?php foreach ($projects as $project): ?>

        <tr>
            <td><?php echo $project->project_name; ?></td>
            <td><?php echo $project->project_body; ?></td>
            <td ><a class=""href="<?php echo base_url(); ?>projects/display/<?php echo $project->id; ?>">View</a></td>
        </tr>
        <?php endforeach;?>
        <?php endif; ?>
    </tbody>
</table>