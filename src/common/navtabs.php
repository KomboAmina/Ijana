<nav>

<ul class="nav nav-pills mb-4 justify-content-end">

<?php if(!empty($this->currencies)){?>
  <li class="nav-item me-2">
      <div class="dropdown">
        <button class="nav-link rounded-4 dropdown-toggle"
         type="button"
          data-bs-toggle="dropdown" aria-expanded="false" title="choose a currency">
          <?php echo $curr;?>
        </button>
        <ul class="dropdown-menu h-50 scrollable-y rounded-4">
          <?php foreach($this->currencies as $label=>$currency){?>
          <li><a class="dropdown-item<?php if($label==$curr){?> active<?php }?>"
           href="?curr=<?php echo $label;?>"><?php echo $label;?></a></li>
          <?php }?>
        </ul>
      </div>
  </li>
  <?php }?>

    <?php
    
    foreach($this->routes as $routeTab){?>
        <li class="nav-item me-2">
            <a class="nav-link rounded-4
            <?php if(isset($routeTab) && $routeTab==$this->route){?>active"
            aria-current="page<?php }?>"
            href="<?php echo URL.$routeTab."/".$navLink;?>#now"><?php echo $routeTab;?></a>
        </li>
  <?php }
  
  ?>

</ul>

</nav>
