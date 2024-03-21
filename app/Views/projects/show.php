<?=$this->extend("projects/layout")?>
 
<?=$this->section("content")?>
<div class="container">
    <h2 class="text-center mt-5 mb-3">Show Project</h2>
    <div class="card">
        <div class="card-header">
            <a class="btn btn-outline-info float-right" href="<?php echo base_url('/projects');?>"> 
                View All Projects
            </a>
        </div>
        <div class="card-body">
        <b class="text-muted">Title:</b>
        <p><?php echo $project->title;?></p>
        <b class="text-muted">Slug:</b>
        <p><?php echo $project->slug;?></p>
        </div>
    </div>
</div>
 
<?=$this->endSection()?>