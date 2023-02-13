<nav>
<div class="navbar">
    <a href="<?=config('app.url'); ?>">Home<span></span></a>
    <div class="dropdown">
        <button class="dropbtn">Events 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=config('app.url'); ?>/events/list">List</a>
            <a href="<?=config('app.url'); ?>/events/add">Add</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn">Menu 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=config('app.url'); ?>/menu/list">List</a>
            <a href="<?=config('app.url'); ?>/menu/add">Add</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn">Dish 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=config('app.url'); ?>/dish/list">List</a>
            <a href="<?=config('app.url'); ?>/dish/add">Add</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn">Contrator 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=config('app.url'); ?>/contrator/list">List</a>
            <a href="<?=config('app.url'); ?>/contrator/add">Add</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Recipes 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="<?=config('app.url'); ?>/recipes/list">List</a>
            <a href="<?=config('app.url'); ?>/recipes/add">Add</a>
        </div>
    </div>
    @if(Auth::check())
    <a href="<?=config('app.url'); ?>/logout">Log out</a>
    @else
    <a href="<?=config('app.url'); ?>/register">Login</a>
    @endif
</div>
</nav>